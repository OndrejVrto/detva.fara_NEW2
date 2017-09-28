<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Mapa stránky dekanát';
	$navsivitPo = '14 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('015', '010', '019');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/dekanat/dekanat", "nazov" => "Dekanát")
	);
	//$bublinkoveMenu = false;

	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
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
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
	);
	//$PravyPanelZlozenie = false;
	$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

	<article class="well text-left" role="navigation">
		<h1>Dekanát</h1>
		<ul>
			<li><a href="/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov" >Mapa a zoznam farností</a></li>
			<li><a href="/dekanat/klastor-kralovnej-karmelu-v-detve" >Kláštor Kráľovnej Karmelu</a></li>
			<li><a href="/dekanat/cista" >Rád Menších bratov kapucínov</a></li>
			<li><a href="/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov" >Fotogaléria kostolov a kaplniek</a></li>
			<li><a href="/dekanat/cista" >Detvianske vyrezávané kríže</a></li>
			<li><a href="/dekanat/cista" >Sväté omše v okolí</a></li>
			<li><a href="/dekanat/cista" >Kam vo farnosti ?</a></li>
			<li><a href="/dekanat/cista" >Kontakt dekanského úradu</a></li>
		</ul>
	</article>
	<article class="well text-left">
		<h1>Príbuzné stránky</h1>
		<ul>
			<li><a href="/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov" >Mapa a zoznam farností</a></li>
			<li><a href="/dekanat/klastor-kralovnej-karmelu-v-detve" >Kláštor Kráľovnej Karmelu</a></li>
			<li><a href="/dekanat/cista" >Rád Menších bratov kapucínov</a></li>
			<li><a href="/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov" >Fotogaléria kostolov a kaplniek</a></li>
			<li><a href="/dekanat/cista" >Detvianske vyrezávané kríže</a></li>
			<li><a href="/dekanat/cista" >Sväté omše v okolí</a></li>
			<li><a href="/dekanat/cista" >Kam vo farnosti ?</a></li>
			<li><a href="/dekanat/cista" >Kontakt dekanského úradu</a></li>
		</ul>
	</article>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>