<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'dekanat';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" >
			<article class="well text-left">
				<h2>Dekanát</h2>
				<ul class="list-group list-group-flush">
<?php	echo vytvorMENU_index ("Dekanát", $menuHlavne); ?>
				</ul>
			</article>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" >
			<article class="well text-left">
				<h2>Príbuzné stránky</h2>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><a href="/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov" >Mapa a zoznam farností</a></li>
				</ul>					
			</article>
		</div>
	</div>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>