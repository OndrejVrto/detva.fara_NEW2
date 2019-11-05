<?php

	$pracovny = '';
	$adresarVSTUP = $adresarFotogaleria;
	$adresarRELscript = $polohaSkriptu . $adresarVSTUP;
	$adresarABS = folder_exist($adresarRELscript);
	
	$pracovny .= "<ol class=\"mb-0\">";
	foreach(glob($adresarABS . '*', GLOB_ONLYDIR) as $zoznam_adresarov_Galeria) {
		 $zoznam_adresarov_Galeria = str_replace($adresarABS, '', $zoznam_adresarov_Galeria);
		 $pracovny .= "<li>" . $zoznam_adresarov_Galeria. "</li>\n";
	}
	$pracovny .= "</ol>";

$vystupHTML .= $pracovny;