<?php
	// vstupy
	$cesta = "../_fotoalbumy/2015/2015-12-25_Betlehemci_na_fare";
	//$cesta = "../galeria/albums/2007-07-28 Vysviacka klastora";
	$subor = nazov_suboru(folder_exist($cesta));
		
	if(FALSE == ($path = folder_exist($cesta))){
		die('Adresár "' . $path . '" neexistuje');
	}
/*
	echo $cesta;
	echo "\n";
	echo "Subor: " . $subor;
	echo "\n";
	echo "Adresár: " . folder_exist($cesta);
	echo "\n";*/
	
	if (file_exists( $subor )){
		OpravXML($subor);
	} else {
		VytvorXML($subor);
	}
	//echo $subor;
VytvorXML('../_fotoalbumy/2015/2015-12-25_Betlehemci_na_fare/2015-12-25_Betlehemci_na_fare.xml');

/**
 * Checks if a folder exist and return canonicalized absolute pathname (long version)
 * @param string $folder the path being checked.
 * @return mixed returns the canonicalized absolute pathname on success otherwise FALSE is returned
 */
function folder_exist($folder) {
    // Get canonicalized absolute pathname
    $path = realpath($folder);
    // If it exist, check if it's a directory
    if($path !== false AND is_dir($path)){
        // Return canonicalized absolute pathname
        $path = str_replace("\\", "/",$path );
		return $path;
    }

    // Path/folder does not exist
    return false;
}
	
function nazov_suboru($cestaVSTUP){
	$separator = '/';
	$cestaPracovna = '';
	$path = array_filter(explode('/', $cestaVSTUP));
	foreach ($path AS $x => $crumb) {
		$cestaPracovna = $cestaPracovna . $crumb . $separator;
	}
	$subor = $path[end(array_keys($path))] . '.xml';
	$subor =  $cestaPracovna . $subor;
	
	return $subor;
}




function OpravXML($cesta){
	//echo "Oprav XML";    // dorobit kod
}
	
function VytvorXML($cesta){
	
	// tento kod treba dokoncit - zatial sa vyplnaju len preddefinovane konstanty
	
	$xmlNEW = new DOMDocument('1.0', 'UTF-8');

	
	//echo $cesta;
	
	
	$xmlNEW->xmlStandalone = FALSE;
	$xmlNEW->formatOutput = TRUE;
	$xmlNEW->preserveWhiteSpace = TRUE;

	$xmlNEW->appendChild( $xmlNEW->createComment( "\n Vzorový XML - vytvorený automaticky.\n Orientacia:  V = vertical, H = horizontal \n" ) );
	$xmlNEW_album = $xmlNEW->createElement( "Album" );
	$xmlNEW_album->setAttribute( "Vytvorene", date("Y-m-d H:i:s"));
	$xmlNEW->appendChild( $xmlNEW_album );

		// Popis albumu
		$xmlNEW_popisalbumu = $xmlNEW->createElement( "PopisAlbumu" );
		$xmlNEW_popisalbumu->setAttribute( "Adresar", "2015-01-13-Omsa-sv-Terezka" );
		$xmlNEW_album->appendChild( $xmlNEW_popisalbumu );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "VypnutAlbum", "FALSE" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "VypnutTitulky", "FALSE" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "DenFotenia", "13" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "MesFotenia", "01" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "RokFotenia", "2015" ) );

//z ineho kodu - automaticky vlozeny nazov
//$NazovALBUMU = str_replace(Array('%20', '-'), Array(' ', ' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $nazovADRESARA)));
			
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "NazovAlbumu", "POKUS2  - Omša sv. Terezka" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "TitulokAlbumu", "Aj do Detvy prišla relikvia sv. Terezky. Veriaci si ju uctili pri slávnostnej sv. omši." ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "AutorFotiek", "Zuzana Juhaniaková" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "NacitanePripony", ".jpg, .png, .gif, .JPG, .PNG, .GIF" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "PocetFotiek", "12" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkRewrite", "/fotogaleria/2015/2015-01-13-Omsa-sv-Terezka/1/" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkFotogaleria", "/_fotoalbumy/2015/2015-01-13-Omsa-sv-Terezka/" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "AlternativnyNazovAlbum", "Album - Omša sv. Terezka - Náhodný obrázok" ) );
		
		//Zaciatok Zoznamu fotiek
		$xmlNEW_album->appendChild( $xmlNEW->createComment( "\n Komentár na začiatku zoznamu fotiek. \n" ) );
		$xmlNEW_zoznamfotiek = $xmlNEW->createElement( "ZoznamFotiek" );
		$xmlNEW_zoznamfotiek->setAttribute( "Adresar", "2015-01-13-Omsa-sv-Terezka" );
		$xmlNEW_album->appendChild( $xmlNEW_zoznamfotiek );
		
		for ($i = 1; $i <= 3; $i++) {
			// jednotlive fotky
			$xmlNEW_zoznamfotiek->appendChild( $xmlNEW->createComment( " Fotka č. " . $i . " " ) );
			$xmlNEW_fotka = $xmlNEW->createElement( "Fotka" );
			$xmlNEW_zoznamfotiek->appendChild( $xmlNEW_fotka );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Vypnut", $i . " FALSE" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "MenoSuboru", "omsa-terezka-fotka01.jpg" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "LinkFotka", "/_fotoalbumy/2015/2015-01-13-Omsa-sv-Terezka/omsa-terezka-fotka01.jpg" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "LinkFotkaThumbs", "/_fotoalbumy/2015/2015-01-13-Omsa-sv-Terezka/thumb/omsa-terezka-fotka01.jpg" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Orientacia", "V" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Vyska", "1000" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Sirka", "1500" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "AlternativnyNazov", "Fotka albumu - Omša sv. Terezka - 01" ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "TitulokFotky", "Janko nesie obetné dary." ) );
		}
	
	header( "Content-Type: text/plain; charset=utf-8" );
	$xmlNEW->save( $cesta );	
	
	//return $xmlNEW;
	
	//echo "\n\n--------------------------------------------------------------------------------------------------------------\n\n";
	//header("Content-Type: text/plain");
	//echo $xmlNEW->saveXML();	
}



?>