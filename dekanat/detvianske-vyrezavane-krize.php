<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Litgurgické oznamy';
	
	$navsivitPo = '7 days';
	$nastavenieRobots = 'noindex, nofollow';
	
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('006', '002', '003', '004', '001', '009', '010');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/dekanat/", "nazov" => "Dekanát"),
		array("html" => "", "nazov" => "Detvianske vyrezávané kríže")
	);
	//$bublinkoveMenu = false;
	
	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
	$vedeliSteZeOFF = false;

	// určuje či sa zobrazia "často kladené otázky" - tie sa načítavajú z MySQL
	$otazkyOFF = true;
	//$otazkyTrvale = false;
	$otazkyTrvale = array('1', '2', '3', '4');  // určuje id otázok v tabuľke SQL
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
	//$PravyPanelZlozenie = false;
	$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

<h1>Detvianske kríže</h1>
<p>Umelecké cítenie detvianskych ľudí sa dostalo do sveta najmä prostredníctvom pestrých výšiviek a vyrezávaných krížov. Ďaleká minulosť Podpoľancov bola vždy spojená s tvrdou prácou s drevom, nakoľko sa ich predkovia usádzali v horách. Drevo ich sprevádzalo od kolísky až po hrob. Svojim zosnulým robili pomníky z dreva vo forme jednoduchých, ručne vyrezávaných, neskôr i polychrómovaných krížov.</p>
<p>V stredoveku sa kríž začal používať na označenie hrobu a stal sa symbolom viery, pomocou ktorej človek ľahšie prekonával tajomstvo smrti. V 18. storočí sa baroková kultúra v Detve a okolí odrazila vytvorením zľudovelého baroka na drevených krížoch. Kríž si u zručných majstrov objednávali príbuzní zosnulého, pri pohrebe sa  s úctou niesol pred rakvou a hneď sa osadil na hrob pri hlave zosnulého.</p>
<p>Povrch oboch ramien kríža bol dekorovaný jednoduchou rezbárskou výzdobou pásových, cikcakovitých, zubovitých, archaických kruhových, hviezdicovitých a rozetových prvkov. Dekoratívny efekt umocňovala a do ľudovej polohy ho posúvala polychrómia. Do krížov ľudoví umelci vyrývali ľudu vzácne sakrálne symboly, ktorými vyjadrovali jeho hlboké náboženské cítenie. Boli to: kalich s hostiou, monštrancia, horiaca svieca, Božské srdce a Kristove iniciálky. Vyskytli sa i kríže vytvorené na spôsob oltárika, resp. kaplnky s tŕňovou korunou a klincami vsadenou do kríža alebo Pannou Máriou zasklenou vo vnútri kríža. Okrem náboženských symbolov sa na krížoch vyskytovali inšpirácie z prírody ako vtáčiky, najrozmanitejšie kvety, vínna réva s krásne tvarovanými listami a strapcami hrozna. Boli tu i nespočetné varianty geometrických ornamentov v tvare kruhu, elipsy, oblúka a špirály. Vyskytujú sa i prvky antickej architektúry, napr. iónske volúty. Niektoré ornamenty sú totožné na výšivkách i krížoch a zdá sa, že muži vyrezávali to, čo ženy vyšívali alebo naopak.</p>
<p>Náhrobné kríže obsahovali originálne, niekedy ťažko rozlúštiteľné nápisy, napríklad:

<ul class="list-unstyled">
	<li>TU LE</li>
	<li>ZI KAT</li>
	<li>A MAT</li>
	<li>EJ R</li>
	<li>MURI</li>
	<li>N T R</li>
	<li>1.929.</li>
	<li>8 F.</li>
</ul>
To znamená: „Tu leží Kata Matej, rod. Murín, zomrela r. 1929 8. februára.“<sup id="cite_ref-TechCrunch_1-0" class="reference"><a href="#cite_note-TechCrunch-1">[1]</a></sup>  </p> 
<p>Kríže rezbári vyrábali z najtrvácnejšieho materiálu, t.j. z duba. Boli zastrešené ručne vyrobeným oblúkom z pozinkovaného plechu, ktorý bol pozahýnaný a vykrojený do ozdobných trojuholníkových, eliptických alebo kruhových tvarov. Ich tvorcovia sú zväčša neznámi. Mnohé kríže však vyšli spod rúk chýrnych rezbárskych majstrov: Jozefa Fekiača – Šumného, Jána Fekiača, Štefana Melicha a ďalších. Dnes na tradície ich tvorby nadväzuje ďalšia generácia.</p>
<p>Miestny cintorín, na ktorom sa nachádzajú staršie i novšie kríže, v 20. storočí podstatne zmenil svoju tvár a kedysi obdivovaný les krížov nahradili nové moderné náhrobníky. Mesto Detva v spolupráci s Pamiatkovým ústavom v Banskej Bystrici, Podpolianskym múzeom, Miestnym odborom Matice slovenskej a s pomocou miestnych rezbárov preto podnikli kroky na záchranu časti nevyužívaných krížov z 1. polovice 20. storočia. Kríže boli po obnove vystavené v stálej expozícii pod Kalváriou tak, aby sa sprístupnili návštevníkom cintorína. Dňa 24. októbra ich požehnal dekan R. Furek. Niektoré sú jednoduché, nezdobené, iné sú pestrofarebné. K historicky najhodnotnejším na tomto symbolickom cintoríne patria kríže bez polychrómie alebo s minimálnou farebnosťou.</p>
<p>V 20. rokoch 20. storočia vynikol výrobou pestro polychrómovaných krížov na objednávku Jozef Fekiač.  Tvoril aj pre okolité obce, pre Slovenské národné múzeum v Martine a šesťdesiat krížov je na symbolickom cintoríne vo Vysokých Tatrách.</p>
<p>Kríže boli známe najprv ako náhrobné, neskôr sa podľa nich začali vyrábať i omnoho vyššie prícestné kríže. Stavali sa popri cestách, pri školách, na súkromných pozemkoch a pod. Náklady na ich zhotovenie znášala skupina osôb, ktorá mala záujem na tom, aby v ich oblasti kríž stál, alebo ich sponzoroval nejaký súkromný dobrodinec. Pri posviacke kríža bývala pekná slávnosť za početnej účasti veriaceho ľudu.</p>

Z mnohých uvedieme aspoň niektoré:
<ul>
	<li>na Kostolnej dal nový drevený kríž zhotoviť Štefan Gonda – Spižiak. Bol posvätený 25.5.1910 v prítomnosti procesie, ktorá išla z kostola až na Kostolnú.</li>
	<li>pod tureckým vŕškom v Piešti bol postavený nový drevený kríž a 27.7.1913 s procesiou posvätený,</li>
	<li>farár r. 1934 požehnal tri kríže.  Jeden 15.8.1934 pri chotári Podkriváň u Dančov, dva 16.9. pri detvianskom kostole, z ktorých niže kostola darovala pani Antónia Vagačová a vyše kostola postavený kríž bol zadovážený z milodarov.</li>
	<li>Dňa 15.8. 1938 bol požehnaný nový kríž na Kaľamárke, </li>
	<li>15.6. 1941 pred školou na Stavanisku,</li>
	<li>27.6.1943 pred novou školou Detva laz Skliarovo a v Krivci pri škole.</li>
</ul>
Z novšieho obdobia to boli napríklad tieto udalosti:
<ul>
	<li>dňa 2.11.1993 farár posvätil kríž pred farou, ktorý na želanie poslednej vôle zosnulého dekana J. Závodského zhotovil Mikuláš Sekereš zo sídliska vo svojej dielni u svokrovcov v starej Detve,</li>
	<li>24. októbra 1999 kňaz požehnal novopostavený kríž na Skliarove – Spúšťanke,</li>
	<li>na slávnosť sv. Cyrila a Metoda v r. 2002 bola svätá omša  pred Mestským úradom na sídlisku, počas ktorej dekan R. Furek požehnal novopostavený kríž.</li>
</ul>
<p>Detvianske náhrobné i prícestné kríže sú chránenou kultúrnou pamiatkou. Roztrúsené po Slovensku zviditeľňujú Detvu a tie, ktoré sú ojedinele roztrúsené po Európe (napr. pred Slovenským ústavom sv. Cyrila a Metoda v Ríme) zviditeľňujú Slovensko.</p>

<br>
<ol class="references">
	<li id="cite_note-TechCrunch-1">
		<span class="mw-cite-backlink">
			↑
			<a href="#cite_ref-TechCrunch_1-0">
				<sup style="font-style: italic; font-weight: bold; vertical-align: top">
					a
				</sup>
			</a> 
		</span>
		<span class="reference-text">
			<cite style="font-style:normal">
				LUNDEN, Ingrid. <i>Elon Musk’s SpaceX Is Raising Money At A Valuation Approaching $10B</i> [online]. TechCrunch, [cit. 2014-08-20].
				<a rel="nofollow" class="external text" href="http://techcrunch.com/2014/08/19/spacex/?ncid=fb&amp;utm_source=feedburner&amp;utm_medium=feed&amp;utm_campaign=fb&amp;utm_content=FaceBook">
					Dostupné online
				</a>.
				(anglicky)
			</cite>
		</span>
	</li>
	<li id="cite_note-8">
		<span class="mw-cite-backlink">
			<a href="#cite_ref-8">
				<span class="cite-accessibility-label">
					Skočit nahoru 
				</span>
				↑
			</a>
		</span>
		<span class="reference-text">
			<a rel="nofollow" class="external text" href="http://www.novinky.cz/zahranicni/amerika/268237-zacala-nova-era-dobyvani-vesmiru-k-iss-vzletla-soukroma-lod.html">
				Začala nová éra dobývání vesmíru, k ISS vzlétla soukromá loď
			</a>
		</span>
	</li>
</ol>

<small>

(zdroj: Diplomová práca - Anna Bartková: Dejiny farnosti Detva – obhájená na UMB v Banskej Bystrici, Fakulta humanitných vied, Katedra Histórie v r. 2008)

  BEDNÁRIK, Rudolf: Prejavy ľudového umenia na cintorínoch v okolí Zvolena. In: Výtvarníctvo, 
      fotografia, film, č. 7, 1969, s. 245.
  VYDRA, J.: Na detvianskom cintoríne. In: Slovenskou otčinou, č. 1, 1925, s. 34.
  DANGLOVÁ, Oľga: Dekor a symbol.1. vyd.  Bratislava : Veda vydavateľstvo SAV, 2001, s. 20-21.
  BAŘINA, F.: Detvianska ľudová drevorezba. In: Nový svet  13, č. 29, 1938, s. 14.
  Slovenský ľud, č. 18, 1938, s. 280-281.
BAŘINA, F.: Detvianska ľudová drevorezba. In: Nový svet  13, č. 29, 1938, s. 14.
  Informačná tabuľa pri expozícii: Kultúrna pamiatka Detvianske drevené náhrobné kríže.
  SKELTON, Anna: Premeny ľudovej architektúry a výtvarného ľudového prejavu v regióne Detvy z pohľadu ochrany kultúrneho dedičstva. Banská Bystrica: KPU, Rkp z vedeckej konferencie, 4.–   5.10.2005 v  DK Detve.
  BEŇUŠKOVÁ, Z. a kol.: Tradičná kultúra regiónov Slovenska. 2. vyd. Bratislava : Veda 
      vydavateľstvo SAV, 2005, s. 139.
  A RKFÚ Detva. Historia domus. 1909. s.3, 7, 24 – 28, 116, 98, 115, 121 .
</small>
  
<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>