<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'liturgia->svate-prijimanie';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
			<section class="text-left">
				<h2 class="text-left">Sväté prijímanie (Eucharistia)</h2>
				<p class="text-left">Podklady k prednáškam (katechézam) pre rodičov</p>
				<a target="_blank" type="application/msword" href="/data/sviatosti/prve-stretnutie-katecheza.doc">Prvé stretnutie - katechéza</a> 
				<br>
				<a target="_blank" type="application/msword" href="/data/sviatosti/druhe-stretnutie-katecheza.doc">Druhé stretnutie - katechéza</a>
			</section>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>