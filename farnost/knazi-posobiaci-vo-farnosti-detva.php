<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Kňazi pôsobiaci vo farnosti Detva';
	$navsivitPo = '30 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('06', '02', '03', '04', '01', '09', '10');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/farnost", "nazov" => "Farnosť"),
		array("html" => "", "nazov" => "Kňazi pôsobiaci vo farnosti Detva")
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
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot'),
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
	);
	//$PravyPanelZlozenie = false;
	//$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

			<div class="knaziS">
				<div class="row">
					<h2>ThLic. Ľuboš Sabol, dekan</h2>
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						<img class="knazi" height="170" width="125" src="/farnost/data/knazi-posobiaci-vo-farnosti-detva/dekan_Lubos_Sabol.jpg" alt="fotka Ľuboš Sabol" />
					</div>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
					<ul class="list-unstyled">
						<li>nar. 14.2. 1964 v Petrovanoch</li>
						<li>ord. 13.6.1987 v Banskej Bystrici</li>
						<br>
						<li>1987 - kaplán Hriňová, základná vojenská služba</li>
						<li>1988 - kaplán Detva</li>
						<li>1990 - farár Slovenské Pravno</li>
						<li>1990 - farár Nová Baňa</li>
						<li>1992 - farár Veľké Uherce</li>
						<li>1997 - farár Kolačno</li>
						<li>1999 - ThLic. katolícka univerzita v Lubline, Poľsko</li>
						<li>2002 - farár Partizánske - Šípok</li>
						<li>2002 - dekan Detva</li>
					</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<h2>Mgr. Dominik Jáger, kaplán</h2>
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						<img class="knazi" height="170" width="125" src="/farnost/data/knazi-posobiaci-vo-farnosti-detva/kaplan_Dominik_Jager.jpg" alt="fotka Dominik Jáger" />
					</div>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
					<ul class="list-unstyled">
						<li>nar. nar. 24. 11. 1983 vo Zvolene</li>
						<li>ord: 09.06.2012 v Banskej Bystrici</li>
						<br>
						<li>Júl 2012 - Jún 2015 - kaplán Prievidza - Zapotôčky</li>
						<li>Júl 2015 - kaplán Detva</li>
					</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<h2>Mgr. František Veverka, kaplán</h2>
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						<img class="knazi" height="170" width="125" src="/farnost/data/knazi-posobiaci-vo-farnosti-detva/kaplan_Frantisek_Veverka.jpg" alt="fotka František Veverka" />
					</div>
					<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
					<ul class="list-unstyled">
						<li>nar. 1. 10. 1987 v Brezne</li>
						<li>ord. 21. 6. 2014 v Banskej Bystrici</li>
						<br>
						<li>2014 - kaplán Detva</li>
					</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<h2>Zoznam farárov v Detve</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<dl class="dl-horizontal">
							<dt>1647 – 1656</dt><dd>Ján Gersich</dd>
							<dt>1657 – 1684</dt><dd>Juraj Kološi</dd>
							<dt>1684 – 1693</dt><dd>Juraj Kološi ml.</dd>
							<dt>1693 – 1697</dt><dd>Adam Gyóry</dd>
							<dt>1697 – 1698</dt><dd>Štefan Rankay</dd>
							<dt>1698 – 1724</dt><dd>Juraj Majno</dd>
							<dt>1724 – 1748</dt><dd>Jozef Szentkeresti</dd>
							<dt>1748 – 1753</dt><dd>Imrich Husár</dd>
							<dt>1753 – 1759</dt><dd>Martin Jonáš</dd>
							<dt>1759 – 1774</dt><dd>Imrich Medniansky</dd>
							<dt>1774 – 1784</dt><dd>Anton Okoličáni</dd>
							<dt>1784 – 1790</dt><dd>František Xavier Demeter</dd>
							<dt>1790 – 1794</dt><dd>Juraj Špačinský</dd>
							<dt>1794 – 1811</dt><dd>Ján Dluholucký</dd>
							<dt>1811 – 1830</dt><dd>Jozef Mocay</dd>
							<dt>1830 – 1862</dt><dd>Ján Štrba</dd>
							<dt>1862 – 1864</dt><dd>Ján Čapek</dd>
							<dt>1864 – 1888</dt><dd>Jozef Trost</dd>
							<dt>1888 – 1907</dt><dd>Štefan Pitroff</dd>  
							<dt>1907 – 1921</dt><dd>Anton Kúdelka</dd>  
							<dt>1921 – 1953</dt><dd>Ján Štrbáň</dd>  
							<dt>1953 – 1954</dt><dd>Ladislav Hromádka</dd>
							<dt>1954 – 1961</dt><dd>Lasislav Schrott</dd> 
							<dt>1961 – 1980</dt><dd>Martin Láclavík</dd>  
							<dt>1980 – 1993</dt><dd>Jozef Závodský</dd>  
							<dt>1993 – 1995</dt><dd>Pavol Zemko</dd>  
							<dt>1995 – 2002</dt><dd>Roman Furek</dd>  
							<dt>2002 – &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt><dd>Ľuboš Sabol</dd>	
						</dl>
					</div>
				</div>
			</div>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>