<!-- START Include - Carousel -->
<?php
	
	$cesta = '/_data/carousel/';
	$cestaABS = __DIR__ . "/.." . $cesta;
	
	$NazovSuboru = 'carousel-';
	$digits = 3;  // počet číslic názvu jednotlivých súborov caruselu (napr: pre číslicu 3 -> carousel-021.jpg)
	$pripona = '.jpg';

	
	// funkcia pre zistenie počtu všetkých suborov v adresari so zadanou maskou
	$maska = $cestaABS. '1200x300/' . $NazovSuboru;
	for($i = 1; $i <= $digits; $i++) { $maska .= "[0-9]"; }
	$maska .= ".jpg";
	
	if (glob($maska, GLOB_BRACE) != false) {
		$fileCount = count(glob($maska));
	} else {
		$fileCount = 0;
	}

//echo $fileCount . PHP_EOL;

	if (is_string($caruselOFF)){
		if ($caruselOFF==='JedenNahodnyObrazok'){ $kod = 1; };
		if ($caruselOFF==='standard'){ $kod = 2; };
	}
	if (is_array($caruselOFF)) { $kod = 3; }

	switch ($kod) {
		// 1 = Jeden stabilný obrázok
		case 1:
		$nahodnyObrazok = str_pad(rand(1, $fileCount), $digits, '0', STR_PAD_LEFT);
		echo "<div class=\"carousel slide d-print-none pt-3\" role=\"banner\">\n\t";
		echo "<div class=\"carousel-item active\">\n\t\t";
		echo "<img class=\"d-block rounded w-100\" alt=\"Carousel - Náhodný obrázok\"\n\t\t\t";
			echo "src=\"". $cesta ."1200x300/". $NazovSuboru . $nahodnyObrazok . $pripona ."\"\n\t\t\t";
			echo "srcset=\"". $cesta ."0600x150/". $NazovSuboru . $nahodnyObrazok . $pripona ." 600w,\n\t\t\t\t\t";
			echo $cesta ."1200x300/". $NazovSuboru . $nahodnyObrazok . $pripona ." 1200w,\n\t\t\t\t\t";
			echo $cesta ."1800x450/". $NazovSuboru . $nahodnyObrazok . $pripona ." 1800w,\n\t\t\t\t\t";
			echo $cesta ."2400x600/". $NazovSuboru . $nahodnyObrazok . $pripona ." 2400w\" >\n\t";
		echo "</div>\n";
		echo "</div>\n";
		break;
		
		// 2 = zadefinovaný  Štandard
		case 2:
		CarouselPohyblivy($StandardnyCarousel, $digits, $cesta, $NazovSuboru, $pripona);
		break;
		
		// 3 = Individuálne pole
		case 3:
		CarouselPohyblivy($caruselOFF, $digits, $cesta, $NazovSuboru, $pripona);
	}

function CarouselPohyblivy ($vstupnePoleCarousel, $cisielok, $cesta, $NazovSuboru, $pripona){

//	print_r($vstupnePoleCarousel);
	$pocetObrazkov = count($vstupnePoleCarousel);
	$caruselAktivny = rand(1,$pocetObrazkov);
	
	echo "<div id=\"myCarousel\" class=\"carousel slide d-print-none pt-3\" data-ride=\"carousel\" role=\"banner\">\n\t";
	echo "<!-- Indicators -->\n\t";
	echo "<ol class=\"carousel-indicators\">\n";
	
	$pocitadlo = 0;
	foreach ($vstupnePoleCarousel as $ObrazokCislo) {
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
	foreach ($vstupnePoleCarousel as $ObrazokCislo) {
		$ObrazokCislo2 = str_pad($ObrazokCislo, $cisielok, '0', STR_PAD_LEFT);
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