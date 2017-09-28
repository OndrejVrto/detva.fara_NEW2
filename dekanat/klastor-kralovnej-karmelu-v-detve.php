<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Stránka o Kláštore';
	$navsivitPo = '14 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('008', '002', '003', '004', '001', '009', '010');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/dekanat/dekanat", "nazov" => "Dekanát"),
		array("html" => "", "nazov" => "Kláštor Kráľovnej Karmelu")
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

			<div class="frantisekPage">
				<h1>Kláštor Božieho milosrdenstva a Kráľovnej Karmelu v Detve</h1>
				<div class="textfrantisek">Začiatky karmelitánskeho rádu siahajú
					do Svätej zeme, až k prorokovi Eliášovi, ktorý v samote hory Karmel
					hľadal Boha. Stal sa tak vzorom pustovníckeho života. Jeho slová :
					„Žije Pán, v ktorého službe stojím" (l Kŕ 17, l ) sú vzorom života v
					Božej prítomnosti, ktorý sa stal základným prvkom karmelitánskej
					špirituality.
				</div>
				<div class="textfrantisek">V 11. - 12. storočí sa usídlili na
					hore Karmel pustovníci, ktorí si zvolili za Matku a patrónku Pannu
					Máriu. Tajomstvo jej života a spojenia s Kristom rád prijal za svoj
					ideál.
				</div>
				<div class="textfrantisek">Svätá Terézia zvolila pre sestry čisto
					kontemplatívnu formu života, ktorej srdcom je dôverné priateľstvo s
					Kristom, osobný vzťah s Bohom.
				</div>
				<div class="textfrantisek">Skrytým životom modlitby majú sestry
					slúžiť rozvoju Božieho kráľovstva :
				</div>
				<ul class="zarovnanie1">
					<li>adoráciou, chválou a vďakyvzdávaním Bohu príhovorom za
						Cirkev, za celý svet a za všetkých, ktorí to potrebujú v starostiach
						aj v radostiach</li>
					<li>modlitbou za mnohých, ktorí sa nemodlia a nemajú vieru</li>
					<li>svedectvom o existencii živého Boha, ktorý býva uprostred nás</li>
				</ul>
				<div class="textfrantisek">V 13. storočí museli mnísi kvôli
					silnejúcim útokom mohamedánov opustiť Svätú zem a presťahovali sa do
					Európy. V 16. storočí dvaja veľkí španielski mystici -sv. Terézia od
					Ježiša (z Avily) a sv. Ján od Kríža - reformovali Karmel. Bol to
					návrat k prvotnej charizme: k ideálu pustovníckeho života, k mlčaniu,
					k úplnému zdržiavaniu sa mäsa, k skrytému životu v klauzúre, k
					pravidelnej vnútornej modlitbe a k modlitbe v chóre, ako aj k prvkom
					komunitného života. Obidvaja, sv. Terézia a sv. Ján, nám odovzdali vo
					svojich spisoch dôležitú náuku o hlbšom spoločenstve s Bohom a ceste
					vnútornej modlitby.</div>
				<div class="textfrantisek">Apoštolát, ktorému sa majú venovať
					bosé karmelitánky, je výlučne apoštolát modlitby a obety.</div>
				<div class="normaltext" style="text-align: center;padding-top:15px;">
					
					<b><i>„Ja sama som o to nikdy neprestala prosiť, napriek mojej veľkej
						úbohosti: ide o Božiu slávu a o dobro jeho Cirkvi, tam smerujú všetky
						moje túžby."</i></b>
						
				</div>
				<div class="normaltext" style="text-align: center;">
					<i>sv. Terézia od Ježiša</i>
				</div>
				<div class="normaltext" style="text-align: center;padding-top:15px;"><b><i>„Chcela by
					som, aby nikto nebol zatratený. Sestry moje, spoločne so mnou proste
					Boha o túto milosť. On vás zhromaždil kvôli tomu: toto je vaše
					povolanie, toto je vaša úloha a vaša túžba, kvôli tomu máte prelievať
					slzy a za toto sa modliť."</i></b></div>
				<div class="normaltext" style="text-align: center;">
					<i>sv. Terézia od Ježiša</i>
				</div>
				<div class="textfrantisek" style="padding-top:15px;">Život karmelitánok je životom tichým a
					celkom obráteným k Bohu. Pre toto neustále, láskyplné obracanie sa k
					Bohu je potrebná na jednej strane atmosféra ticha, uzobrania a
					utiahnutosti, na druhej strane radostný, rodinný život v spoločenstve.</div>
				<div class="textfrantisek">K tomu má byť pomocou jednoduchá
					svojráznosť karmelitánskeho spôsobu života: slávenie Eucharistie</div>
				<ul class="zarovnanie1">
					<li>2 hodiny vnútornej modlitby spoločná liturgia hodín v chóre
						práca v dielňach, v domácnosti a v záhrade prísna klauzúra</li>
					<li>jednoduchosť v zariadení celého kláštora mlčanie a samota
						počas dňa</li>
					<li>ale tiež 2 hodiny (po obede a po večeri) spoločnej rekreácie,
						keď sa sestry môžu spontánne a srdečne porozprávať.</li>
				</ul>
				<div class="textfrantisek">V priebehu stáročí boli duchom Karmelu
					formovaní mnohí svätí. Pre našu súčasnosť sú najznámejšie osobnosti z
					posledných dvoch storočí: svätá Terézia od Dieťaťa Ježiša (z Lisieux),
					sv. Terézia Benedikta od Kríža (Edith Stein), blahoslavená Alžbeta od
					Najsv. Trojice (z Dijonu) a iní. Roku 1206 vykonal František púť do
					Ríma, kde sa zamiešal v žobráckom šate medzi žobrákov a žobral. V
					bazilike sv. Petra vhodil do pokladnice všetky svoje peniaze, aby
					zahanbil pútnikov, čo tam dávali málo. Prečo to nedal chudobným? To je
					tajomstvo jeho osobnosti.</div>
				<div class="textfrantisek">Prvý kláštor bosých karmelitánok na
					Slovensku bol založený v júni 1995 v Košiciach. Pán Boh ho obdaril
					mnohými povolaniami, takže po niekoľkých rokoch počet sestier prekročil
					hranicu 21, stanovenú konštitúciami. Aby mohli byť prijímané ďalšie
					kandidátky, postupne sa začalo pripravovať založenie ďalšieho kláštora.
					28. júla 2007 banskobystrický biskup Mons. Rudolf Baláž slávnostne
					posvätil kaplnku a kláštor Božieho milosrdenstva a Kráľovnej Karmelu v
					Detve. Založiť nový kláštor prichádza z Košíc 11 sestier.</div>
			</div>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>