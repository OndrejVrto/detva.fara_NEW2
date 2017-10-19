<?php
// nasledujúci kód prejde zakaždým všetky albumy v galérii a vytvorí im XML súbory aj zmenšeniny obrázkov
	$zoznam_Adresarov = glob($adresarABS . '*', GLOB_ONLYDIR);
	foreach($zoznam_Adresarov as $zoznam_adresarov_Galeria) {
		$zoznam_adresarov_Galeria = str_replace($adresarABS, '', $zoznam_adresarov_Galeria);
		
		$adresarVSTUPalbum = $adresarFotogaleria . $nazovGalerie . "/" . $zoznam_adresarov_Galeria;
		$adresarVSTUPalbum_html = $adresaFotogalerieHTML . $nazovGalerie . "/" . $zoznam_adresarov_Galeria;
		
		$adresarRELscriptAlbum = $polohaSkriptu . $adresarVSTUPalbum;
		$adresarABSalbum = folder_exist($adresarRELscriptAlbum);
		
		$XMLsuborRELscript = nazov_suboru($adresarRELscriptAlbum);
		$XMLsuborABS = nazov_suboru($adresarABSalbum);
		$XMLsuborVSTUP = nazov_suboru($adresarVSTUPalbum);	
		
		$zoznam_suborov_vsetkych  = scandir($adresarABSalbum);
		$zoznam_suborov_album = array();
		$adresarMiniatury = $adresarABSalbum . '/thumbs';
		
		foreach($zoznam_suborov_vsetkych as $file) {
			$pripona = strrchr($file, '.');
			if(in_array($pripona, $extensions)) {
			
				array_push($zoznam_suborov_album, $file );
				
				if (!is_dir($adresarMiniatury)) {
					mkdir($adresarMiniatury);
					chmod($adresarMiniatury, 0777);
					chown($adresarMiniatury, 'apache');
				}

				$thumb = $adresarMiniatury . '/' . $file;
				if (!file_exists($thumb)) {
					make_thumb($pripona, $adresarABSalbum, $file, $thumb, $thumb_width); 
				}
			}
		}

		if (!file_exists($XMLsuborABS)) {
			VytvorXML($XMLsuborABS, $adresarVSTUPalbum, $adresarVSTUPalbum_html, $zoznam_adresarov_Galeria, $zoznam_suborov_album);
		} else {
			//OpravXML($XMLsuborRELscript);
		}
	}

// začiatok tvorby HTML
	$pocetAdresarov = count($zoznam_Adresarov);
	
	if( $pocetAdresarov == 0 ) {
		$vystupHTML = 'Nie je pridaný žiadny album.';
	} else {
		if (!isset($albumov_na_stranke) or $albumov_na_stranke <= 0){ 
			$albumov_na_stranke = 30; 
		}
		$pocetStranok = ceil( $pocetAdresarov / $albumov_na_stranke );
		if ($cisloListu>$pocetStranok){
			$cisloListu = $pocetStranok;
		}
		
	// vrchný pagination
		$vystupHTML .=  print_pagination2('prve', $pocetStranok, $adresarVSTUP_html, $cisloListu);	
		$vystupHTML .=	"\n\t\t\t\t" . '<div class="card-columns">';
		
	// samotny zoznam albumov
		if ($radenie_albumov == "A-Z"){
			// klasické radenie albumov = od A-Z
			$start = ( $cisloListu * $albumov_na_stranke ) - $albumov_na_stranke;
			for( $i=$start; $i<$start + $albumov_na_stranke; $i++ ){
				$XMLsuborABS = nazov_suboru($zoznam_Adresarov[$i]);
				$vystupHTML .=  print_album_card($XMLsuborABS, $nahodneFotky);
			}
		} else {
			// radenie albumov odzadu = od Z-A
			$start = ($pocetAdresarov + $albumov_na_stranke - 1) - ( $cisloListu * $albumov_na_stranke);
			$ende = $pocetAdresarov-( $cisloListu * $albumov_na_stranke );
			if ($ende < 0){ $ende = 0;	}
		
			for( $i=$start; $i>=$ende; $i-- ) {	
				$XMLsuborABS = nazov_suboru($zoznam_Adresarov[$i]);
				$vystupHTML .=  print_album_card($XMLsuborABS, $nahodneFotky);
			}
		}			
		$vystupHTML .=	"\n\t\t\t\t" . '</div>' . "\n";

	// spodný pagination
		$vystupHTML .=  print_pagination2('druhe', $pocetStranok, $adresarVSTUP_html, $cisloListu);
	}