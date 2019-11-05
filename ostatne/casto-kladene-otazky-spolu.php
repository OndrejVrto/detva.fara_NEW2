<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Sviatosti';
	$navsivitPo = '30 days';
	$nastavenieRobots = 'noindex, nofollow';	
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('038', '040', '030', '045', '018', '019', '020');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/liturgia", "nazov" => "Liturgia"),
		array("html" => "", "nazov" => "Sviatosti")
	);
	//$bublinkoveMenu = false;

	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
	$vedeliSteZeOFF = false;

	// určuje či sa zobrazia "často kladené otázky" - tie sa načítavajú z MySQL
	$otazkyOFF = false;
	$otazkyTrvale = false;
	$otazkyTrvaleZoznam = array(2, 3);  // určuje poradie trvalych otázok
	$otazkyRandom = false;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 6; 		// určuje celkový počet otázok na stránke Trvalé+Random

	// určuje skladbu Pravého panelu
	// ak sa nezadá nič alebo sa zadá hodnota 'standard' bude na stránke štandardne zvolený panel nakonfigurovaný v súbore rightPanel-standard.php
	// ak sa zvolí hodnota false panel nebude žiadny a hlavný obsah sa roztiahne na celú šírku stránky
	$PravyPanelZlozenie = array(
		array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot'),
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
	);
	//$PravyPanelZlozenie = false;
	$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

			<h1 class="text-center">Často kladené otázky (FAQ)</h1>


<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>