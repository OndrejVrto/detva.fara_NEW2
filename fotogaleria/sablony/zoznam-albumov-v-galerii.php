<?php




/*
// Zobrazí zoznam albumov

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
			$rand_pic  = substr($rand_pic,2,500); // prerobiť tento riedok tak aby cesta k fotkám bola vždy relatívna k hlavnemu adresáru napr: /_fotoalbumy/xxx/ddss.jpg
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
		echo '<div class="text-left"> <span class="title">Fotogaléria</span> </div>';
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
	}*/
?>
