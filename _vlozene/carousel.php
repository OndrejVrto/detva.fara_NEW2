<!-- START Include - Carousel -->
<?php
	$cesta = '/_data/carousel/';
	$cestaABS = __DIR__ . "/.." . $cesta;
	$NazovSuboru = 'carousel-';
	$digits = 3;  // počet číslic názvu jednotlivých súborov caruselu (napr: pre číslicu 3 -> carousel-021.jpg)
	$pripona = '.jpg';

	$vseobecnyCarousel = array('057', '056', '054', '051', '042', '048', '035', '036', '038', '040', '055'); 
	if(!isset($caruselStabilny)) {$caruselStabilny=false;}

	
	// funkcia pre zistenie počtu všetkých suborov v adresari so zadanou maskou
	$maska = $cestaABS . $NazovSuboru;
	for($i = 1; $i <= $digits; $i++) { $maska .= "[0-9]"; }
	$maska .= ".jpg";
	
	if (glob($maska, GLOB_BRACE) != false) {
		$fileCount = count(glob($maska));
	} else {
		$fileCount = 0;
	}

	//echo $fileCount . PHP_EOL;

	if($caruselStabilny==true) {
		$nahodnyObrazok = str_pad(rand(1, $fileCount), $digits, '0', STR_PAD_LEFT);
		echo "<div class=\"carousel slide d-print-none pt-3\" role=\"banner\">\n\t";
		echo "<div class=\"carousel-item active\">\n\t\t";
		echo "<img class=\"d-block rounded w-100\" alt=\"Carousel - Náhodný obrázok\"\n\t\t\t";
			echo "src=\"". $cesta ."1200x300/". $NazovSuboru . $nahodnyObrazok . $pripona ."\"\n\t\t\t";
			echo "srcset=\"". $cesta ."0600x150/". $NazovSuboru . $nahodnyObrazok . $pripona ." 600w,\n\t\t\t\t\t";
			echo $cesta ."1200x300/". $NazovSuboru . $nahodnyObrazok . $pripona ." 1200w,\n\t\t\t\t\t";
			echo $cesta ."1800x450/". $NazovSuboru . $nahodnyObrazok . $pripona ." 1800w,\n\t\t\t\t\t";
			echo $cesta ."2400x600/". $NazovSuboru . $nahodnyObrazok . $pripona ." 2400w\">\n\t\t";
		echo "</div>\n";
		echo "</div>\n";
	} else {
		if(!isset($caruselPoradie)) { $caruselPoradie = $vseobecnyCarousel; }
		$pocetObrazkov = count($caruselPoradie);
		if(!isset($caruselAktivny)) { $caruselAktivny = rand(1,$pocetObrazkov); }	
		echo "<div id=\"myCarousel\" class=\"carousel slide d-print-none pt-3\" data-ride=\"carousel\" role=\"banner\">\n\t";
		echo "<!-- Indicators -->\n\t";
		echo "<ol class=\"carousel-indicators\">\n";
		
		$pocitadlo = 0;
		foreach ($caruselPoradie as $ObrazokCislo) {
			echo "\t\t";
			echo "<li data-target=\"#myCarousel\" data-slide-to=\"". $pocitadlo ."\"";
			if ($pocitadlo==$caruselAktivny-1) { echo " class=\"active\""; }
			$pocitadlo++;
			echo "><span class=\"sr-only\">Carousel " . $pocitadlo . "</span></li>\n";
		}
		
		echo "\t</ol>\n";
		echo "\t<!-- Wrapper for slides -->\n";
		echo "\t<div class=\"carousel-inner\" role=\"listbox\">\n";
		
		$pocitadlo = 1;
		foreach ($caruselPoradie as $ObrazokCislo) {
			$ObrazokCislo2 = str_pad($ObrazokCislo, $digits, '0', STR_PAD_LEFT);
			echo "\t\t";
			echo "<div class=\"carousel-item";
			if ($pocitadlo==$caruselAktivny) { echo " active"; }
			echo "\">\n\t\t\t";
			echo "<img class=\"d-block rounded w-100\" alt=\"slide". $pocitadlo ."\"\n\t\t\t\t";
				echo "src=\"". $cesta ."1200x300/". $NazovSuboru . $ObrazokCislo2 . $pripona ."\"\n\t\t\t\t";
				echo "srcset=\"". $cesta ."0600x150/". $NazovSuboru . $ObrazokCislo2 . $pripona ." 600w,\n\t\t\t\t\t\t";
				echo $cesta ."1200x300/". $NazovSuboru . $ObrazokCislo2 . $pripona ." 1200w,\n\t\t\t\t\t\t";
				echo $cesta ."1800x450/". $NazovSuboru . $ObrazokCislo2 . $pripona ." 1800w,\n\t\t\t\t\t\t";
				echo $cesta ."2400x600/". $NazovSuboru . $ObrazokCislo2 . $pripona ." 2400w\">\n\t\t";
			echo "</div>\n";
			$pocitadlo++;
		}

		echo"\t</div>";
		echo"\n\t<!-- Left and right controls -->";
		echo"\n\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">";
		echo"\n\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>";
		echo"\n\t\t<span class=\"sr-only\">Naspäť</span>";
		echo"\n\t</a>";
		echo"\n\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">";
		echo"\n\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>";
		echo"\n\t\t<span class=\"sr-only\">Ďalej</span>";
		echo"\n\t</a>";
		echo "\n</div>\n";
	}
?>
<!-- END Include - Carousel -->