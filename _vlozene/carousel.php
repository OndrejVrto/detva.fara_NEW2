<!-- START Include - Carousel -->
<?php
	$cesta = '/_data/carousel/';
	$NazovSuboru = 'carousel-';
	$pripona = '.jpg';
	//$vseobecnyCarousel = array('016', '011', '012', '013', '014', '015', '010', '017', '018', '019', '020');
	$vseobecnyCarousel = array('057', '056', '054', '051', '042', '048', '035', '036', '038', '040', '055');
	//$vseobecnyCarousel = array('057', '056');
	
	if(!isset($caruselPoradie)) { $caruselPoradie = $vseobecnyCarousel; }
	$pocetObrazkov = count($caruselPoradie);
	if(!isset($aktivny)) { $aktivny = rand(1,$pocetObrazkov); }
?>
<div id="myCarousel" class="carousel slide d-print-none" data-ride="carousel" role="banner">
	<!-- Indicators -->
	<ol class="carousel-indicators">
<?php
	$pocitadlo = 0;
	foreach ($caruselPoradie as $ObrazokCislo) {
		echo "\t\t";
		echo "<li data-target=\"#myCarousel\" data-slide-to=\"". $pocitadlo ."\"";
		if ($pocitadlo==$aktivny-1) { echo " class=\"active\""; }
		echo "></li>\n";
		$pocitadlo++;
	}
?>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
<?php
	$pocitadlo = 1;
	foreach ($caruselPoradie as $ObrazokCislo) {
		echo "\t\t";
		echo "<div class=\"carousel-item";
		if ($pocitadlo==$aktivny) { echo " active"; }
		echo "\">\n\t\t\t";
		echo "<img class=\"d-block w-100\" src=\"". $cesta . $NazovSuboru . $ObrazokCislo . $pripona ."\" alt=\"slide". $pocitadlo ."\">\n\t\t";
		echo "</div>\n";
		$pocitadlo++;
	}
?>
	</div>
<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Naspäť</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Ďalej</span>
	</a>
</div>
<!-- END Include - Carousel -->