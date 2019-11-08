<?php

 	// Inicializačné konštanty každej stránky: detva.fara.sk

$konstantyStranok = array(

	// Meta značka stránky - TITLE -> Zobrazuje sa ako názov okna.	
	"Titulok Stránky" => array(
		"Chybová 404" 			=>	"Farnosť Detva - chybová stránka",
		"Čistá" 				=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, na stránke sa pracuje",
		"Hlavná Stránka" 		=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"Fotogaléria" 			=>	"Farnosť Detva - fotogaléria",   // POZOR špeciálny kód pri fotogalérii
		"Liturgické oznamy"		=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"farnost_kontakt-farsky-urad-detva"		=>	"Farnosť Detva - kontakty farnosti",
	),

	// Hlavný nadpis stránky ->  zobrazuje sa len pri tlačení na tlačiarni
	"Nadpis Stránky Pre Tlač" => array(
		"Chybová 404" 			=>	"Farnosť Detva - chybová stránka",
		"Čistá" 				=>	"Čistá stránka",
		"Hlavná Stránka" 		=>	"Hlavná stránka",
		"Fotogaléria" 			=>	"Fotogaléria",    // POZOR špeciálny kód pri fotogalérii
		"Liturgické oznamy"		=>	"Litgurgické oznamy",
		"farnost_kontakt-farsky-urad-detva"		=>	"Kontakt na farský úrad Detva",
	),

	// Meta značka stránky - description -> popisuje stránku
	"Popis Stránky" => array(
		"Chybová 404" 			=>	"Farnosť Detva - stránka chybová - Error 404",
		"Čistá" 				=>	"Farnosť Detva - čistá stránka, na ktorej nieje žiadny obsah. Zobrazuje sa pri neexistujúcom odkaze.",
		"Hlavná Stránka" 		=>	"Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy",
		"Fotogaléria" 			=>	"Farnosť Detva - fotogaléria, albumy, obrázky kostolov a kaplniek",
		"Liturgické oznamy"		=>	"Farnosť Detva - aktuálne oznamy",
		"farnost_kontakt-farsky-urad-detva"		=>	"Farnosť Detva - kontakty, poloha v meste Detva, telefón, email, sms",
	),
	
	// Meta značka stránky - keywords -> kľúčové slová
	"Kľúčové slová" => array(
		"Chybová 404" 			=>	"Detva, fara, kostol, farnosť, error, 404, pracuje",
		"Čistá" 				=>	"Detva, fara, kostol, farnosť, error, 404, pracuje",
		"Hlavná Stránka" 		=>	"Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa",
		"Fotogaléria" 			=>	"Detva, fara, kostol, farnosť, fotky, obrázky, mládež, dychovka, slávnosť, výročie, deň rodín, oslava, dekanát",
		"Liturgické oznamy"		=>	"Detva, fara, kostol, oznamy, aktuality, rozpis, informácie, aktuálny týždeň, omša",
		"farnost_kontakt-farsky-urad-detva"		=>	"poloha, mesto, Detva, telefón, email, sms, kontakt, spojenie, miesto, kam, ako",
	),
	
	// Informácia pre vyhľadávacie roboty -> nastavuje dobu aktualizacie stranky pre GoogleBoota v dňoch.
	"Navstivit Robot Po" => array(
		"Chybová 404" 			=>	365,
		"Čistá" 				=>	365,
		"Hlavná Stránka" 		=>	7,
		"Fotogaléria" 			=>	30,
		"Liturgické oznamy"		=>	1,
		"farnost_kontakt-farsky-urad-detva"		=>	30,
	),

	// Informácia pre vyhľadávacie roboty -> GooogleBoot - indexovať túto stránku alebo nie?
	"Nastavenie Robots Index" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	true,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	true,
		"farnost_kontakt-farsky-urad-detva"		=>	true,
	),

	// Informácia pre vyhľadávacie roboty -> GooogleBoot - nasledovať linky na tejto stránke alebo nie?
	"Nastavenie Robots Folow" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	true,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	true,
		"farnost_kontakt-farsky-urad-detva"		=>	true,
	),	

	// Carusel ->  true - nastaví zobrazenie Carouselu, false - nastaví NEzobrazovať Carousel
	"Carusel Zobraziť" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	true,
		"Hlavná Stránka" 		=>	true,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	true,
		"farnost_kontakt-farsky-urad-detva"		=>	true,
	),			

	// Carusel ->  true nastaví carusel bez pohyblivých obrázkov 
	//             a vyberie náhodne jeden obrázok zo všetkých ktoré sú v adresári /Data/Carousel
	"Carusel Stabilný" => array(
		"Chybová 404" 			=>	true,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	true,
		"Fotogaléria" 			=>	true,
		"Liturgické oznamy"		=>	false,
		"farnost_kontakt-farsky-urad-detva"		=>	false,
	),

	// Carusel ->  špeciálny výber obrázkov na danú stránku - pozri aj excelovú tabuľku
	"Carusel Poradie" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	array('008', '009', '010', '011', '012', '013', '014'),
		"Hlavná Stránka" 		=>	false,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	array('001', '002', '003', '004', '005', '006', '007'),
		"farnost_kontakt-farsky-urad-detva"		=>	array('006', '002', '003', '004', '001', '009', '010'),
	),

	// Carusel ->  ktorý obrázok v caruseli je vidieť ako prvý pri načítaní stránky (nastaví sa mu hodnota triedy active)
	"Carusel Aktívny" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	3,
		"Hlavná Stránka" 		=>	false,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	1,
		"farnost_kontakt-farsky-urad-detva"		=>	1,
	),

	// Bublinkové menu ->  určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	"Bublinkové Menu" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	false,
		"Fotogaléria" 			=>	true, // POZOR špeciálny kód pri fotogalérii
		"Liturgické oznamy"		=>	array (
										array("html" => "/farnost", "nazov" => "Farnosť"),
										array("html" => "", "nazov" => "Litgurgické oznamy")
										),
		"farnost_kontakt-farsky-urad-detva"		=>	array (
										array("html" => "/farnost", "nazov" => "Farnosť"),
										array("html" => "", "nazov" => "Kontakt na farský úrad Detva")
										),
	),

	// Doplnok "Vedeli ste že ..." ->  true - nastaví zobrazenie, false - nastaví NEzobrazovať 
	//	  Do poľa pod caruselom sa načítava náhodná zaujímavosť z poľa v súbore:  vedeli-ste-ze-zoznam.php
	"Vedeli Ste Ze" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	true,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	true,
		"farnost_kontakt-farsky-urad-detva"		=>	false,
	),

	// Doplnok "Často kladené otázky" ->  true - nastaví zobrazenie Doplnku, false - nastaví NEzobrazovať doplnok
	//	  Do poľa na spodku stránky sa načítavajú otázky z poľa v súbore:   casto-kladene-otazky-zoznam.php
	"Otázky Zapnut" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	true,
		"Hlavná Stránka" 		=>	true,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	true,
		"farnost_kontakt-farsky-urad-detva"		=>	true,
	),

	// Doplnok "Často kladené otázky" ->  true - zapne funkciu stálych otázok,  false znamená, že budú používané čisto náhodné otázky
	// pole určuje id stálych otázok v súbore:   casto-kladene-otazky-zoznam.php
	"Otázky Trvalé pre danú stránku" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	false,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	array('1','3'),
		"farnost_kontakt-farsky-urad-detva"		=>	false,
	),

	// Doplnok "Často kladené otázky" ->  určuje celkový počet otázok na stránke Trvalé + Náhodné
	"Otázky Celkový počet" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	false,
		"Hlavná Stránka" 		=>	4,
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	3,
		"farnost_kontakt-farsky-urad-detva"		=>	2,
	),
	
	// Pravý panel ->  určuje celkový počet otázok na stránke Trvalé + Náhodné
	"Pravý Panel Zloženie" => array(
		"Chybová 404" 			=>	false,
		"Čistá" 				=>	'standard',
		"Hlavná Stránka" 		=>	'standard',
		"Fotogaléria" 			=>	false,
		"Liturgické oznamy"		=>	array(
										array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot'),
										array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'LinkBreviarBiblia'),
										array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
										array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
									),
		"farnost_kontakt-farsky-urad-detva"		=>	'standard',
	),
);

	
	
	
// Naplnenie konštánt pre konkrétnu stránku z poľa:  $konstantyStranok
	
	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = $konstantyStranok["Titulok Stránky"][$nazovVolajucejStranky];
	$nadpisStrankyPreTlac = $konstantyStranok["Nadpis Stránky Pre Tlač"][$nazovVolajucejStranky];
	$popisStranky = $konstantyStranok["Popis Stránky"][$nazovVolajucejStranky];
	$klucoveslova = $konstantyStranok["Kľúčové slová"][$nazovVolajucejStranky];
	
	// Informácie pre vyhľadávacie roboty
	$navsivitRobotsPo = $konstantyStranok["Navstivit Robot Po"][$nazovVolajucejStranky];
	$nastavenieRobotsIndex = $konstantyStranok["Nastavenie Robots Index"][$nazovVolajucejStranky];
	$nastavenieRobotsFolow = $konstantyStranok["Nastavenie Robots Folow"][$nazovVolajucejStranky];
	
	// Carusel - nastavenie
	$caruselOFF = $konstantyStranok["Carusel Zobraziť"][$nazovVolajucejStranky];
	$caruselStabilny = $konstantyStranok["Carusel Stabilný"][$nazovVolajucejStranky];
	$caruselPoradie = $konstantyStranok["Carusel Poradie"][$nazovVolajucejStranky];
	$caruselAktivny = $konstantyStranok["Carusel Aktívny"][$nazovVolajucejStranky];

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = $konstantyStranok["Bublinkové Menu"][$nazovVolajucejStranky];
	
	// určuje či sa na stránke zobrazí doplnok "Vedeli ste že ..." do ktorého sa načítava náhodná zaujímavosť.
	$vedeliSteZeOFF = $konstantyStranok["Vedeli Ste Ze"][$nazovVolajucejStranky];

	// určuje či sa zobrazí na spodku stránku Doplnok "Často kladené otázky"
	$otazkyOFF = $konstantyStranok["Otázky Zapnut"][$nazovVolajucejStranky];
	$otazkyTrvale = $konstantyStranok["Otázky Trvalé pre danú stránku"][$nazovVolajucejStranky];
	$otazkyPocet = $konstantyStranok["Otázky Celkový počet"][$nazovVolajucejStranky];

	// Pravý panel
	$PravyPanelZlozenie = $konstantyStranok["Pravý Panel Zloženie"][$nazovVolajucejStranky];

?>