<?php
/*
	$vystupHTML .= "Jeden album - vystup kodu HTML \n<br><br>";

	//vlastný program

	$vystupHTML .=  "Cesta ku skriptu Absolútne: " . __DIR__;
	$vystupHTML .=  "\n\n\n<br><br>";
	$vystupHTML .=  "Galéria: <- Relativne ku skriptu -> " . $adresarRELscript;
	$vystupHTML .=  "\n<br>";
	$vystupHTML .=  "Galéria: <- Absolutne na disku -> " . $adresarABS;
	$vystupHTML .=  "\n<br>";
	$vystupHTML .=  "Galéria: <- Absolutne k WWW -> " . $adresarVSTUP;
	$vystupHTML .=  "\n\n\n<br><br>";
	if (isset($_GET["album"])){
		$vystupHTML .=  "Album: <- Relativne ku skriptu -> " . $adresarRELscriptAlbum;
		$vystupHTML .=  "\n<br>";
		$vystupHTML .=  "Album: <- Absolutne na disku -> " . $adresarABSalbum;
		$vystupHTML .=  "\n<br>";
		$vystupHTML .=  "Album: <- Absolutne k WWW -> " . $adresarVSTUPalbum;
		$vystupHTML .=  "\n\n<br><br>";
		$vystupHTML .=  "Súbor <- Relativne ku skriptu -> " . $XMLsuborRELscript;
		$vystupHTML .=  "\n<br>";	
		$vystupHTML .=  "Súbor <- Absolutne na disku -> " . $XMLsuborABS;
		$vystupHTML .=  "\n<br>";
		$vystupHTML .=  "Súbor <- Absolutne k WWW -> " . $XMLsuborVSTUP;
		$vystupHTML .=  "\n\n\n<br><br>";
	}
	$vystupHTML .=  "Číslo Listu: " . $cisloListu;
	$vystupHTML .=  "\n\n\n<br><br>";
*/

	$vystupHTML .=  "Zoznam adresárov:\n<br>";
	$vystupHTML .=  "------------------";
	$vystupHTML .=  "\n\n\n<br>";


	$zoznam_Adresarov = glob($adresarABS . '*', GLOB_ONLYDIR);
	foreach($zoznam_Adresarov as $zoznam_adresarov_Galeria) {
		$zoznam_adresarov_Galeria = str_replace($adresarABS, '', $zoznam_adresarov_Galeria);
		$vystupHTML .= $zoznam_adresarov_Galeria. "\n<br>";
	}

	$vystupHTML .=  "Počet adresárov: " . count($zoznam_Adresarov) . "<br>";
	
	
	$vystupHTML .=  "\n\n\n<br>";
	$vystupHTML .=  "Zoznam súborov 1 :\n<br>";
	$vystupHTML .=  "------------------";
	$vystupHTML .=  "\n\n\n<br>";
	
	$xml = new DOMDocument();
	if (!file_exists($XMLsuborABS)) {
		VytvorXML($XMLsuborABS);
	}
	
	$xml->load( $XMLsuborABS );
	$titleALBUMx = $xml->getElementsByTagName( "NazovAlbumu" );
	$titleALBUM = $titleALBUMx->item(0)->nodeValue;
	
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

	foreach($zoznam_suborov_album as $file) {
		$vystupHTML .=  $file . "\n<br>";
	}
	$vystupHTML .=  "\n<br>\n<br>";
/*	
	foreach(glob($adresarABSalbum . '*.jpg') as $zoznam_suborov_album) {
		$zoznam_suborov_album = str_replace($adresarABSalbum, '', $zoznam_suborov_album);
		$vystupHTML .= $zoznam_suborov_album . "\n<br>";
	}
	
	$vystupHTML .=  "\n<br>";	
	$vystupHTML .=  "Zoznam súborov 2 :\n<br>";
	$vystupHTML .=  "------------------";
	$vystupHTML .=  "\n\n<br>";
	*/
	

// zobrazí obrázky jedného albumu
	


	if ( count($zoznam_suborov_album) == 0 ) {
		$vystupHTML .=  "\t\t\t\t\t\t";
		$vystupHTML .=  'V albume nie sú pridané žiadne fotografie!';

	} else {

		$numPages = ceil( count($zoznam_suborov_album) / $fotiek_na_stranke );

		if(isset($_GET['p'])) {

		$currentPage = $_GET['p'];
			if($currentPage > $numPages) {
				$currentPage = $numPages;
			}

		} else {
			$currentPage=1;
		} 

	$vystupHTML .=  "\t\t\t\t\t\t\t";
	$vystupHTML .=  '<div class="titlebar">';
	$vystupHTML .=  "\n\t\t\t\t\t\t\t\t";
	$vystupHTML .=  '<div class="text-left">';
	$vystupHTML .=  "\n\t\t\t\t\t\t\t\t\t";
	$vystupHTML .=  '<span class="title">'. $_GET['album'] .'</span>';
	$vystupHTML .=  "\n\t\t\t\t\t\t\t\t\t";
	$vystupHTML .=  '</div>';
	$vystupHTML .=  "\n\t\t\t\t\t\t\t\t";
	$vystupHTML .=  '<div class="float-left">'. count($zoznam_suborov_album).GramatikaObrazky(count($zoznam_suborov_album)) .'</div>';
	$vystupHTML .=  "\n\t\t\t\t\t\t\t";
	$vystupHTML .=  '</div>';
	$vystupHTML .=  "\n\t\t\t\t\t\t\t";
	$vystupHTML .=  '<div class="clear"></div>';
	$vystupHTML .=  "\n<br>";
	
	$start = ( $currentPage * $fotiek_na_stranke ) - $fotiek_na_stranke;
	for( $i=$start; $i<$start + $fotiek_na_stranke; $i++ ) {
		if( isset($zoznam_suborov_album[$i]) && is_file( $adresarABSalbum .'/'. $zoznam_suborov_album[$i] ) ) { 
			$vystupHTML .=  "\n\n\t\t\t\t\t\t\t";
			//  nasledujuca verzia zobrazuje v strede galerie nazov obrazka - treba naprogramovať so súboru
			$vystupHTML .=  '<a class="albumpix" href="'. replace_whitespace($adresarVSTUPalbum) .'/'. replace_whitespace($zoznam_suborov_album[$i]) .'" title="'. $zoznam_suborov_album[$i] .'" >';
			$vystupHTML .=  "\n\t\t\t\t\t\t\t\t";
			$vystupHTML .=  '<div class="thumb shadow">';
			$vystupHTML .=  "\n\t\t\t\t\t\t\t\t\t";
			$vystupHTML .=  '<div class="thumb-wrapper">';
			$vystupHTML .=  "\n\t\t\t\t\t\t\t\t\t\t";
			$vystupHTML .=  '<img rel=\'noindex\' src="'. replace_whitespace($adresarVSTUPalbum) .'/thumbs/'. replace_whitespace($zoznam_suborov_album[$i]) .'" width="'.$thumb_width.'" alt="'. $_GET['album'] .'-'. $i .'" />';
			$vystupHTML .=  "\n\t\t\t\t\t\t\t\t\t";
			$vystupHTML .=  '</div>';
			$vystupHTML .=  "\n\t\t\t\t\t\t\t\t";
			$vystupHTML .=  '</div>';
			$vystupHTML .=  "\n\t\t\t\t\t\t\t";
			$vystupHTML .=  '</a>';

		} else {

			if( isset($zoznam_suborov_album[$i]) ) {
				$vystupHTML .=  $zoznam_suborov_album[$i];
			}
		}
	}
	$urlVars = "album=".replace_whitespace($_GET['album'])."&amp;";
	print_pagination($numPages,$urlVars,$currentPage);
	}
?>
