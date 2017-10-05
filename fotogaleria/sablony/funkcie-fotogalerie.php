<?php
	// kod pre potreby vyvoja
	
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
/*
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
	echo "<br>\n---------------------------------------------------------\n";
*/

// nastavenie gallerií
	$mainFolder    = '/_fotoalbumy/2008';		// folder where your albums are located - relative to root
	
	$albumsPerPage = '12';						// number of albums per page
	$itemsPerPage  = '12';						// number of images per page    
	$thumb_width   = '220';						// width of thumbnails
	$thumb_height  = '220';						// height of thumbnails
	$extensions    = array(".jpg",".png",".gif",".JPG",".PNG",".GIF");		// allowed extensions in photo gallery


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
?>