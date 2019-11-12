<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'spolocenstva->faustinum';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
			<div class="alert alert-warning text-center mt-3 mb-5" role="alert">
				<img width="50" title="Včela" src="/_data/spolocne/vcela.svg" alt="Včielka s ceruzkou v ruke."/>
				<h2>Na tejto stránke pracujeme pilne ako včielky.</h2>
			</div>
faustinum		
			<!-- =============================================== -->
			<!-- sem vlož kód samotnej stránky -->
			<!-- odsadenie - 3x tabulátor -->
			<!-- =============================================== -->

<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>