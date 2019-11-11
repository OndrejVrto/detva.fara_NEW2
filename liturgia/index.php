<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'liturgia';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
	<article class="well text-left" role="navigation">
		<h1>Liturgia</h1>
			<ul >
				<li><a href="/liturgia/krestanske-sviatosti" >Sviatosť krstu</a></li>
				<li><a href="/cista" >Sväté prijímanie</a></li>
				<li><a href="/cista" >Birmovanie</a></li>
				<li><a href="/cista" >Spovedanie</a></li>
				<li><a href="/cista" >Pomazanie chorých</a></li>
				<li><a href="/cista" >Vysviacka</a></li>
				<li><a href="/cista" >Sobáš</a></li>
				<div class="dropdown-divider" role="separator"></div>
				<li><a href="/cista" >Pohreb</a></li>
				<li><a href="/cista" >Požehnávanie príbytkov</a></li>
				<li><a href="/cista" >Požehnávanie predmetov</a></li>
				<li><a href="/cista" >Pobožnosti a adorácie</a></li>
				<div class="dropdown-divider" role="separator"></div>
				<li><a href="/cista" >Životopisy svätých</a></li>
				<li><a href="/cista" >Zaujímavé kázne a úvahy</a></li>
				<li><a href="/cista" >Odkazy na zaujímavé stránky</a></li>
				<div class="dropdown-divider" role="separator"></div>
				<li><a href="/cista" >Základné vedomosti kresťana</a></li>
				<li><a href="/cista" >Kódex kánonického práva</a></li>
			</ul>
	</article>
	<article class="well text-left">
		<h1>Príbuzné stránky</h1>
		<ul>
			<li><a href="/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov" >Mapa a zoznam farností</a></li>
		</ul>
	</article>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>