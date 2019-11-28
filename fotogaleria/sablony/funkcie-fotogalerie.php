<?php
// Základné konštanty fotogalérií sú v súbore: inicializacne-konstanty-stranok.php

// Ďalšie nastavenie gallerií
	// aké prípony obrázkov sú povolené
	$extensions    = array(".jpg",".png",".jpeg", ".JPG", ".PNG");		// allowed extensions in photo gallery


	$polohaSkriptu = "..";  // poloha skriptu voči koreňovému adresáru WWW
	$vystupHTML = '';   // inicializácia premennej
	$adresarFotogaleria = "/_fotoalbumy/";
	$adresaFotogalerieHTML = "/fotogaleria/";
	
	
/*
	// zapnutie vypisovania chýb
	//error_reporting (E_ALL ^ E_NOTICE);

	$vystupHTML .=  "\n galeria -> ";
	if (isset($_GET["galeria"])){
		$vystupHTML .=  $_GET["galeria"];
	} else {
		$vystupHTML .=  'neexistuje';
	}
	$vystupHTML .=  "<br>\n album -> ";
	if (isset($_GET["album"])){
		$vystupHTML .=  $_GET["album"];
	} else {
		$vystupHTML .=  'neexistuje';
	}
	$vystupHTML .=  "<br>\n p -> ";
	if (isset($_GET["p"])){
		$vystupHTML .=  $_GET["p"];
	} else {
		$vystupHTML .=  'neexistuje';
	}
	$vystupHTML .=  "<br>\n---------------------------------------------------------\n<br>";
*/
	//echo $_SERVER['PHP_SELF'];
	//echo "<br>\n";

	//echo $_SERVER['SERVER_NAME'];
	//echo "<br>\n";
	//echo $_SERVER['HTTP_HOST'];
	//echo "<br>\n";
	//echo $_SERVER['HTTP_REFERER'];
	//echo "<br>\n";
	//echo $_SERVER['SCRIPT_NAME'];
	//echo "<br>\n";
	//echo $_SERVER['SCRIPT_FILENAME'];
	//echo "<br>\n";

	//echo $_SERVER['QUERY_STRING'];
	//echo "<br><br>\n";

//Spoločný kód
	// vloží funkciu pagination
	
	include "../_vlozene/funkcie-paginations.php";
	// function pagination_vrto($aktivnaStranka, $pocetStran, $url_zaciatok, $url_koniec, $id, $opacneCislovanie = false, $velkost = 0 )
	
	// skontroluje či existujú adresáre. Ak nie presmeruje na jednotlivé typy podstránok
	// zároveň naplní základné premenné
	$nazovGalerie = $_GET["galeria"];
	if ($nazovGalerie=='zoznam-galerii'){
		include "sablony/zoznam-galerii.php";
	} else {
		$adresarVSTUP = $adresarFotogaleria . $nazovGalerie . "/";
		$adresarVSTUP_html = $adresaFotogalerieHTML . $nazovGalerie . "/";
		$adresarRELscript = $polohaSkriptu . $adresarVSTUP;
		$adresarABS = folder_exist($adresarRELscript);
		
		if (FALSE == $adresarABS) { redirect("/fotogaleria/zoznam-galerii"); }

		$zoznam_Adresarov = glob($adresarABS . '*', GLOB_ONLYDIR);

		$cisloListu = $_GET["p"];
		if (isset($_GET["album"])){
			$nazovAlbumu = $_GET["album"];
			$adresarVSTUPalbum = $adresarFotogaleria . $nazovGalerie . "/" . $nazovAlbumu ;
			$adresarVSTUPalbumHTML = $adresaFotogalerieHTML . $nazovGalerie . "/" . $nazovAlbumu . "/";

			$adresarRELscriptAlbum = $polohaSkriptu . $adresarVSTUPalbum;
			$adresarABSalbum = folder_exist($adresarRELscriptAlbum);

			if (FALSE == $adresarABSalbum) { redirect("/fotogaleria/" . $nazovGalerie );}

			include "sablony/jeden-album.php";			
		} else {
			include "sablony/zoznam-albumov-v-galerii.php";
		}
	}
	
// Koniec  Spoločný kód



// ZACIATOK - Funkcie

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
		  $path = $path . '/';
		return $path;
    }

    // Path/folder does not exist
    return false;
}

function folder_exist2($folder) {
    // Get canonicalized absolute pathname
    $path = realpath('..' . $folder);
    // If it exist, check if it's a directory
    if($path !== false AND is_dir($path)){
        // Return canonicalized absolute pathname
        $path = str_replace("\\", "/",$path );
		return $path;
    }

    // Path/folder does not exist
    return false;
}

// vytvorí názov XML aj s celou cestou
function nazov_suboru($cestaVSTUP){
	$separator = '/';
	$cestaPracovna = '';
	$path = array_filter(explode('/', $cestaVSTUP));
	foreach ($path AS $x => $crumb) {
		$cestaPracovna = $cestaPracovna . $crumb . $separator;
	}
	$subor = $path[end(array_keys($path))] . '.xml';
	$subor =  $cestaPracovna . $subor;
	if (substr($cestaVSTUP, 0, 1)==$separator){$subor = $separator . $subor;}
	return $subor;
}

// presmeruje na danú stránku
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}


// create thumbnails from images - vytvorenie zmenšeniny obrázku - funguje aj na serveri
function make_thumb($ext, $folder, $src, $dest, $thumb_width) {
	
	/* read the source image */
    if ( $ext == '.jpg' || ext == '.jpeg' || ext == '.JPG' ) {
        $source_image = imagecreatefromjpeg($folder.'/'.$src);
    }
    if ( $ext == '.png' ) {
        $source_image = imagecreatefrompng($folder.'/'.$src);
    }
	
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	$thumb_height = floor($height*($thumb_width/$width));
	$virtual_image = imagecreatetruecolor($thumb_width,$thumb_height);
	imagecopyresampled($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	//imagecopyresized($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	
	if ( $ext == '.jpg' || ext == '.jpeg' || ext == '.JPG' ) {
        imagejpeg($virtual_image,$dest,100);
    }
    if ( $ext == '.png' ) {
        imagepng($virtual_image,$dest,100);
    }
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg')) {
	$files = array();
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}

// Gramatika počtu obrázkov
function GramatikaObrazky($pocet) {
switch ($pocet):
    case 1: return ' obrázok'; break;
    case 2: case 3: case 4: return ' obrázky'; break;
    default: return ' obrázkov';
endswitch;
}

// Gramatika počtu albumov
function GramatikaAlbumy($pocet) {
switch ($pocet):
    case 1: return ' album'; break;
    case 2: case 3: case 4: return ' albumy'; break;
    default: return ' albumov';
endswitch;
}

function replace_whitespace($data) {
	$ready_data = str_replace(" ", "%20", $data);
	// $ready_data = str_replace("%", "%25", $ready_data);
	// $ready_data = str_replace("-", "%2D", $ready_data);
	// $ready_data = str_replace(".", "%2E", $ready_data);
	// $ready_data = str_replace("_", "%5F", $ready_data);
	// $ready_data = str_replace("(", "%28", $ready_data);
	// $ready_data = str_replace(")", "%29", $ready_data);
	return $ready_data;
}


function OpravXML($cesta){
	// len pre potreby testovania vytváram stále novy súbor
	//VytvorXML($cesta);
}
	
function VytvorXML($suborXML, $adresar, $adresar_html, $album , $zoznamSuborov){
	
	$xmlNEW = new DOMDocument('1.0', 'UTF-8');
	
	$xmlNEW->xmlStandalone = FALSE;
	$xmlNEW->formatOutput = TRUE;
	$xmlNEW->preserveWhiteSpace = TRUE;

	//$xmlNEW->appendChild( $xmlNEW->createComment( "\n Vzorový XML - vytvorený automaticky.\n Orientacia:  V = vertical, H = horizontal \n" ) );
	$xmlNEW_album = $xmlNEW->createElement( "Album" );
	$xmlNEW_album->setAttribute( "vytvorene", date("Y-m-d H:i:s"));
	$xmlNEW->appendChild( $xmlNEW_album );

		// Popis albumu
		$xmlNEW_popisalbumu = $xmlNEW->createElement( "PopisAlbumu" );
		$xmlNEW_popisalbumu->setAttribute( "adresar", $album );
		$xmlNEW_album->appendChild( $xmlNEW_popisalbumu );
			//$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "VypnutAlbum", "FALSE" ) );
			//$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "VypnutTitulky", "FALSE" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "DenFotenia", "dd" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "MesFotenia", "mm" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "RokFotenia", date("Y")) );

			$NazovALBUMU = str_replace(Array('%20', '-'), Array(' ', ' '), ucwords(str_replace(Array('.php', '_'), Array('', ' '), $album)));
			$PocetFotiek = count($zoznamSuborov);
			
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "NazovAlbumu", $NazovALBUMU ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "TitulokAlbumu", "" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "AutorFotiek", "" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "TitulnaFotka", rand( 1, $PocetFotiek ) ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkRewrite", $adresar_html ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkFotogaleria", $adresar . '/' ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkFotogaleriaThumbs", $adresar . '/thumbs/' ) );			
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "AlternativnyNazovAlbum", "Album - " . $NazovALBUMU . " - Náhodný obrázok" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "PocetFotiek", $PocetFotiek ) );
			
		//Zaciatok Zoznamu fotiek
		//$xmlNEW_album->appendChild( $xmlNEW->createComment( "\n Komentár na začiatku zoznamu fotiek. \n" ) );
		$xmlNEW_zoznamfotiek = $xmlNEW->createElement( "ZoznamFotiek" );
		$xmlNEW_zoznamfotiek->setAttribute( "adresar", $album );
		$xmlNEW_album->appendChild( $xmlNEW_zoznamfotiek );
		
		$i=0;
		foreach($zoznamSuborov as $e){
			$i++;
			// jednotlive fotky
			//$xmlNEW_zoznamfotiek->appendChild( $xmlNEW->createComment( " Fotka č. " . $i . " " ) );
			$xmlNEW_fotka = $xmlNEW->createElement( "Fotka" );
			$xmlNEW_fotka->setAttribute( "poradoveCisloFotky", $i );
			$xmlNEW_fotka->setAttribute( "subor", $e );
			//$xmlNEW_fotka->setAttribute( "Vypnut", "FALSE" );
			$xmlNEW_zoznamfotiek->appendChild( $xmlNEW_fotka );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Vypnut", "FALSE" ) );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "MenoSuboru", $e ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "AlternativnyNazov", "Fotka albumu - " . $NazovALBUMU . " - Fotka č." . $i ) );
				$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "TitulokFotky", "" ) );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "LinkFotka", $adresar . '/' . $e ) );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "LinkFotkaThumbs", $adresar . '/thumbs/' . $e ) );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Orientacia", "V" ) );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Vyska", "1000" ) );
				//$xmlNEW_fotka->appendChild( $xmlNEW->createElement( "Sirka", "1500" ) );
		}
	
	//header( "Content-Type: text/plain; charset=utf-8" ); // XML hlavička
	header('Content-type: text/html; charset=utf-8');    // HTML hlavička
	$xmlNEW->save( $suborXML, LIBXML_NOEMPTYTAG);
}
