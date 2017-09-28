<?php 
	// error_reporting (E_ALL ^ E_NOTICE);
	// photo gallery settings
$mainFolder    = '../_fotoalbumy/2015';		// folder where your albums are located - relative to root
$albumsPerPage = '5';			// number of albums per page
$itemsPerPage  = '5';			// number of images per page    
$thumb_width   = '135';			// width of thumbnails
$thumb_height  = '135';		// height of thumbnails
$extensions    = array(".jpg",".png",".gif",".JPG",".PNG",".GIF");		// allowed extensions in photo gallery

// create thumbnails from images - vytvorenie zmenšeniny obrázku - funguje aj na serveri
function make_thumb($folder,$src,$dest,$thumb_width) {

	$source_image = imagecreatefromjpeg($folder.'/'.$src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	$thumb_height = floor($height*($thumb_width/$width));
	
	$virtual_image = imagecreatetruecolor($thumb_width,$thumb_height);
	
	imagecopyresampled($virtual_image,$source_image,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
	
	imagejpeg($virtual_image,$dest,100);
	
}

// display pagination - počet stránok
function print_pagination($numPages,$urlVars,$currentPage) {
	echo "\n\n";
	if ($numPages > 1) {
		echo "\t\t\t\t\t\t";
		echo '<div class="clear"></div>';
		echo "\n\t\t\t\t\t\t";
		echo '<div class="row">';
		echo "\n\t\t\t\t\t\t";
		echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">';
		echo "\n\t\t\t\t\t\t";
		echo '<nav>';
		echo "\n\t\t\t\t\t\t\t";
		echo '<ul class="pagination">';
		echo "\n\t\t\t\t\t\t\t\t";

		if ($currentPage > 1) {
			$prevPage = $currentPage - 1;
			echo '<li><a href="?'. replace_whitespace($urlVars) .'p='. $prevPage.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
		} else {
			echo '<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
		}

		for( $e=0; $e < $numPages; $e++ ) {
			$p = $e + 1;
				echo "\n\t\t\t\t\t\t\t\t";
			if ($p == $currentPage) {
				echo '<li class="active"><a href="?'. replace_whitespace($urlVars) .'p='. $p .'">'. $p .'<span class="sr-only">(aktívna)</span></a></li>';
			} else {
				echo '<li><a href="?'. $urlVars .'p='. $p .'">'. $p .'</a></li>';
			} 
		}

		echo "\n\t\t\t\t\t\t\t\t";
		if ($currentPage != $numPages) {
			$nextPage = $currentPage + 1;
			echo '<li><a href="?'. replace_whitespace($urlVars) .'p='. $nextPage.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
		} else {
			echo '<li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
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
function replace_whitespace($data)
{
	$ready_data = str_replace(" ", "%20", $data);
	// $ready_data = str_replace("%", "%25", $ready_data);
	// $ready_data = str_replace("-", "%2D", $ready_data);
	// $ready_data = str_replace(".", "%2E", $ready_data);
	// $ready_data = str_replace("_", "%5F", $ready_data);
	// $ready_data = str_replace("(", "%28", $ready_data);
	// $ready_data = str_replace(")", "%29", $ready_data);
	return $ready_data;
}



if (!isset($_GET["album"])) {

// display list of albums
	$folders = scandir($mainFolder, 0);
	$ignore  = array('.', '..', 'thumbs');

	$albums = array();
	$captions = array();
	$random_pics = array();

	foreach($folders as $album) {

		if(!in_array($album, $ignore)) {

			array_push( $albums, $album );

			$caption = substr($album,0,44);
			array_push( $captions, $caption );

			$rand_dirs = glob($mainFolder.'/'.$album.'/thumbs/*.*', GLOB_NOSORT);
			$rand_pic  = $rand_dirs[array_rand($rand_dirs)];
			array_push( $random_pics, $rand_pic );

		}

	}

	if( count($albums) == 0 ) {
		echo "\t\t\t\t\t\t";
		echo 'Nie je pridaný žiadny album.';     
	} else {
		$numPages = ceil( count($albums) / $albumsPerPage );

		if(isset($_GET['p'])) {
			$currentPage = $_GET['p'];
			if($currentPage > $numPages) {
				$currentPage = $numPages;
			}
		} else {
			$currentPage=1;
		}
 
		echo "\t\t\t\t\t\t";
		echo '<div class="titlebar">';
		echo "\n\t\t\t\t\t\t\t";
		echo '<div class="text-left"><span class="title">Fotogaléria</span></div>';
		echo "\n\t\t\t\t\t\t\t";
		echo '<div class="float-left">'. count($albums) . GramatikaAlbumy(count($albums)) .'</div>';
		echo "\n\t\t\t\t\t\t";
		echo '</div>';
		echo "\n\t\t\t\t\t\t";
		echo '<div class="clear"></div>';
		
		// klasické radenie albumov = od A-Z
		//$start = ( $currentPage * $albumsPerPage ) - $albumsPerPage;
		//for( $i=$start; $i<$start + $albumsPerPage; $i++ ) {

		// radenie albumov odzadu = od Z-A
		$start = (count($albums)+$albumsPerPage-1)-( $currentPage * $albumsPerPage);
		$ende = count($albums)-( $currentPage * $albumsPerPage );
		for( $i=$start; $i>=$ende; $i-- ) {	
		
			if( isset($albums[$i]) ) {
				echo "\n\n\t\t\t\t\t\t";
				echo '<a href="'. replace_whitespace($_SERVER['PHP_SELF']). '?album='. replace_whitespace($albums[$i]) .'">';
				echo "\n\t\t\t\t\t\t\t";
				echo '<div class="thumb-album shadow">';
				echo "\n\t\t\t\t\t\t\t\t";
				echo '<div class="thumb-wrapper">';
				echo "\n\t\t\t\t\t\t\t\t\t";
				echo '<img rel=\'noindex\' src="'. replace_whitespace($random_pics[$i]) .'" width="'.$thumb_width.'" alt="'. $albums[$i] .'-Random"/>';
				echo "\n\t\t\t\t\t\t\t\t";
				echo '</div>';
				echo "\n\t\t\t\t\t\t\t\t";
				echo '<p class="caption">'. $captions[$i] .'</p>';
				echo "\n\t\t\t\t\t\t\t";
				echo '</div>';
				echo "\n\t\t\t\t\t\t";
				echo '</a>';
			}
		}
		$urlVars = "";
		print_pagination($numPages,$urlVars,$currentPage);
	}

} else {

// display photos in album
	$src_folder = $mainFolder.'/'.$_GET['album'];
	$src_files  = scandir($src_folder);

	$files = array();
	foreach($src_files as $file) {

		$ext = strrchr($file, '.');
		if(in_array($ext, $extensions)) {

			array_push( $files, $file );
			if (!is_dir($src_folder.'/thumbs')) {
				mkdir($src_folder.'/thumbs');
				chmod($src_folder.'/thumbs', 0777);
				chown($src_folder.'/thumbs', 'apache');
			}

		   $thumb = $src_folder.'/thumbs/'.$file;
			if (!file_exists($thumb)) {
				make_thumb($src_folder,$file,$thumb,$thumb_width); 
			}

		}
	}
 

	if ( count($files) == 0 ) {
		echo "\t\t\t\t\t\t";
		echo 'V albume nie sú pridané žiadne fotografie!';

	} else {

		$numPages = ceil( count($files) / $itemsPerPage );

		if(isset($_GET['p'])) {

		$currentPage = $_GET['p'];
			if($currentPage > $numPages) {
				$currentPage = $numPages;
			}

		} else {
			$currentPage=1;
		} 

	echo "\t\t\t\t\t\t\t";
	echo '<div class="titlebar">';
	echo "\n\t\t\t\t\t\t\t\t";
	echo '<div class="text-left"><span class="title">'. $_GET['album'] .'</span>';
	echo "\n\t\t\t\t\t\t\t\t\t";
	echo '<a class="text-left float-right" href="'.$_SERVER['PHP_SELF'].'">';
	echo "\n\t\t\t\t\t\t\t\t";
	echo '<button type="button" class="btn btn-primary btn-sm">Všetky albumy</button>';
	echo "\n\t\t\t\t\t\t\t\t";
	echo '</a></div>';
	
	echo '<div class="float-left">'. count($files).GramatikaObrazky(count($files)) .'</div>';
	echo "\n\t\t\t\t\t\t\t\t";
	
	echo "\n\t\t\t\t\t\t\t";
	echo '</div>';
	echo "\n\t\t\t\t\t\t\t";
	echo '<div class="clear"></div>';
	echo "\n";
	
	$start = ( $currentPage * $itemsPerPage ) - $itemsPerPage;
	for( $i=$start; $i<$start + $itemsPerPage; $i++ ) {
		if( isset($files[$i]) && is_file( $src_folder .'/'. $files[$i] ) ) { 
			echo "\n\n\t\t\t\t\t\t\t";
			//  nasledujuca verzia zobrazuje v strede galerie nazov obrazka - treba naprogramovať so súboru
			echo '<a rel=\'index\' class="albumpix" href="'. replace_whitespace($src_folder) .'/'. replace_whitespace($files[$i]) .'" >';
			//echo '<a class="albumpix" href="/galeria/'. replace_whitespace($src_folder) .'/'. replace_whitespace($files[$i]) .'" title="'. $files[$i] .'" >';
			echo "\n\t\t\t\t\t\t\t\t";
			echo '<div class="thumb shadow">';
			echo "\n\t\t\t\t\t\t\t\t\t";
			echo '<div class="thumb-wrapper">';
			echo "\n\t\t\t\t\t\t\t\t\t\t";
			echo '<img rel=\'noindex\' src="'. replace_whitespace($src_folder) .'/thumbs/'. replace_whitespace($files[$i]) .'" width="'.$thumb_width.'" alt="'. $_GET['album'] .'-'. $i .'" />';
			echo "\n\t\t\t\t\t\t\t\t\t";
			echo '</div>';
			echo "\n\t\t\t\t\t\t\t\t";
			echo '</div>';
			echo "\n\t\t\t\t\t\t\t";
			echo '</a>';

		} else {

			if( isset($files[$i]) ) {
				echo $files[$i];
			}
		}
	}
	$urlVars = "album=".replace_whitespace($_GET['album'])."&amp;";
	print_pagination($numPages,$urlVars,$currentPage);
	} // end else

}
?>