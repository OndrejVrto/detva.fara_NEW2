
</head>
<body>
<?php
	// vymazať po vyvoji
 	// echo PHP_EOL;
	// include "menu-pracovne.php"; echo "\n" . PHP_EOL;
	// vymazať po vyvoji

	// v prípade ak na stránke existujú podstránky vytvorí premennú pre funkciu "tlacitkaDopreduDozadu"
	// a zároveň slúži ako doplnok pre bublinkovú nápovedu
	if (isset($_GET["p"])) {
		$pod_stranka = $_GET["p"];
	} else {
		$pod_stranka = 1;
	}
	
	$path = $_SERVER['DOCUMENT_ROOT'];	
	echo PHP_EOL;
	include_once $path . "/_vlozene/menu.php"; echo "\n" . PHP_EOL;
	if ($caruselOFF != false) {include_once $path . "/_vlozene/carousel.php"; echo "\n" . PHP_EOL;};
?>
<!-- START - Hlavný .container -->
<div class="container">
	<!-- START - Hlavný .row -->
	<div class="row">

		<!-- Hlavné rozdelenie GRIDu stránky -->
<?php
	if ($PravyPanelZlozenie == false) {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\" >\n";
	} else {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8\" >\n";
	}
?>

			<!-- Nadpis stránky pre tlačiareň -->
			<div class="d-none d-print-block mt-4 text-center" ID="NadpisTlac">
				<h1><?php echo $nadpisStrankyPreTlac; ?></h1>
			</div>
<?php
	if ($bublinkoveMenu !== false) {	
		echo PHP_EOL;
		if (isset($nazovGalerie)){
			include_once $path . "/_vlozene/menu-bublinkove-albumy.php"; echo "\n";	
		} else {
			include_once $path . "/_vlozene/menu-bublinkove.php"; echo "\n";
		}
		echo PHP_EOL;
	}
	if ($vedeliSteZeOFF !== false) {
		echo PHP_EOL;
		include_once $path . "/_vlozene/vedeli-ste-ze.php"; echo "\n";
	}
?>

		<!-- Blok "ExportSearch" obaľuje obsah v ktorom je možné vyhľadávať nástrojom na vyhľadávanie v pravom hornom rohu stránky -->
		<div ID="ExportSearch">

<!-- START MAIN - Hlavný obsah stránky -->
<?php  
	switch ($nazovVolajucejStranky) {
		case "Hlavná Stránka": break;
		case "Fotogaléria": echo "\t\t". '<div class="gallery border rounded m-auto p-3" role="img">  <!-- START - Obsah stránky -->'."\n"; break;
		default: echo "\t\t". '<div class="hlavnyobsah border rounded p-3 d-block">'."\n";
	}
?>
<!-- =============================================================================================================================== -->
