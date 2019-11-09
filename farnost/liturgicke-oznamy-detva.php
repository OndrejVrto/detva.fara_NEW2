<?php 
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'farnost->liturgicke-oznamy';

	$path = $_SERVER['DOCUMENT_ROOT'];	
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include_once $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>

		<div class="row text-center">
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-0">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Liturgické oznamy</h3>
					</div>
					<div class="panel-body">
						<!-- START PHP - Linky na súbory -->
<?php
// kod načíta všetky súbory v adresári dáta a vytvorí k nim hypertextové odkazy
// pre vloženie nového oznamu stačí tento vložiť do tohto adresára

if ($handle = opendir($path . '/_data/oznamy/')) {
	$blacklist = array('.', '..', 'lektori', 'oznamy', 'archiv');
	while (false !== ($file = readdir($handle))) {
		if (!in_array($file, $blacklist)) {
			$meno = substr($file, 0, strlen($file)-4); 
			echo "\t\t\t\t\t\t<a rel=\"noindex, nofollow\" target=\"_blank\" href=\"/_data/oznamy/";
			echo $file;
			echo "\">$meno</a><br>\n";
		}
	}
	closedir($handle);
}
?>
						<!-- END PHP - Linky na súbory -->
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-0">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Rozpisy lektorov</h3>
					</div>
					<div class="panel-body">
						<!-- START PHP - Linky na súbory -->
<?php
if ($handle = opendir($path . '/_data/lektori/')) {
	$blacklist = array('.', '..', 'lektori','oznamy', 'archiv');

	while (false !== ($file = readdir($handle))) {
		if (!in_array($file, $blacklist)) {
			$meno = substr($file, 0, strlen($file)-4); 
			echo "\t\t\t\t\t\t<a rel=\"noindex, nofollow\" target=\"_blank\" href=\"/_data/lektori/";
			echo $file;
			echo "\">$meno</a><br>\n";
		}
	}
	closedir($handle);
}
?>
						<!-- END PHP - Linky na súbory -->
					</div>
				</div>
			</div>
		</div>

<?php include_once $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>