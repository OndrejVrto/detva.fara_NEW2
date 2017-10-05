<?php

// zobrazí obrázky jedného albumu
	
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
	echo '<div class="text-left">';
	echo "\n\t\t\t\t\t\t\t\t\t";
	echo '<span class="title">'. $_GET['album'] .'</span>';
	echo "\n\t\t\t\t\t\t\t\t\t";
	echo '<a class="text-left float-right" href="'.$_SERVER['HTTP_REFERER'].'">';
	echo "\n\t\t\t\t\t\t\t\t\t\t";
	echo '<button type="button" class="btn btn-primary btn-sm">Všetky albumy</button>';
	echo "\n\t\t\t\t\t\t\t\t\t";
	echo '</a>';
	echo "\n\t\t\t\t\t\t\t\t";
	echo '</div>';
	echo "\n\t\t\t\t\t\t\t\t";
	echo '<div class="float-left">'. count($files).GramatikaObrazky(count($files)) .'</div>';
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
	}
?>
