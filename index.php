<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'Hlavná Stránka';

	$path = $_SERVER['DOCUMENT_ROOT'];	
	include_once $path . "/_vlozene/header.php"; echo PHP_EOL;;
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php 
	include_once $path . "/_vlozene/vrch-stranky.php";
	echo PHP_EOL;
	include_once $path . "/spravy-a-aktuality/spravy.php";
	echo PHP_EOL;
	include_once $path . "/_vlozene/spodok-stranky.php"; 
	echo PHP_EOL;
?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>