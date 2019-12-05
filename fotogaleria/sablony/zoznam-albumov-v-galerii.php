<?php

// nasledujúci kód prejde zakaždým všetky albumy v galérii a vytvorí im XML súbory aj zmenšeniny obrázkov
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
		$vystupHTML .=  pagination_vrto($cisloListu, $pocetStranok, $adresarVSTUP_html, '/', 'prve', false, 0, 4 );	
		$vystupHTML .=	"\n\t\t\t\t" . '<div class="card-columns mb-n3">';
		
	// samotny zoznam albumov
		if ($radenie_albumov == "A-Z"){
			// klasické radenie albumov = od A-Z
			$start = ( $cisloListu * $albumov_na_stranke ) - $albumov_na_stranke;
			for( $i=$start; $i < $start + $albumov_na_stranke; $i++ ){
				if ($i > sizeof($zoznam_Adresarov)-1) {
					break;
				}
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
		//$vystupHTML .=  pagination_vrto($aktivnaStranka, $pocetStran, $url_zaciatok, $url_koniec, $id, $opacneCislovanie = false, $velkost = 0 )
		$vystupHTML .=  pagination_vrto($cisloListu, $pocetStranok, $adresarVSTUP_html, '/', 'druhe', false, 0, 4 );	
	}
	
	
function print_album_card($XMLfiles, $nahodneFotky = false){

	$pracovny = '';
	$zalomenie = "\n\t\t\t\t";
	
	$xml = new DOMDocument();
	$xml->load( $XMLfiles );
	
	$pracovny .= $zalomenie . "\t" . '<a href="' . str_replace(" ", '%20', $xml->getElementsByTagName( "LinkRewrite" )->item(0)->nodeValue) . '/1/">';
	$pracovny .= $zalomenie . "\t\t" . '<div class="card shadow mx-sm-0 border-primary">';
	
	if ($nahodneFotky){
		$pocetFotiek = $xml->getElementsByTagName( "PocetFotiek" )->item(0)->nodeValue;
		$titulnaFotkaCislo = rand( 1, $pocetFotiek);
	} else {
		$titulnaFotkaCislo = $xml->getElementsByTagName( "TitulnaFotka" )->item(0)->nodeValue;
	}
	$titulnaFotkaCislo--;
	
	$titulnaFotkaSubor = $xml->getElementsByTagName( "Fotka" )->item($titulnaFotkaCislo)->getAttribute("subor");
	$titulnaFotkaLink = $xml->getElementsByTagName( "LinkFotogaleriaThumbs" )->item(0)->nodeValue . $titulnaFotkaSubor;
	$titulnaFotkaPopisok = $xml->getElementsByTagName( "AlternativnyNazovAlbum" )->item(0)->nodeValue;
	
	$pracovny .= $zalomenie . "\t\t\t" . '<img class="card-img-top" src="' . str_replace(" ", '%20', $titulnaFotkaLink) . '" alt="' . $titulnaFotkaPopisok . '"/>';
	$pracovny .= $zalomenie . "\t\t\t" . '<div class="card-body p-3">';
	
	$titleALBUM = $xml->getElementsByTagName( "NazovAlbumu" )->item(0)->nodeValue;
	$pracovny .= $zalomenie . "\t\t\t\t" . '<h5 class="card-title">' . $titleALBUM . '</h5>';
	
	$datumDEN = $xml->getElementsByTagName( "DenFotenia" )->item(0)->nodeValue . '. ';
	$datumMES = $xml->getElementsByTagName( "MesFotenia" )->item(0)->nodeValue . '. ';
	$datumROK = $xml->getElementsByTagName( "RokFotenia" )->item(0)->nodeValue;
	if ($datumDEN=='. '){$datumDEN='';}
	if ($datumMES=='. '){$datumMES='';}
	$datumAlbumu = $datumDEN . $datumMES . $datumROK;
	if ($datumAlbumu!=''){
		$pracovny .= $zalomenie . "\t\t\t\t" . '<h6 class="card-subtitle mb-2 text-muted">' . $datumAlbumu . '</h6>';
	}
	
	$titulokAlbumu = $xml->getElementsByTagName( "TitulokAlbumu" )->item(0)->nodeValue;
	if ($titulokAlbumu!=''){
		$pracovny .= $zalomenie . "\t\t\t\t" . '<p class="card-text">' . $titulokAlbumu . '</p>';	
	}
	
	$fotil = $xml->getElementsByTagName( "AutorFotiek" )->item(0)->nodeValue;
	if ($fotil!=''){
		$pracovny .= $zalomenie . "\t\t\t\t" . '<p class="card-text"><small class="text-muted">' . $fotil . '</small></p>';		
	}
	
	$pracovny .= $zalomenie . "\t\t\t" . '</div>';	
	$pracovny .= $zalomenie . "\t\t" . '</div>';
	$pracovny .= $zalomenie . "\t" . '</a>';
	$pracovny .= "\n";
	
	return $pracovny;
}