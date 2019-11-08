<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'Čistá';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>

			<h1>Na stránke sa pracuje</h1>
			<h3>Prepáčte</h3>
			<br>
			<br>
<?php include $path . "/test/pagination/pagination_in_php_mysql/paginations-vzor-opacne.php"; echo "\n"; ?>
<?php include $path . "/test/pagination/pagination_in_php_mysql/paginations3.php"; echo "\n";?>

<br>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>