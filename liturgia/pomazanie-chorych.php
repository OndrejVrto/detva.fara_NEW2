<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'liturgia->pomazanie-chorych';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
			<section>
				<h2 class="text-left">Sviatosť pomazania chorých</h2>
				<p class="text-left">Vyslúženie tejto sviatosti chorému a umierajúcemu kedykoľvek i uprostred noci, treba zavolať kňazovi, na farský úrad, alebo osobne kontaktovať cez deň na farskom úrade alebo po každej svätej omši.</p>
			</section>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>