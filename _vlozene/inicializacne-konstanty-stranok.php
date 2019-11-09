<?php

 	// Inicializačné konštanty každej stránky: detva.fara.sk

$konstantyStranok = array(

	// Meta značka stránky - TITLE -> Zobrazuje sa ako názov okna.	
	"Titulok Stránky" => array(
		"Chybová 404" 						=>	"Farnosť Detva - chybová stránka",
		"Čistá" 							=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, na stránke sa pracuje",
		"Hlavná Stránka" 					=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"Fotogaléria" 						=>	"Farnosť Detva - fotogaléria",   // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	"Farnosť Detva - zaujímavé otázky",
		"farnost->liturgicke-oznamy"		=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"farnost->kontakt-farsky-urad"		=>	"Farnosť Detva - kontakty farnosti",
		"farnost->historia-kostola"			=>	"Farnosť Detva - história kostola",
	),

	// Hlavný nadpis stránky ->  zobrazuje sa len pri tlačení na tlačiarni
	"Nadpis Stránky Pre Tlač" => array(
		"Chybová 404" 						=>	"Farnosť Detva - chybová stránka",
		"Čistá" 							=>	"Čistá stránka",
		"Hlavná Stránka" 					=>	"Hlavná stránka",
		"Fotogaléria" 						=>	"Fotogaléria",    // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	"Zaujímavé otázky",
		"farnost->liturgicke-oznamy"		=>	"Litgurgické oznamy",
		"farnost->kontakt-farsky-urad"		=>	"Kontakt na farský úrad Detva",
		"farnost->historia-kostola"			=>	"História kostola",
	),

	// Meta značka stránky - description -> popisuje stránku
	"Popis Stránky" => array(
		"Chybová 404" 						=>	"Farnosť Detva - stránka chybová - Error 404",
		"Čistá" 							=>	"Farnosť Detva - čistá stránka, na ktorej nieje žiadny obsah. Zobrazuje sa pri neexistujúcom odkaze.",
		"Hlavná Stránka" 					=>	"Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy",
		"Fotogaléria" 						=>	"Farnosť Detva - fotogaléria, albumy, obrázky kostolov a kaplniek",
		"ostatne->Vsetky-otazky"			=>	"Farnosť Detva - zaujímavé otázky a odpovede na rôzne témy",
		"farnost->liturgicke-oznamy"		=>	"Farnosť Detva - aktuálne oznamy",
		"farnost->kontakt-farsky-urad"		=>	"Farnosť Detva - kontakty, poloha v meste Detva, telefón, email, sms",
		"farnost->historia-kostola"			=>	"Farnosť Detva - dejiny a história farského kostola v Detve",
	),
	
	// Meta značka stránky - keywords -> kľúčové slová
	"Kľúčové slová" => array(
		"Chybová 404" 						=>	"Detva, fara, kostol, farnosť, error, 404, pracuje",
		"Čistá" 							=>	"Detva, fara, kostol, farnosť, error, 404, pracuje",
		"Hlavná Stránka" 					=>	"Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa",
		"Fotogaléria" 						=>	"Detva, fara, kostol, farnosť, fotky, obrázky, mládež, dychovka, slávnosť, výročie, deň rodín, oslava, dekanát",
		"ostatne->Vsetky-otazky"			=>	"otázka, odpoveď, zaujímavosť, oznam, svadba, krst, informácia, dalsie info, Detva",
		"farnost->liturgicke-oznamy"		=>	"Detva, fara, kostol, oznamy, aktuality, rozpis, informácie, aktuálny týždeň, omša",
		"farnost->kontakt-farsky-urad"		=>	"poloha, mesto, Detva, telefón, email, sms, kontakt, spojenie, miesto, kam, ako",
		"farnost->historia-kostola"			=>	"kostol, Detva, história, dejiny, vývoj, požiar, kresťanstvo, písomná zmienka, zariadenie, oltár, obrazy, oprava",
	),
	
	// Informácia pre vyhľadávacie roboty -> nastavuje dobu aktualizacie stranky pre GoogleBoota v dňoch.
	"Navstivit Robot Po" => array(
		"Chybová 404" 						=>	365,
		"Čistá" 							=>	365,
		"Hlavná Stránka" 					=>	7,
		"Fotogaléria" 						=>	30,
		"ostatne->Vsetky-otazky"			=>	7,
		"farnost->liturgicke-oznamy"		=>	1,
		"farnost->kontakt-farsky-urad"		=>	30,
		"farnost->historia-kostola"			=>	30,
	),

	// Informácia pre vyhľadávacie roboty -> GooogleBoot - indexovať túto stránku alebo nie?
	"Nastavenie Robots Index" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	true,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,
		"farnost->historia-kostola"			=>	true,
	),

	// Informácia pre vyhľadávacie roboty -> GooogleBoot - nasledovať linky na tejto stránke alebo nie?
	"Nastavenie Robots Folow" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	true,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,
		"farnost->historia-kostola"			=>	true,
	),	

	// Carusel ->  true - nastaví zobrazenie Carouselu, false - nastaví NEzobrazovať Carousel
	"Carusel Zobraziť" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	true,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	true,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,
		"farnost->historia-kostola"			=>	true,
	),			

	// Carusel ->  true nastaví carusel bez pohyblivých obrázkov 
	//             a vyberie náhodne jeden obrázok zo všetkých ktoré sú v adresári /Data/Carousel
	"Carusel Stabilný" => array(
		"Chybová 404" 						=>	true,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	true,
		"ostatne->Vsetky-otazky"			=>	false,
		"farnost->liturgicke-oznamy"		=>	false,
		"farnost->kontakt-farsky-urad"		=>	false,
		"farnost->historia-kostola"			=>	false,
	),

	// Carusel ->  špeciálny výber obrázkov na danú stránku - pozri aj excelovú tabuľku
	"Carusel Poradie" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	array('008', '009', '010', '011', '012', '013', '014'),
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	array('028', '029', '030', '031', '032', '033', '034'),
		"farnost->liturgicke-oznamy"		=>	array('001', '002', '003', '004', '005', '006', '007'),
		"farnost->kontakt-farsky-urad"		=>	array('006', '002', '003', '004', '001', '009', '010'),
		"farnost->historia-kostola"			=>	array('021', '022', '023', '024', '025', '026', '027'),
	),

	// Carusel ->  ktorý obrázok v caruseli je vidieť ako prvý pri načítaní stránky (nastaví sa mu hodnota triedy active)
	"Carusel Aktívny" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	3,
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	1,
		"farnost->liturgicke-oznamy"		=>	1,
		"farnost->kontakt-farsky-urad"		=>	1,
		"farnost->historia-kostola"			=>	1,
	),

	// Bublinkové menu ->  určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	"Bublinkové Menu" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	true, // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	false,
		"farnost->liturgicke-oznamy"		=>	array (
													array("html" => "/farnost", "nazov" => "Farnosť"),
													array("html" => "", "nazov" => "Litgurgické oznamy")
												),
		"farnost->kontakt-farsky-urad"		=>	array (
													array("html" => "/farnost", "nazov" => "Farnosť"),
													array("html" => "", "nazov" => "Kontakt na farský úrad Detva")
												),
		"farnost->historia-kostola"			=>	array (
													array("html" => "/farnost", "nazov" => "Farnosť"),
													array("html" => "", "nazov" => "História kostola sv. Frantiska v Detve")
												),
	),

	// Doplnok "Vedeli ste že ..." ->  true - nastaví zobrazenie, false - nastaví NEzobrazovať 
	//	  Do poľa pod caruselom sa načítava náhodná zaujímavosť z poľa v súbore:  vedeli-ste-ze-zoznam.php
	"Vedeli Ste Ze" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	true,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	false,
		"farnost->historia-kostola"			=>	false,
	),

	// Doplnok "Často kladené otázky" ->  true - nastaví zobrazenie Doplnku, false - nastaví NEzobrazovať doplnok
	//	  Do poľa na spodku stránky sa načítavajú otázky z poľa v súbore:   casto-kladene-otazky-zoznam.php
	"Otázky Zapnut" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	true,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	false,
		"farnost->liturgicke-oznamy"		=>	'Liturgia',
		"farnost->kontakt-farsky-urad"		=>	'Krst',
		"farnost->historia-kostola"			=>	array(
													array("Liturgia", 9),
													array("Svadba", 3)
												),
	),

/* 	// Doplnok "Často kladené otázky" ->  true - zapne funkciu stálych otázok,  false znamená, že budú používané čisto náhodné otázky
	// pole určuje id stálych otázok v súbore:   casto-kladene-otazky-zoznam.php
	"Otázky Trvalé pre danú stránku" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	false,
		"farnost->liturgicke-oznamy"		=>	array('1','3'),
		"farnost->kontakt-farsky-urad"		=>	false,
		"farnost->historia-kostola"			=>	false,
	),

	// Doplnok "Často kladené otázky" ->  určuje celkový počet otázok na stránke Trvalé + Náhodné
	"Otázky Celkový počet" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	4,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	false,
		"farnost->liturgicke-oznamy"		=>	3,
		"farnost->kontakt-farsky-urad"		=>	2,
		"farnost->historia-kostola"			=>	4,
	), */
	
	// Pravý panel ->  určuje celkový počet otázok na stránke Trvalé + Náhodné
	"Pravý Panel Zloženie" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	'standard',
		"Hlavná Stránka" 					=>	'standard',
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	'standard',
		"farnost->liturgicke-oznamy"		=>	array(
													array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Menu'),
													array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Linky'),
													array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
													array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
												),
		"farnost->kontakt-farsky-urad"		=>	'standard',
		"farnost->historia-kostola"			=>	'standard',
	),
);

	
	
	
// Naplnenie konštánt pre konkrétnu stránku z poľa:  $konstantyStranok
// ak na stránke nieje premenná ktorá označuje o akú stránku ide
//alebo v poli $konstantyStranok chýba hodnota prislúchajúca stránke, nastavia sa štandardné hodnoty

	if (!isset($nazovVolajucejStranky)){$nazovVolajucejStranky = "";}
	
	// Meta značky stránky
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Titulok Stránky"])) { 
			$titulokStranky = $konstantyStranok["Titulok Stránky"][$nazovVolajucejStranky];
	} else {$titulokStranky = "Farnosť Detva - oficiálna stránka farnosti aj dekanátu";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Nadpis Stránky Pre Tlač"])) { 
			$nadpisStrankyPreTlac = $konstantyStranok["Nadpis Stránky Pre Tlač"][$nazovVolajucejStranky];
	} else {$nadpisStrankyPreTlac = "";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Popis Stránky"])) { 
			$popisStranky = $konstantyStranok["Popis Stránky"][$nazovVolajucejStranky];
	} else {$popisStranky = "Farnosť Detva - stránka farnosti bez popisu";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Kľúčové slová"])) { 
			$klucoveslova = $konstantyStranok["Kľúčové slová"][$nazovVolajucejStranky];
	} else {$klucoveslova = "Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa";}
	
	// Informácie pre vyhľadávacie roboty	
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Navstivit Robot Po"])) { 
			$navsivitRobotsPo = $konstantyStranok["Navstivit Robot Po"][$nazovVolajucejStranky];
	} else {$navsivitRobotsPo = 365;}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Nastavenie Robots Index"])) { 
			$nastavenieRobotsIndex = $konstantyStranok["Nastavenie Robots Index"][$nazovVolajucejStranky];
	} else {$nastavenieRobotsIndex = false;}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Nastavenie Robots Folow"])) { 
			$nastavenieRobotsFolow = $konstantyStranok["Nastavenie Robots Folow"][$nazovVolajucejStranky];
	} else {$nastavenieRobotsFolow = false;}
	
	// Carusel - nastavenie
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Carusel Zobraziť"])) { 
			$caruselOFF = $konstantyStranok["Carusel Zobraziť"][$nazovVolajucejStranky];
	} else {$caruselOFF = true;}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Carusel Stabilný"])) { 
			$caruselStabilny = $konstantyStranok["Carusel Stabilný"][$nazovVolajucejStranky];
	} else {$caruselStabilny = "";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Carusel Poradie"])) { 
			$caruselPoradie = $konstantyStranok["Carusel Poradie"][$nazovVolajucejStranky];
	} else {$caruselPoradie = array('000', '020', '025', '037', '048', '056');}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Carusel Aktívny"])) { 
			$caruselAktivny = $konstantyStranok["Carusel Aktívny"][$nazovVolajucejStranky];
	} else {$caruselAktivny = 1;}
	
	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Bublinkové Menu"])) { 
			$bublinkoveMenu = $konstantyStranok["Bublinkové Menu"][$nazovVolajucejStranky];
	} else {$bublinkoveMenu = false;}

	// určuje či sa na stránke zobrazí doplnok "Vedeli ste že ..." do ktorého sa načítava náhodná zaujímavosť.
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Vedeli Ste Ze"])) { 
			$vedeliSteZeOFF = $konstantyStranok["Vedeli Ste Ze"][$nazovVolajucejStranky];
	} else {$vedeliSteZeOFF = true;}

	// určuje či sa zobrazí na spodku stránku Doplnok "Často kladené otázky"
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Otázky Zapnut"])) { 
			$otazkyOFF = $konstantyStranok["Otázky Zapnut"][$nazovVolajucejStranky];
	} else {$otazkyOFF = true;}

/* 	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Otázky Trvalé pre danú stránku"])) { 
			$otazkyTrvale = $konstantyStranok["Otázky Trvalé pre danú stránku"][$nazovVolajucejStranky];
	} else {$otazkyTrvale = false;}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Otázky Celkový počet"])) { 
			$otazkyPocet = $konstantyStranok["Otázky Celkový počet"][$nazovVolajucejStranky];
	} else {$otazkyPocet = "3";} */

	// Pravý panel
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Pravý Panel Zloženie"])) { 
			$PravyPanelZlozenie = $konstantyStranok["Pravý Panel Zloženie"][$nazovVolajucejStranky];
	} else {$PravyPanelZlozenie = "standard";}
?>