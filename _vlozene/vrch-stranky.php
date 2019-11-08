
</head>
<body>
<?php
	if (!isset($nadpisStrankyPreTlac)) { 
		$nadpisStrankyPreTlac = 'Podstránka farnosti Detva';
	}
	// vymazať po vyvoji
	echo PHP_EOL;
	include "menu-pracovne.php"; echo "\n" . PHP_EOL;
	// vymazať po vyvoji
	echo PHP_EOL;
	include "menu.php"; echo "\n" . PHP_EOL;
	if (!isset($caruselOFF) or $caruselOFF != false) {include "carousel.php"; echo "\n" . PHP_EOL;};
?>
<div class="container">
	<div class="row">
<?php
	if ($PravyPanelZlozenie == false) {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\" role=\"main\">\n";
	} else {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8\" role=\"main\">\n";
	}
?>
			<div class="d-print-block mt-4 text-center" ID="NadpisTlac">  <!-- Nadpis stránky pre tlačiareň -->
				<h2><?php echo $nadpisStrankyPreTlac; ?></h2>
			</div>
<?php
	if (isset($bublinkoveMenu) and $bublinkoveMenu !== false) {	
		echo PHP_EOL;
		if (isset($nazovGalerie)){
			include "menu-bublinkove-albumy.php"; echo "\n";	
		} else {
			include "menu-bublinkove.php"; echo "\n";
		}
		echo PHP_EOL;
	}
	if (isset($vedeliSteZeOFF) and $vedeliSteZeOFF == true) {
		echo PHP_EOL;
		include "vedeli-ste-ze.php"; echo "\n";
	}
?>

		<div class="container pr-0 pl-0" ID="ExportSearch">
<!-- START MAIN - Hlavný obsah stránky
=============================================================================================================================== -->