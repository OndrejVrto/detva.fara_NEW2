<?php
function VytvorXML($cesta){
	
	// tento kod treba dokioncit - zatial sa vyplnaju len preddefinovane konstanty
	
	$xmlNEW = new DOMDocument('1.0', 'UTF-8');

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
	
	header( "Content-Type: application/xml; charset=utf-8" );
	$xmlNEW->save( $cesta );	
	
	//header("Content-Type: text/plain");
	//echo $xmlNEW->saveXML();	
}
?>