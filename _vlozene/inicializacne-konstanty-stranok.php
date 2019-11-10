<?php

 	// Inicializačné konštanty každej stránky: detva.fara.sk

// Inicializačné konštanty spoločné

	// zoznam obrázkov carousel ak je zvolená možnosť 'standard'
	$StandardnyCarousel = array('057', '056', '054', '051', '042', '048', '035', '036', '038', '040', '055'); 
	// konštanta počtu často kladených otázok ktoré sa zobrazia ak je zaškrtnutá iba voľba TRUE
	$pocetNahodnychOtazok = 5;

// Inicializačné konštanty individuálne
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
		"farnost->knazi-vo-farnosti"		=>	"Farnosť Detva - Aktuálne pôsobiaci kňazi vo farnosti",
		"dekanat->podpolianske-krize"		=>	"Farnosť Detva - Podpolianske vyrezávané kríže",
	),	// "Titulok Stránky"

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
		"farnost->knazi-vo-farnosti"		=>	"Kňazi aktuálne pôsobiaci vo farnosti Detva.",
		"dekanat->podpolianske-krize"		=>	"Detvianske vyrezávaní kríže sú zaradené do nehmotného kultúrneho dedičstva Slovenska.",
	),	// "Popis Stránky"

	// Nadpis stránky  pre tlač ->  zobrazuje sa len pri tlačení na tlačiarni
	"Nadpis pre tlač" => array(
		"Chybová 404" 						=>	"Farnosť Detva - chybová stránka",
		"Čistá" 							=>	"Čistá stránka",
		"Hlavná Stránka" 					=>	"Hlavná stránka",
		"Fotogaléria" 						=>	"Fotogaléria",    // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	"Zaujímavé otázky",
		"farnost->liturgicke-oznamy"		=>	"Litgurgické oznamy",
		"farnost->kontakt-farsky-urad"		=>	"Kontakt na farský úrad Detva",
		"farnost->historia-kostola"			=>	"História kostola",
		"farnost->knazi-vo-farnosti"		=>	"Kňazi pôsobiaci vo farnosti Detva",
		"dekanat->podpolianske-krize"		=>	"Podpolianske vyrezávané kríže",
	),	// "Nadpis pre tlač"
	
	// Meta značka stránky - autor -> zobrazuje sa v hlavičke stránky, ale hlavne je to potrebné pri zobrazení stránky v režime čítačky
	"Autor" => array(
		"Chybová 404" 						=>	"Ing. Ondrej VRŤO",
		"Čistá" 							=>	"Ing. Ondrej VRŤO",
		"Hlavná Stránka" 					=>	"p.Dekan Sabol, Ing. Ondrej VRŤO",
		"Fotogaléria" 						=>	"Rôzny autori",
		"ostatne->Vsetky-otazky"			=>	"Ing. Ondrej VRŤO",
		"farnost->liturgicke-oznamy"		=>	"p. Dekan Sabol",
		"farnost->kontakt-farsky-urad"		=>	"p. Dekan Sabol",
		"farnost->historia-kostola"			=>	"Mgr. Anička BARTKOVÁ",
		"farnost->knazi-vo-farnosti"		=>	"Ing. Ondrej VRŤO",
		"dekanat->podpolianske-krize"		=>	"Mgr. Anička BARTKOVÁ",
	),	// "Autor"
	
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
		"farnost->knazi-vo-farnosti"		=>	true,
		"dekanat->podpolianske-krize"		=>	true,
	),	// "Nastavenie Robots Index"

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
		"farnost->knazi-vo-farnosti"		=>	true,
		"dekanat->podpolianske-krize"		=>	true,
	),	// "Nastavenie Robots Folow"

	// Carusel  ->  pozri aj excelovú tabuľku
		// false -> nastaví NEzobrazovať Carousel
		// 'JedenNahodnyObrazok' -> vyberie jeden náhodný obrázok z adresára /Data/Carousel a nebude aktivovaný Java skript. Pri obnovení stránky sa obrázok zmení
		// 'standard' 			 -> nastaví štandardné pole obrázkov nastavené v premennej $StandardnyCarousel na vrchu tohoto súboru
		// array('028', '029')   -> Individuálne pole obrázkov pre danú stránku + automatický pohyb
	"Carusel" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	'JedenNahodnyObrazok',
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	array('028', '029', '030', '031', '032', '033', '034'),
		"farnost->liturgicke-oznamy"		=>	'standard',
		"farnost->kontakt-farsky-urad"		=>	array('006', '002', '003', '004', '001', '009', '010'),
		"farnost->historia-kostola"			=>	array('021', '022', '023', '024', '025', '026', '027'),
		"farnost->knazi-vo-farnosti"		=>	'standard',
		"dekanat->podpolianske-krize"		=>	array('035', '036', '037', '038'),
	),	// "Carusel"

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
		"farnost->knazi-vo-farnosti"		=>	true,
		"dekanat->podpolianske-krize"		=>	true,
	),	// "Vedeli Ste Ze"

	// Doplnok "Často kladené otázky" ->  true - nastaví zobrazenie Doplnku, false - nastaví NEzobrazovať doplnok
	//	  Do poľa na spodku stránky sa načítavajú otázky z poľa v súbore:   casto-kladene-otazky-zoznam.php
	"Často kladené otázky" => array(
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
		"farnost->knazi-vo-farnosti"		=>	true,
		"dekanat->podpolianske-krize"		=>	true,
	),	// "Často kladené otázky"

	// Bublinkové menu ->  určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	"Bublinkové Menu" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	true, // pri fotogalériách sa vkladá separátny kód
		"ostatne->Vsetky-otazky"			=>	false,
		"farnost->liturgicke-oznamy"		=>	array (
													array("/farnost", "Farnosť"),
													array("", "Litgurgické oznamy")
												),
		"farnost->kontakt-farsky-urad"		=>	array (
													array("/farnost", "Farnosť"),
													array("", "Kontakt na farský úrad Detva")
												),
		"farnost->historia-kostola"			=>	array (
													array("/farnost", "Farnosť"),
													array("", "História kostola sv. Frantiska v Detve")
												),
		"farnost->knazi-vo-farnosti"		=>	array (
													array("/farnost", "Farnosť"),
													array("", "Kňazi pôsobiaci vo farnosti Detva")
												),
		"dekanat->podpolianske-krize"		=>	array (
													array("/dekanat/", "Dekanát"),
													array("", "Podpolianske vyrezávané kríže")
												),												
	),	// "Bublinkové Menu"
	
	// Pravý panel ->  určuje celkový počet otázok na stránke Trvalé + Náhodné
	"Pravý Panel Zloženie" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	'standard',
		"Hlavná Stránka" 					=>	'standard',
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	'standard',
		"farnost->liturgicke-oznamy"		=>	array(
													array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Menu'),
													array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Linky'),
													array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
													array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
												),
		"farnost->kontakt-farsky-urad"		=>	'standard',
		"farnost->historia-kostola"			=>	'standard',
		"farnost->knazi-vo-farnosti"		=>	'standard',
		"dekanat->podpolianske-krize"		=>	'standard',
	),	// "Pravý Panel Zloženie"
);

	
	
	
// Naplnenie konštánt pre konkrétnu stránku z poľa:  $konstantyStranok
// ak na stránke nieje premenná ktorá označuje o akú stránku ide
//alebo v poli $konstantyStranok chýba hodnota prislúchajúca stránke, nastavia sa štandardné hodnoty

	if (!isset($nazovVolajucejStranky)){$nazovVolajucejStranky = "";}
	
	// Meta značky stránky
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Titulok Stránky"])) { 
			$titulokStranky = $konstantyStranok["Titulok Stránky"][$nazovVolajucejStranky];
	} else {$titulokStranky = "Farnosť Detva - oficiálna stránka farnosti aj dekanátu";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Nadpis pre tlač"])) { 
			$nadpisStrankyPreTlac = $konstantyStranok["Nadpis pre tlač"][$nazovVolajucejStranky];
	} else {$nadpisStrankyPreTlac = "Podstránka farnosti Detva";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Popis Stránky"])) { 
			$popisStranky = $konstantyStranok["Popis Stránky"][$nazovVolajucejStranky];
	} else {$popisStranky = "Farnosť Detva - stránka farnosti bez popisu";}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Autor"])) { 
			$autor = $konstantyStranok["Autor"][$nazovVolajucejStranky];
	} else {$autor = "Ing. Ondrej VRŤO";}
	
	// Informácie pre vyhľadávacie roboty	
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Nastavenie Robots Index"])) { 
			$nastavenieRobotsIndex = $konstantyStranok["Nastavenie Robots Index"][$nazovVolajucejStranky];
	} else {$nastavenieRobotsIndex = false;}
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Nastavenie Robots Folow"])) { 
			$nastavenieRobotsFolow = $konstantyStranok["Nastavenie Robots Folow"][$nazovVolajucejStranky];
	} else {$nastavenieRobotsFolow = false;}
	
	// Carusel - nastavenie
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Carusel"])) { 
			$caruselOFF = $konstantyStranok["Carusel"][$nazovVolajucejStranky];
	} else {$caruselOFF = 'standard';}
	
	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Bublinkové Menu"])) { 
			$bublinkoveMenu = $konstantyStranok["Bublinkové Menu"][$nazovVolajucejStranky];
	} else {$bublinkoveMenu = false;}

	// určuje či sa na stránke zobrazí doplnok "Vedeli ste že ..." do ktorého sa načítava náhodná zaujímavosť.
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Vedeli Ste Ze"])) { 
			$vedeliSteZeOFF = $konstantyStranok["Vedeli Ste Ze"][$nazovVolajucejStranky];
	} else {$vedeliSteZeOFF = true;}

	// určuje či sa zobrazí na spodku stránku Doplnok "Často kladené otázky"
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Často kladené otázky"])) { 
			$otazkyOFF = $konstantyStranok["Často kladené otázky"][$nazovVolajucejStranky];
	} else {$otazkyOFF = true;}

	// Pravý panel
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Pravý Panel Zloženie"])) { 
			$PravyPanelZlozenie = $konstantyStranok["Pravý Panel Zloženie"][$nazovVolajucejStranky];
	} else {$PravyPanelZlozenie = "standard";}
?>