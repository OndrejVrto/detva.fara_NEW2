<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Litgurgické oznamy';
	$navsivitPo = '30 days';
	$nastavenieRobots = 'noindex, nofollow';	
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('006', '02', '003', '004', '001', '009', '010');
	//$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/farnost", "nazov" => "Farnosť"),
		array("html" => "", "nazov" => "Litgurgické oznamy")
	);
	//$bublinkoveMenu = false;

	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
	//$vedeliSteZeOFF = true;
	$vedeliSteZeOFF = false;

	// určuje či sa zobrazia "často kladené otázky" - tie sa načítavajú z MySQL
	$otazkyOFF = true;
	//$otazkyTrvale = false;
	$otazkyTrvale = array('01', '02', '03', '04');  // určuje id otázok v tabuľke SQL
	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyRandomOFF = true;  
	$otazkyPočet = 7; // určuje celkový počet otázok na stránke Trvalé+Random

	// určuje skladbu Pravého panelu
	// ak sa nezadá nič alebo sa zadá hodnota 'standard' bude na stránke štandardne zvolený panel nakonfigurovaný v súbore rightPanel-standard.php
	// ak sa zvolí hodnota false panel nebude žiadny a hlavný obsah sa roztiahne na celú šírku stránky
	$PravyPanelZlozenie = array(
		array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot'),
		array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'LinkBreviarBiblia'),
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
	);
	$PravyPanelZlozenie = false;
	//$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

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

if ($handle = opendir('../_data/oznamy/')) {
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
if ($handle = opendir('../_data/lektori/')) {
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

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>