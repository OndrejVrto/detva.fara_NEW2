<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'Čistá';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
			<div class="alert alert-warning text-center mt-3 mb-5" role="alert">
				<img width="50" title="Včela" src="/_data/spolocne/vcela.svg" alt="Včielka s ceruzkou v ruke."/>
				<h2>Na tejto stránke pracujeme pilne ako včielky.</h2>
			</div>
<?php //include $path . "/test/pagination/pagination_in_php_mysql/paginations-vzor-opacne.php"; echo "\n"; ?>
<?php //include $path . "/test/pagination/pagination_in_php_mysql/paginations3.php"; echo "\n";?>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>