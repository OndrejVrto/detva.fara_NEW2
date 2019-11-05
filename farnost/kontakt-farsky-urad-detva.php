<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Kontakt na farský úrad Detva';
	$navsivitPo = '30 days';
	$nastavenieRobots = 'noindex, nofollow';	
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('06', '02', '03', '04', '01', '09', '10');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/farnost", "nazov" => "Farnosť"),
		array("html" => "", "nazov" => "Kontakt na farský úrad Detva")
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

			<div class="well text-center">
				<h1>Kontakt na Farský úrad</h1>
				<div>
					<address>
						<i class="fa fa-map-marker" aria-hidden="true"></i><br>
						<strong>Rímsko-katolícky farský úrad sv. Františka Assiského</strong><br>
						Partizánska ul. 64<br>
						962 12&nbsp;&nbsp;&nbsp;Detva<br>
						<i class="fa fa-phone" aria-hidden="true"></i><br>
						(045) 54 55 243<br>
						<i class="fa fa-envelope" aria-hidden="true"></i><br>
						detva&#64;fara.sk<br>
						rkfudt&#64;stonline.sk<br>
						<i class="fa fa-globe" aria-hidden="true"></i><br>
						<a href="/">detva.fara.sk</a>
					</address>
					<iframe rel="nofollow" class="embed-responsive rounded mapyGoogle mx-auto" 
							  src="http://maps.google.sk/maps?q=48.559215,19.418877&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=48.559215,19.418877&amp;spn=0.002473,0.00456&amp;z=18&amp;output=embed"></iframe>
				</div>
			</div>
			<div class="well text-center">
				<h1>Kontakt do kláštora</h1>
				<div>
					<address>
						<i class="fa fa-map-marker" aria-hidden="true"></i><br>
						<strong>Kláštor Bosých Karmelitánok</strong><br>
						ul. Jána Pavla II č.1<br>
						962 12&nbsp;&nbsp;&nbsp;Detva<br>
						<i class="fa fa-phone" aria-hidden="true"></i><br>
						(045) 29 01 501<br>
						<i class="fa fa-envelope" aria-hidden="true"></i><br>
						karmel.detva&#64;gmail.com<br>
						<i class="fa fa-globe" aria-hidden="true"></i><br>
						<a rel="external" target="_blank" href="http://www.sestrydetva.bosikarmelitani.sk">sestrydetva.bosikarmelitani.sk</a>
					</address>
					<iframe rel="nofollow" class="embed-responsive mapyGoogle" 
							  src="http://maps.google.sk/maps?q=48.547789,19.401817&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=48.547789,19.401817&amp;spn=0.002473,0.00456&amp;z=18&amp;output=embed"></iframe>
				</div>
			</div>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>