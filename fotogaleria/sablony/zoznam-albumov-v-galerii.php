<?php

$vystupHTML .= "Zoznam albumov - vystup kodu HTML \n<br><br>";

	//vlastný program

	$vystupHTML .=  "Cesta ku skriptu Absolútne:                         " . __DIR__;
	$vystupHTML .=  "\n\n\n<br><br>";
	$vystupHTML .=  "Galéria: <- Relativne ku skriptu -> " . $adresarRELscript;
	$vystupHTML .=  "\n<br>";
	$vystupHTML .=  "Galéria: <- Absolutne na disku -> " . $adresarABS;
	$vystupHTML .=  "\n<br>";
	$vystupHTML .=  "Galéria: <- Absolutne k WWW -> " . $adresarVSTUP;
	$vystupHTML .=  "\n\n\n<br><br>";
	$vystupHTML .=  "Číslo Listu: " . $cisloListu;
	$vystupHTML .=  "\n\n\n<br><br>";

	$vystupHTML .=  "Zoznam adresárov:\n<br>";
	$vystupHTML .=  "------------------";
	$vystupHTML .=  "\n\n\n<br>";



// nasledujúci kód prejde všetky albumy v galérii a vytvorí im XML súbory aj zmenšeniny obrázkov
	$zoznam_Adresarov = glob($adresarABS . '*', GLOB_ONLYDIR);
	
	$pocetAdresarov = count($zoznam_Adresarov);
	$pocetStranok = ceil( $pocetAdresarov / $albumov_na_stranke );
	// vrchný pagination
	$vystupHTML .=  print_pagination2('prve', $pocetStranok, $adresarVSTUP_html, $cisloListu);

	foreach($zoznam_Adresarov as $zoznam_adresarov_Galeria) {
		$zoznam_adresarov_Galeria = str_replace($adresarABS, '', $zoznam_adresarov_Galeria);
		//$vystupHTML .= $zoznam_adresarov_Galeria. "\n<br>";
		
		$adresarVSTUPalbum = $adresarFotogaleria . $nazovGalerie . "/" . $zoznam_adresarov_Galeria;
		$adresarRELscriptAlbum = $polohaSkriptu . $adresarVSTUPalbum;
		$adresarABSalbum = folder_exist($adresarRELscriptAlbum);
		
		$XMLsuborRELscript = nazov_suboru($adresarRELscriptAlbum);
		$XMLsuborABS = nazov_suboru($adresarABSalbum);
		$XMLsuborVSTUP = nazov_suboru($adresarVSTUPalbum);	
		
		if (!file_exists($XMLsuborABS)) {
			VytvorXML($XMLsuborABS);
			//VytvorXML($XMLsuborRELscript);			
		} else {
			//OpravXML($XMLsuborRELscript);
		}
		
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
	}
		
	$vystupHTML .=	"\n\t\t\t\t" . '<div class="card-columns">';
	foreach($zoznam_Adresarov as $zoznam_adresarov_Galeria) {
		$vystupHTML .=  print_album_card("a", "b");
	}
	$vystupHTML .=	"\n\t\t\t\t" . '</div>' . "\n";
	
	// spodný pagination
	$vystupHTML .=  print_pagination2('druhe', $pocetStranok, $adresarVSTUP_html, $cisloListu);
	
	
	
function print_album_card($urlHTML, $urlREAL){

	$pracovny = '';
	$zalomenie = "\n\t\t\t\t\t";
	$pracovny .= $zalomenie . '
					<a href="/fotogaleria/2015/2015-12-xx_Zdobenie_stromceka/1/">
						<div class="card mx-3 mx-sm-0 border-primary">
							<img class="card-img-top" src="/_fotoalbumy/2015/2015-12-26_Dychovka_na_Stefana/thumbs/Dychovka2015_010.jpg" alt="2015-12-xx_Zdobenie_stromceka-Random"/>
							<div class="card-body">
								<h5 class="card-title">1 Na sv. Štefanna pred farským kostolom</h5>
								<h6 class="card-subtitle mb-2 text-muted">26.12.2015</h6>
								<p class="card-text">Na sv. Štefanna zahrala dychovka všetkým farnikom. Spev, slovo veselé bolo cítiť na každom kroku.</p>
								<p class="card-text"><small class="text-muted">Fotila: Marka Ostrihoňová</small></p>
							</div>
						</div>
					</a>';
	$pracovny .= "\n";
	
	return $pracovny;
	/*		<div class="card-columns">
				<a href="/fotogaleria/2015/2015-12-xx_Zdobenie_stromceka/1/">
					<div class="card mx-3 mx-sm-0 border-primary">
						<img class="card-img-top" src="/_fotoalbumy/2015/2015-12-26_Dychovka_na_Stefana/thumbs/Dychovka2015_010.jpg" alt="2015-12-xx_Zdobenie_stromceka-Random"/>
						<div class="card-body">
							<h5 class="card-title">1 Na sv. Štefanna pred farským kostolom</h5>
							<h6 class="card-subtitle mb-2 text-muted">26.12.2015</h6>
							<p class="card-text">Na sv. Štefanna zahrala dychovka všetkým farnikom. Spev, slovo veselé bolo cítiť na každom kroku.</p>
							<p class="card-text"><small class="text-muted">Fotila: Marka Ostrihoňová</small></p>
						</div>
					</div>
				</a>
			</div>
	*/
}
	
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