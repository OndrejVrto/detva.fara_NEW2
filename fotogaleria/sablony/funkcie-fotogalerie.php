<?php

// nastavenie gallerií
// Inicializačné konštanty stránky
	//$mainFolder    = '/_fotoalbumy/2008';		// folder where your albums are located - relative to root	
	$polohaSkriptu = "..";  // poloha skriptu voči koreňovému adresáru WWW
	$adresarFotogaleria = "/_fotoalbumy/";
	$albumsPerPage = '12';						// number of albums per page
	$itemsPerPage  = '12';						// number of images per page    
	$thumb_width   = '220';						// width of thumbnails
	$thumb_height  = '220';						// height of thumbnails
	$extensions    = array(".jpg",".png",".gif",".JPG",".PNG",".GIF");		// allowed extensions in photo gallery
	
/*
	// zapnutie vypisovania chýb
	//error_reporting (E_ALL ^ E_NOTICE);

	echo "\n galeria -> ";
	if (isset($_GET["galeria"])){
		echo $_GET["galeria"];
	} else {
		echo 'neexistuje';
	}
	echo "<br>\n album -> ";
	if (isset($_GET["album"])){
		echo $_GET["album"];
	} else {
		echo 'neexistuje';
	}
	echo "<br>\n p -> ";
	if (isset($_GET["p"])){
		echo $_GET["p"];
	} else {
		echo 'neexistuje';
	}
	echo "<br>\n---------------------------------------------------------\n<br>";
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

	// skontroluje či existujú adresáre. Ak nie presmeruje na chybovú stránku
	// zároveň naplní základné premenné
	$nazovGalerie = $_GET["galeria"];
	if ($nazovGalerie=='zoznam-galerii'){
		include "sablony/zoznam-galerii.php";
	} else {
		$adresarVSTUP = $adresarFotogaleria . $nazovGalerie . "/";
		$adresarRELscript = $polohaSkriptu . $adresarVSTUP;
		$adresarABS = folder_exist($adresarRELscript);
		
		if (FALSE == $adresarABS) { redirect("/chyba/"); }

		$cisloListu = $_GET["p"];
		if (isset($_GET["album"])){
			$nazovAlbumu = $_GET["album"];	
			$adresarVSTUPalbum = $adresarFotogaleria . $nazovGalerie . "/" . $nazovAlbumu . "/";
			$adresarRELscriptAlbum = $polohaSkriptu . $adresarVSTUPalbum;
			$adresarABSalbum = folder_exist($adresarRELscriptAlbum);

			if (FALSE == $adresarABSalbum) { redirect("/chyba/"); }

			$XMLsuborRELscript = nazov_suboru($adresarRELscriptAlbum);
			$XMLsuborABS = nazov_suboru($adresarABSalbum);
			$XMLsuborVSTUP = nazov_suboru($adresarVSTUPalbum);
			
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
function make_thumb($folder,$src,$dest,$thumb_width) {

	/* read the source image */
    if ( $ext == 'jpg' || ext == 'jpeg' ) {
        $source_image = imagecreatefromjpeg($folder.'/'.$src);
    }
    if ( $ext == 'png' ) {
        $source_image = imagecreatefrompng($folder.'/'.$src);
    }
	
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	$thumb_height = floor($height*($thumb_width/$width));
	$virtual_image = imagecreatetruecolor($thumb_width,$thumb_height);
	imagecopyresampled($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	//imagecopyresized($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	
	if ( $ext == 'jpg' || ext == 'jpeg' ) {
        imagejpeg($virtual_image,$dest,100);
    }
    if ( $ext == 'png' ) {
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


// display pagination - počet stránok
function print_pagination($numPages,$urlVars,$currentPage) {
	echo "\n\n";
	if ($numPages > 1) {
		echo "\t\t\t\t\t\t";
		echo '<div class="clearfix"></div>';
		echo "\n\t\t\t\t\t\t";
		echo '<div class="row">';
		echo "\n\t\t\t\t\t\t";
		echo '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
		echo "\n\t\t\t\t\t\t";
		echo '<nav class="d-flex justify-content-center" aria-label="Page navigation example">';
		echo "\n\t\t\t\t\t\t\t";
		echo '<ul class="pagination">';
		echo "\n\t\t\t\t\t\t\t\t";

		if ($currentPage > 1) {
			$prevPage = $currentPage - 1;
			echo '<li class="page-item"><a class="page-link" href="?'. replace_whitespace($urlVars) .'p='. $prevPage.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
		} else {
			echo '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
		}

		for( $e=0; $e < $numPages; $e++ ) {
			$p = $e + 1;
				echo "\n\t\t\t\t\t\t\t\t";
			if ($p == $currentPage) {
				echo '<li class="page-item active"><a class="page-link" href="?'. replace_whitespace($urlVars) .'p='. $p .'">'. $p .'<span class="sr-only">(aktívna)</span></a></li>';
			} else {
				echo '<li class="page-item"><a class="page-link" href="?'. $urlVars .'p='. $p .'">'. $p .'</a></li>';
			} 
		}

		echo "\n\t\t\t\t\t\t\t\t";
		if ($currentPage != $numPages) {
			$nextPage = $currentPage + 1;
			echo '<li class="page-item"><a class="page-link" href="?'. replace_whitespace($urlVars) .'p='. $nextPage.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
		} else {
			echo '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
		}

		echo "\n\t\t\t\t\t\t\t";
		echo '</ul>';
		echo "\n\t\t\t\t\t\t";
		echo '</nav>';
		echo "\n\t\t\t\t\t\t";
		echo '</div>';
		echo "\n\t\t\t\t\t\t";
		echo '</div>';
		
		echo "\n\n";
	}
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
	
function VytvorXML($cestaVSTUP){
	
	// tento kod treba dokoncit - zatial sa vyplnaju len preddefinovane konstanty
	
	$xmlNEW = new DOMDocument('1.0', 'UTF-8');
	
	$xmlNEW->xmlStandalone = FALSE;
	$xmlNEW->formatOutput = TRUE;
	$xmlNEW->preserveWhiteSpace = TRUE;

	$xmlNEW->appendChild( $xmlNEW->createComment( "\n Vzorový XML - vytvorený automaticky.\n Orientacia:  V = vertical, H = horizontal \n" ) );
	$xmlNEW_album = $xmlNEW->createElement( "Album" );
	$xmlNEW_album->setAttribute( "vytvorene", date("Y-m-d H:i:s"));
	$xmlNEW->appendChild( $xmlNEW_album );

		// Popis albumu
		$xmlNEW_popisalbumu = $xmlNEW->createElement( "PopisAlbumu" );
		$xmlNEW_popisalbumu->setAttribute( "adresar", "2015-01-13-Omsa-sv-Terezka" );
		$xmlNEW_album->appendChild( $xmlNEW_popisalbumu );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "VypnutAlbum", "FALSE" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "VypnutTitulky", "FALSE" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "DenFotenia", "" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "MesFotenia", "01" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "RokFotenia", "2015" ) );

//z ineho kodu - automaticky vlozeny nazov
//$NazovALBUMU = str_replace(Array('%20', '-'), Array(' ', ' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $nazovADRESARA)));
			
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "NazovAlbumu", "POKUS2  - Omša sv. Terezka" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "TitulokAlbumu", "Aj do Detvy prišla relikvia sv. Terezky. Veriaci si ju uctili pri slávnostnej sv. omši." ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "AutorFotiek", "Zuzana Juhaniaková" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "NacitanePripony", ".jpg, .png, .gif, .JPG, .PNG, .GIF" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "PocetFotiek", "12" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "TitulnaFotka", "3" ) );			
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkRewrite", "/fotogaleria/2015/2015-01-13-Omsa-sv-Terezka/1/" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "LinkFotogaleria", "/_fotoalbumy/2015/2015-01-13-Omsa-sv-Terezka/" ) );
			$xmlNEW_popisalbumu->appendChild( $xmlNEW->createElement( "AlternativnyNazovAlbum", "Album - Omša sv. Terezka - Náhodný obrázok" ) );
		
		//Zaciatok Zoznamu fotiek
		$xmlNEW_album->appendChild( $xmlNEW->createComment( "\n Komentár na začiatku zoznamu fotiek. \n" ) );
		$xmlNEW_zoznamfotiek = $xmlNEW->createElement( "ZoznamFotiek" );
		$xmlNEW_zoznamfotiek->setAttribute( "adresar", "2015-01-13-Omsa-sv-Terezka" );
		$xmlNEW_album->appendChild( $xmlNEW_zoznamfotiek );
		
		for ($i = 1; $i <= 2; $i++) {
			// jednotlive fotky
			$xmlNEW_zoznamfotiek->appendChild( $xmlNEW->createComment( " Fotka č. " . $i . " " ) );
			$xmlNEW_fotka = $xmlNEW->createElement( "Fotka" );
			$xmlNEW_fotka->setAttribute( "poradoveCisloFotky", $i );
			$xmlNEW_fotka->setAttribute( "subor", "omsa-terezka-fotka01.jpg" );
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
	
	//header( "Content-Type: text/plain; charset=utf-8" ); // XML hlavička
	header('Content-type: text/html; charset=utf-8');    // HTML hlavička
	$xmlNEW->save( $cestaVSTUP, LIBXML_NOEMPTYTAG);
	
	//return $xmlNEW;
	
	//echo "\n\n--------------------------------------------------------------------------------------------------------------\n\n";
	//header("Content-Type: text/plain");
	//echo $xmlNEW->saveXML();	
}