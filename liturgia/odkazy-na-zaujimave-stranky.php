<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'liturgia->odkazy-zaujimave-stranky';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>

odkazy-na-zaujimave-stranky
			<!-- =============================================== -->
			<!-- sem vlož kód samotnej stránky -->
			<!-- odsadenie - 3x tabulátor -->
			<!-- =============================================== -->

<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>