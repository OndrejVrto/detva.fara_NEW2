<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Schematizmus dekanátu Detva';
	$navsivitPo = '30 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('006', '002', '003', '004', '001', '009', '010');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/dekanat/dekanat", "nazov" => "Dekanát"),
		array("html" => "", "nazov" => "Schématizmus dekanátu Detva")
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
	<link rel="stylesheet" type="text/css" href="/_css/folio-gallery.css" />
	<link rel="stylesheet" type="text/css" href="/_css/colorbox/colorbox.css" />
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

			<h1 style="text-align:center;">Dekanát Detva</h1>
			<h2>Schematizmus Banskobystrickej diecézy</h2>
				<p>Banskobystrické biskupstvo vzniklo v r. 1776 odčlenením z Ostrihomskej arcidiecézy. Počas 231 rokov sa postupne menilo a upravovalo vnútorné usporiadanie dekanátov a farností podľa dobových pastoračných potrieb.
				Od 14. februára 2008 sa na základe pápežského schválenia Jeho Svätosťou Benediktom XVI. hranice niektorých diecéz na Slovensku radikálne zmenili. Tento proces určil aj nové hranice Banskobystrickej diecézy.</p>
				<p>Viac o jednotlivých dekanátoch, farnostiach ale aj kňazoch nájdete ne stránke <a href="http://www.novyschema.bbdieceza.sk">Schematizmus Banskobystrickej diecézy.</a></p>
			<hr>
			<h2>O dekanáte Detva</h2>
				<p>Dňa 1. júla 2005 vznikol na základe rozhodnutia banskobystrického diecézneho biskupa Mons. Rudolfa Baláža dekanát Detva so sídlom v Detve. 
				Prvým dekanom sa stal <a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NTc0">ThLic. Roman Furek</a>, ktorý túto funkciu a službu vykonával do 15. októbra 2002.</p>
				<p>Od 18. októbra 2002 je dekanom detvianskeho dekanátu <a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=MTY5">ThLic. Ľuboš Sabol</a>.</p>
			<div class="row gallery">
				<!-- START PHP - Galery -->
<?php include "../fotogaleria/sablony/gallery-dekanat.php"; ?>
				<!-- END PHP - Galery -->
			</div>
			<h2>Zoznam farností v dekanáte Detva</h2>
			<dl class="dl-horizontal dekanat">
				<dt><a href="http://detva.fara.sk">Farnosť Detva</a></dt>
					<dd><strong>Farský kostol sv. Františka Assiského, z roku 1634</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=MTY5">ThLic. Ľuboš Sabol, dekan-farár</a></em><br>
						Kaplán: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NzM0">Mgr. Dominik Jáger</a></em><br>
						Kaplán: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=Nzc3">Mgr. František Veverka</a></em><br>
						Kláštor: <em>Kláštor Božieho milosrdenstva a Kráľovnej Karmelu</em>
					</dd>
				<dt><a href="http://detvianskahuta.fara.sk">Farnosť Detvianska Huta</a></dt>
					<dd><strong>Farský kostol Nanebovzatia Panny Márie, z roku 1843</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=MjY5">Mgr. Peter Repiský, administrátor</a></em><br>
						Filiálka: <em>Látky - Kostol Povýšenia svätého kríža, z roku 1998</em>
					</dd>
				<dt><a href="http://hrinova.fara.sk">Farnosť Hriňová</a></dt>
					<dd><strong>Farský kostol Svätých Petra a Pavla, z roku 1947</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NTgx">Mgr. Štefan Gallik, farár</a></em><br>
						Kaplán: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NzYw">Mgr. Ján Jáger</a></em><br>
						Filiálka: <em>Krivec - Kostol Nanebovzatia Panny Márie z roku 1959</em><br>
						Filiálka: <em>Raticov Vrch - Kostol Panny Márie Fatimskej, z roku 1994</em><br>
						Kláštor: <em><a href="http://www.kapucini.sk/hrinova">Rád Menších bratov kapucínov</a></em><br>
						Rektor: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=Njkx">Mgr. Anton Majerčák, OFM Cap.</a></em><br>
						Diakon: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=Nzk2">Mgr. Tomáš Fusko</a></em><br>
						Výpomocný duchovný: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NDEx">Mgr. Vladimír Polák, OFM Cap.</a></em>
					</dd>
				<dt><a href="http://www.obeckrivan.sk/kontakt.phtml?id3=66005">Farnosť Kriváň</a></dt>
					<dd><strong>Farský kostol svätých Cyrila a Metoda, z roku 1995</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NjM4">Mgr. Ladislav Jurčík, farár</a></em><br>
						Filiálka: <em>Korytárky - Kostol Panny Márie Karmelskej, z roku 1998</em>
					</dd>
				<dt>Farnosť Očová</dt>
					<dd><strong>Farský kostol Všetkých svätých, z roku 1440</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=MTQy">Mgr. Marek Moravčík, farár</a></em><br>
						Filiálka: <em>Dúbravy - Kostol Panny Márie Sedembolestnej, z roku 1833</em>
					</dd>
				<dt><a href="http://stozok.fara.sk">Farnosť Stožok</a></dt>
					<dd><strong>Farský kostol Svätej rodiny, z roku 2002</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NTMw">Mgr. Jozef Figur, farár</a></em>
					</dd>
				<dt>Vígľašská Huta-Kalinka</dt>
					<dd><strong>Farský kostol sv. Martina, z roku 1802</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=NDcx">Mgr. Ján Buzák, farár</a></em><br>
						Filiálka: <em>Klokoč - Kostol Panny Márie, z roku 1998</em>
					</dd>
				<dt><a href="http://faraslatina.sk">Farnosť Zvolenská Slatina</a></dt>
					<dd><strong>Farský kostol Povýšenia sv. Kríža, z roku 1837</strong><br>
						Správca farnosti: <em><a href="http://www.novyschema.bbdieceza.sk/knazi_main.php?knaz=Njc3">Mgr. Pavel Cerovský, administrátor</a></em><br>
						Filiálka: <em>Vígľaš - Kostol Narodenia Panny Márie, z roku 2005</em>
					</dd>
			<dl>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
	<script type="text/javascript" src="/_javascripty/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".albumpix").colorbox({rel:'albumpix', slideshow:true, slideshowSpeed:"4000" , maxWidth:"90%", maxHeight:"90%"});
	});
	</script>
	<script type="text/javascript" src="/_javascripty/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/_javascripty/jquery.colorbox-sk.js"></script>
<!-- END - skripty na konci stranky -->
</body>
</html>