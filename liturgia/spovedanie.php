<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'liturgia->spovedanie';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
			<section>
				<h2 class="text-left">Sviatosť zmierenia</h2>
				<p class="text-left">Sviatosť pokánia sa  vysluhuje každý deň pol hodinu pred každou svätou omšou a cez svätú omšu v prípade potreby okrem nedele.</p>
				<p class="text-left">V prvopiatkovom týždni sa sviatosť zmierenia vysluhuje podľa potreby, časy sú vždy rozpísané vo farských oznamoch na príslušný týždeň.</p>
			</section>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>