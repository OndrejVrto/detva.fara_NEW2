<?php

	$path = $_SERVER['DOCUMENT_ROOT'];

	$pracovny = '';
	$adresarVSTUP = $adresarFotogaleria;
	$adresarRELscript = $polohaSkriptu . $adresarVSTUP;
	$adresarABS = folder_exist($adresarRELscript);
	$zoznam_Adresarov = glob($adresarABS . '*', GLOB_ONLYDIR);
	$pocetAdresarov = count($zoznam_Adresarov);
	
	if( $pocetAdresarov == 0 ) {
		$vystupHTML = 'Na stránke v tejto chvíli nieje pridaná žiadna galéria fotiek.';
	} else {
			$zalomenie = "\n\t\t\t\t";
			$vystupHTML .=	$zalomenie . '<div class="card-columns mb-n3">';
		
		foreach($zoznam_Adresarov as $zoznam_Galerii) {
			
			$zoznam_Galerii = str_replace($adresarABS, '', $zoznam_Galerii);

			$vystupHTML .= $zalomenie . "\t" . "<div class=\"card mx-sm-0 border-primary\">";
			
			$ObrazokAlbumu = get_files($path . $adresarFotogaleria . $zoznam_Galerii);
			
			if (!empty($ObrazokAlbumu)){
																	// str_replace -> nahradí medzery v href - V HTML nie sú dovolené
				$vystupHTML .= $zalomenie . "\t\t" . "<a href=\"" . str_replace(" ", '%20', $adresaFotogalerieHTML . $zoznam_Galerii) . "/1/\">";
				$vystupHTML .= $zalomenie . "\t\t\t" . "<img class=\"card-img-top\" src=\"" . str_replace(" ", '%20', $adresarFotogaleria . $zoznam_Galerii);
				$vystupHTML .= "/" . $ObrazokAlbumu[0] . "\" alt=\"Vybraný obrázok z galérie " . $zoznam_Galerii . "\"/>";
				$vystupHTML .= $zalomenie . "\t\t" . "</a>";		
			}

			$adresarRELscript2 = $path . $adresarFotogaleria . $zoznam_Galerii;
			$adresarABS2 = folder_exist($adresarRELscript2);
			$zoznam_Adresarov2 = glob($adresarABS2 . '*', GLOB_ONLYDIR);
			$albumovVgalerii = count($zoznam_Adresarov2);

			$vystupHTML .= $zalomenie . "\t\t" . "<div class=\"card-body\">";
			$vystupHTML .= $zalomenie . "\t\t\t" . "<a href=\"" . str_replace(" ", '%20', $adresaFotogalerieHTML . $zoznam_Galerii) . "/1/\">";
			$vystupHTML .= $zalomenie . "\t\t\t\t" . "<h5 class=\"card-title text-center\">" . $zoznam_Galerii . "</h5>";
			$vystupHTML .= $zalomenie . "\t\t\t\t" . "<h6 class=\"card-subtitle text-center mb-2 text-muted\">" . $albumovVgalerii . GramatikaAlbumy($albumovVgalerii) . "</h6>";
			$vystupHTML .= $zalomenie . "\t\t\t" . "</a>";	

			
			if ($albumovVgalerii!==0){
				$vystupHTML .= $zalomenie ."\t\t\t" . "<ol class=\"card-text pl-4\">";
				foreach($zoznam_Adresarov2 as $zoznam_Albumov_Galerii) {
				
					$XMLfilename = nazov_suboru($zoznam_Albumov_Galerii);

					if (file_exists($XMLfilename)) {
						$xml = new DOMDocument();
						$xml->load( $XMLfilename );
						$titleALBUM = $xml->getElementsByTagName( "NazovAlbumu" )->item(0)->nodeValue;
						
						$vystupHTML .= $zalomenie . "\t\t\t\t" . "<li class=\"vsetkyGalerie\" >" . "<a href=\"" . str_replace(" ", '%20', $xml->getElementsByTagName( "LinkRewrite" )->item(0)->nodeValue) . "/1/\">";
						$vystupHTML .= $titleALBUM . "</a>". "</li>";;
					
					} else {
						$path2 = array_filter(explode('/', $zoznam_Albumov_Galerii));
						$titleALBUM = $path2[end(array_keys($path2))];
						$vystupHTML .= $zalomenie ."\t\t\t" . "<li>" . $titleALBUM . "</li>";
					}
				}
				$vystupHTML .= $zalomenie ."\t\t\t" . "</ol>";
			}
			$vystupHTML .= $zalomenie ."\t\t" . "</div>";
			$vystupHTML .= $zalomenie ."\t" . "</div>";

		}


			$vystupHTML .=	$zalomenie . '</div>' . "\n";
	}





?>