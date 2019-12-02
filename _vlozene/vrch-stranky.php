
</head>
<body>
<?php
	// vymazať po vyvoji
 	// echo PHP_EOL;
	// include "menu-pracovne.php"; echo "\n" . PHP_EOL;
	// vymazať po vyvoji
	
	$path = $_SERVER['DOCUMENT_ROOT'];	
	echo PHP_EOL;
	include_once $path . "/_vlozene/menu.php"; echo "\n" . PHP_EOL;
	if ($caruselOFF != false) {include_once $path . "/_vlozene/carousel.php"; echo "\n" . PHP_EOL;};
?>
<div class="container">
	<div class="row">

		<!-- Hlavné rozdelenie GRIDu stránky -->
<?php
	if ($PravyPanelZlozenie == false) {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\" >\n";
	} else {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8\" >\n";
	}
	
	// kod pre potreby vyvoja
	
	echo $_SERVER['PHP_SELF'];
	echo "<br>\n";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>\n";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>\n";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>\n";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>\n";
	echo $_SERVER['SCRIPT_FILENAME'];
	echo "<br>\n";
	echo $_SERVER['QUERY_STRING'];
	echo "<br>\n p -> ";
	if (isset($_GET["p"])){
		echo $_GET["p"];
	} else {
		echo 'neexistuje';
	}
?>

			<!-- Nadpis stránky pre tlačiareň -->
			<div class="d-none d-print-block mt-4 text-center" ID="NadpisTlac">
				<h2><?php echo $nadpisStrankyPreTlac; ?></h2>
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
		<div class="container pr-0 pl-0" ID="ExportSearch">

<!-- START MAIN - Hlavný obsah stránky
=============================================================================================================================== -->
