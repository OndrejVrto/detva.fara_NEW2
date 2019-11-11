<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'liturgia->sviatost-krstu';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
			<section>
				<h2 class="text-left">Sviatosť krstu</h2>
				<p class="text-left">Sviatosť krstu sa vysluhuje v našej farnosti bez svätej omše každú sobotu po rannej svätej omši o 6:30. Sviatosť krstu so svätou omšou sa vysluhuje v nedeľu po dohode s kňazom.</p>
				<p class="text-left">Príprava na sviatosť krstu sa koná každú stredu o 18:30 v budove farského úradu.</p>
			</section>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>