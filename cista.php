<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'Čistá';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>

			<h2>Na stránke sa pracuje</h2>
			<h1>Prepáčte</h1>
			<br>
			<br>
<?php //include $path . "/test/pagination/pagination_in_php_mysql/paginations-vzor-opacne.php"; echo "\n"; ?>
<?php //include $path . "/test/pagination/pagination_in_php_mysql/paginations3.php"; echo "\n";?>

Everything outside the main div tag vanishes in Reader View<br>
<img class="no-print" src="http://dummyimage.com/1024x100/000/ffffff&text=This+banner+should+vanish+in+print+view">
<div>
	<h1>H1 tags outside ot a p tag are hidden in reader view</h1>
	<img class="no-print" src="http://dummyimage.com/1024x100/000/ffffff&text=This+banner+is resized+in+print+view">
	<p>
	 123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789
	 123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789
	 123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789
	 123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789
	 123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789
	 123456789 123456
	</p>
</div>

<br>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>