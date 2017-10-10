<?php
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Hlavná stránka';
	$navsivitPo = '7 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	//$caruselPoradie = array('16', '11', '12', '13', '14', '15', '10', '17', '18', '19', '20');
	//$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = false;

	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
	$vedeliSteZeOFF = true;

	// určuje či sa zobrazia "často kladené otázky" - tie sa načítavajú z MySQL
	$otazkyOFF = true;
	$otazkyTrvale = true;
	$otazkyTrvaleZoznam = array();  // určuje poradie trvalych otázok
	$otazkyRandom = true;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 2; 		// určuje celkový počet otázok na stránke Trvalé+Random

	// určuje skladbu Pravého panelu
	// ak sa nezadá nič alebo sa zadá hodnota 'standard' bude na stránke štandardne zvolený panel nakonfigurovaný v súbore rightPanel-standard.php
	// ak sa zvolí hodnota false panel nebude žiadny a hlavný obsah sa roztiahne na celú šírku stránky
	//$PravyPanelZlozenie = false;
	$PravyPanelZlozenie = 'standard';
?>
<?php include "_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "_vlozene/vrch-stranky.php"; echo "\n"; ?>

<?php
	// nastavenie vlastností pre "rýchlo" pridané správy načítavané zo súboru
	// Dohodnúť to s dekanom a dopracovať kód načítavania textu z klasického txt súboru
	// Išlo by o vybrané farské oznamy
	//include("_vlozene/spravy-rychle.php");
	
	// nastavenie vlastností pre archivované správy
	$pocetSprav = 4;  		// počet automaticky vložených správ na jednej stránke
	$predTerminon = True;	// zobrazuje aj správy s termínom ktorý ešte nenastal
	$vyprsanyTermin = True;	// zobrazuje aj správy s vypršanou platnosťou
	$viacStranok = True;		// zobrazí pagination na spodku stránky a načítava staršie správy
	
	include("_vlozene/spravy.php");
?>

<?php include "_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>