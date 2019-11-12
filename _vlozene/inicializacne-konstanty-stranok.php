<?php

// Inicializačné konštanty každej stránky: detva.fara.sk

// Konštanty spoločné

	// Carousel -> zoznam obrázkov ak je zvolená možnosť 'standard'
	$StandardnyCarousel = array('057', '056', '054', '051', '042', '048', '035', '036', '038', '040', '055'); 

	// Right panel -> Štandardné zloženie pri vo2be 'standard'
	$PravyPanelStandard = array(
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'OsobneUdaje'),			
/* 			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => false, "PevnaVyska" => 365, "Role" => false, "NazovPanelu" => 'VyveskaOznamy'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => false, "PevnaVyska" => 365, "Role" => false, "NazovPanelu" => 'VyveskaAkcie'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'LinkBreviarBiblia'), */
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot')
 		);

	// konštanta počtu často kladených otázok ktoré sa zobrazia ak je zaškrtnutá iba voľba TRUE
	$pocetNahodnychOtazok = 5;

	// START - Konštanty pre Foto-albumy
		// nastaví počty miniatúr vo fotogalérii
		$albumov_na_stranke = 10;						// number of albums per page
		$fotiek_na_stranke  = 20;						// number of images per page    
		$radenie_albumov = "Z-A";						// radenie od A-Z alebo Z-A
		
		// true - pri zobrazení zoznamu galérií vyberie do náhľadu jednu náhodnú fotku
		$nahodneFotky = false;
		
		// Veľkosť zmenšenín obrázkov. Tie sa generujú automaticky, ale iba 1x. 
		// Ak chceš zmeniť veľkosť musíš najskôr zmazať pôvodné a refrešnúť stránku
		$thumb_width   = '280';						// width of thumbnails
		$thumb_height  = '280';						// height of thumbnails
		
		// Názvy galérií sa automaticky načítavajú z názvu adresára.
		// pri niektorých je potrebné upraviť gramatiku, aby to vyzeralo pekne na stránke.
		// v poli $OpravaGramatikyIN je presný názov adresára
		//POZOR prvé písmeno prvého slova v poli $OpravaGramatikyIN daj veľkým,
		$OpravaGramatikyIN  = Array('Fotogaleria', 'Detvianske vyrezavane krize', 'Starsie');
		$OpravaGramatikyOUT = Array('Fotogaléria', 'Detvianske vyrezávané kríže', 'Staršie');
	// END - Konštanty pre Foto-albumy




// Konštanty individuálne
$konstantyStranok = array(

	// Meta značka stránky - TITLE -> Zobrazuje sa ako názov okna.	
	"Titulok Stránky" => array(
		"Chybová 404" 						=>	"Farnosť Detva - chybová stránka",
		"Čistá" 							=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, na stránke sa pracuje",
		"Hlavná Stránka" 					=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"Fotogaléria" 						=>	"Farnosť Detva - fotogaléria",   // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	"Farnosť Detva - zaujímavé otázky",
		"ostatne->vyhladavanie"				=>	"",
		
		"farnost"							=>	"Farnosť Detva - kam ďalej?",
		"farnost->liturgicke-oznamy"		=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"farnost->rozpisy-lektorov-detva"	=>	"",
		"farnost->svate-omse-farnosti-detva"=>	"",
		"farnost->historia-kostola"			=>	"Farnosť Detva - história kostola",		
		"farnost->zaujimavosti-kostola"		=>	"",
		"farnost->dolezite-osobnosti"		=>	"",
		"farnost->svety-frantisek"			=>	"Farnosť Detva - sv. František patrón farnosti",
		"farnost->statistiky"				=>	"",
		"farnost->vianoce-v-detve"			=>	"",
		"farnost->farska-charita"			=>	"",
		"farnost->farska-kniznica"			=>	"",
		"farnost->knazi-vo-farnosti"		=>	"Farnosť Detva - Aktuálne pôsobiaci kňazi vo farnosti",		
		"farnost->knazi-z-nasho-kraja"		=>	"",
		"farnost->kontakt-farsky-urad"		=>	"Farnosť Detva - kontakty farnosti",

		"liturgia"							=>	"Farnosť Detva - Liturgia, slávnosti a požehnania",
		"liturgia->sviatost-krstu"			=>	"",
		"liturgia->svate-prijimanie"		=>	"",
		"liturgia->birmovanie"				=>	"",
		"liturgia->spovedanie"				=>	"",
		"liturgia->pomazanie-chorych"		=>	"",
		"liturgia->vysviacka"				=>	"",
		"liturgia->sobas"					=>	"",
		"liturgia->pohreb"					=>	"",
		"liturgia->pozehnavanie-pribitkov"	=>	"",
		"liturgia->pozehnavanie-predmetov"	=>	"",
		"liturgia->poboznosti-a-adoracie"	=>	"",
		"liturgia->zivotopisy-svatych"		=>	"",
		"liturgia->zaujimave-kazne-a-uvahy"	=>	"",
		"liturgia->odkazy-zaujimave-stranky"=>	"",
		"liturgia->zakl-vedomosti-krestana"	=>	"",
		"liturgia->kodex-kanonickeho-prava"	=>	"",
	
		"dekanat"							=>	"Dekanát Detva - hlavná stránka",
		"dekanat->schematizmus"				=>	"Dekanát Detva - Schematizmus dekanátu",		
		"dekanat->klastor-karmelu-detva"	=>	"Dekanát Detva - Kláštor Kráľovnej Karmelu v Detve",
		"dekanat->rad-bratov-kapucinov"		=>	"",
		"dekanat->svate-omse-v-okoli"		=>	"",
		"dekanat->kam-vo-farnosti"			=>	"",
		"dekanat->podpolianske-krize"		=>	"Dekanát Detva - Podpolianske vyrezávané kríže",
		"dekanat->kontakt-dekanskeho-uradu"	=>	"",
	),	// "Titulok Stránky"

	// Meta značka stránky - description -> popisuje stránku
	"Popis Stránky" => array(
		"Chybová 404" 						=>	"Farnosť Detva - stránka chybová - Error 404",
		"Čistá" 							=>	"Farnosť Detva - čistá stránka, na ktorej nieje žiadny obsah. Zobrazuje sa pri neexistujúcom odkaze.",
		"Hlavná Stránka" 					=>	"Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy",
		"Fotogaléria" 						=>	"Farnosť Detva - fotogaléria, albumy, obrázky kostolov a kaplniek",
		"ostatne->Vsetky-otazky"			=>	"Farnosť Detva - zaujímavé otázky a odpovede na rôzne témy",
		"ostatne->vyhladavanie"				=>	"",

		"farnost"							=>	"Krásna príroda, krásny kostol, krásne kríže, krásne kroje. Prídi sa presvedčiť aj sám.",
		"farnost->liturgicke-oznamy"		=>	"Farnosť Detva - aktuálne oznamy",
		"farnost->rozpisy-lektorov-detva"	=>	"",
		"farnost->svate-omse-farnosti-detva"=>	"",
		"farnost->historia-kostola"			=>	"Farnosť Detva - dejiny a história farského kostola v Detve",		
		"farnost->zaujimavosti-kostola"		=>	"",
		"farnost->dolezite-osobnosti"		=>	"",
		"farnost->svety-frantisek"			=>	"sv. František - patrón farnosti",
		"farnost->statistiky"				=>	"",
		"farnost->vianoce-v-detve"			=>	"",
		"farnost->farska-charita"			=>	"",
		"farnost->farska-kniznica"			=>	"",
		"farnost->knazi-vo-farnosti"		=>	"Kňazi aktuálne pôsobiaci vo farnosti Detva.",		
		"farnost->knazi-z-nasho-kraja"		=>	"",
		"farnost->kontakt-farsky-urad"		=>	"Farnosť Detva - kontakty, poloha v meste Detva, telefón, email, sms",

		"liturgia"							=>	"Prvé sväté príjimanie, sobáš, pohreb, birmovka alebo krst. Všetky informácie na jednom mieste",
		"liturgia->sviatost-krstu"			=>	"",
		"liturgia->svate-prijimanie"		=>	"",
		"liturgia->birmovanie"				=>	"",
		"liturgia->spovedanie"				=>	"",
		"liturgia->pomazanie-chorych"		=>	"",
		"liturgia->vysviacka"				=>	"",
		"liturgia->sobas"					=>	"",
		"liturgia->pohreb"					=>	"",
		"liturgia->pozehnavanie-pribitkov"	=>	"",
		"liturgia->pozehnavanie-predmetov"	=>	"",
		"liturgia->poboznosti-a-adoracie"	=>	"",
		"liturgia->zivotopisy-svatych"		=>	"",
		"liturgia->zaujimave-kazne-a-uvahy"	=>	"",
		"liturgia->odkazy-zaujimave-stranky"=>	"",
		"liturgia->zakl-vedomosti-krestana"	=>	"",
		"liturgia->kodex-kanonickeho-prava"	=>	"",

		"dekanat"							=>	"Dekanát Detva. Môžete obdivovať krásu našich chrámov či vyrezávaných krížov",
		"dekanat->schematizmus"				=>	"Schematizmus dekanátu Detva. Kňazi fo farnosti Kriváň, Hriňová, Detvianska Huta, Očová, Stožok, Zvolenská Slatina, Kalinka.",
		"dekanat->klastor-karmelu-detva"	=>	"Kláštor Božieho milosrdenstva a Kráľovnej Karmelu v Detve",
		"dekanat->rad-bratov-kapucinov"		=>	"",
		"dekanat->svate-omse-v-okoli"		=>	"",
		"dekanat->kam-vo-farnosti"			=>	"",
		"dekanat->podpolianske-krize"		=>	"Detvianske vyrezávané kríže sú zaradené do nehmotného kultúrneho dedičstva Slovenska",
		"dekanat->kontakt-dekanskeho-uradu"	=>	"",
		
	),	// "Popis Stránky"

	// Nadpis stránky  pre tlač ->  zobrazuje sa len pri tlačení na tlačiarni
	"Nadpis pre tlač" => array(
		"Chybová 404" 						=>	"Farnosť Detva - chybová stránka",
		"Čistá" 							=>	"Čistá stránka",
		"Hlavná Stránka" 					=>	"Hlavná stránka",
		"Fotogaléria" 						=>	"Fotogaléria",    // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	"Zaujímavé otázky",
		"ostatne->vyhladavanie"				=>	"",

		"farnost"							=>	"Farnosť Detva",
		"farnost->liturgicke-oznamy"		=>	"Litgurgické oznamy",
		"farnost->rozpisy-lektorov-detva"	=>	"Rozpisy lektorov",
		"farnost->svate-omse-farnosti-detva"=>	"Omše vo farnosti",
		"farnost->historia-kostola"			=>	"História kostola",
		"farnost->zaujimavosti-kostola"		=>	"Zaujímavosti nášho kostola",
		"farnost->dolezite-osobnosti"		=>	"Dôležité osobnosti farnosti",
		"farnost->svety-frantisek"			=>	"sv. František - patrón farnosti",
		"farnost->statistiky"				=>	"Štatistiky",
		"farnost->vianoce-v-detve"			=>	"Vianoce v Detve",
		"farnost->farska-charita"			=>	"Farská charita",
		"farnost->farska-kniznica"			=>	"Farská knižnica",
		"farnost->knazi-vo-farnosti"		=>	"Kňazi pôsobiaci vo farnosti Detva",
		"farnost->knazi-z-nasho-kraja"		=>	"Kňazi z nášho kraja",
		"farnost->kontakt-farsky-urad"		=>	"Kontakt na farský úrad Detva",

		"liturgia"							=>	"Liturgia",
		"liturgia->sviatost-krstu"			=>	"Sviatosť krstu",
		"liturgia->svate-prijimanie"		=>	"Sväté prijímanie",
		"liturgia->birmovanie"				=>	"Birmovanie",
		"liturgia->spovedanie"				=>	"Spovedanie",
		"liturgia->pomazanie-chorych"		=>	"Pomazanie chorých",
		"liturgia->vysviacka"				=>	"Vysviacka",
		"liturgia->sobas"					=>	"Sobáš",
		"liturgia->pohreb"					=>	"Pohreb",
		"liturgia->pozehnavanie-pribitkov"	=>	"Požehnávanie príbytkov",
		"liturgia->pozehnavanie-predmetov"	=>	"Požehnávanie predmetov",
		"liturgia->poboznosti-a-adoracie"	=>	"Pobožnosti a adorácie",
		"liturgia->zivotopisy-svatych"		=>	"Životopisy svätých",
		"liturgia->zaujimave-kazne-a-uvahy"	=>	"Zaujímavé kázne a úvahy",
		"liturgia->odkazy-zaujimave-stranky"=>	"Odkazy na zaujímavé stránky",
		"liturgia->zakl-vedomosti-krestana"	=>	"Základné vedomosti kresťana",
		"liturgia->kodex-kanonickeho-prava"	=>	"Kódex kánonického práva",

		"dekanat"							=>	"Dekanát Detva",
		"dekanat->schematizmus"				=>	"Schématizmus dekanátu Detva",
		"dekanat->klastor-karmelu-detva"	=>	"Kláštor Kráľovnej Karmelu v Detve",
		"dekanat->rad-bratov-kapucinov"		=>	"Rád Menších bratov Kapucínov",
		"dekanat->svate-omse-v-okoli"		=>	"Sväté omše v okolí",
		"dekanat->kam-vo-farnosti"			=>	"Kam vo farnosti ?",
		"dekanat->podpolianske-krize"		=>	"Podpolianske vyrezávané kríže",
		"dekanat->kontakt-dekanskeho-uradu"	=>	"Kontakt dekanského úradu",
	),	// "Nadpis pre tlač"
	
	// Meta značka stránky - autor -> zobrazuje sa v hlavičke stránky, ale hlavne je to potrebné pri zobrazení stránky v režime čítačky
	"Autor" => array(
		"Chybová 404" 						=>	"Ing. Ondrej VRŤO",
		"Čistá" 							=>	"Ing. Ondrej VRŤO",
		"Hlavná Stránka" 					=>	"p.Dekan Sabol, Ing. Ondrej VRŤO",
		"Fotogaléria" 						=>	"Rôzny autori",
		"ostatne->Vsetky-otazky"			=>	"Ing. Ondrej VRŤO",
		"ostatne->vyhladavanie"				=>	"Ing. Ondrej VRŤO",

		"farnost"							=>	"p. Dekan Sabol",
		"farnost->liturgicke-oznamy"		=>	"p. Dekan Sabol",
		"farnost->rozpisy-lektorov-detva"	=>	"Ing. Ondrej VRŤO",
		"farnost->svate-omse-farnosti-detva"=>	"p. Dekan Sabol",
		"farnost->historia-kostola"			=>	"Mgr. Anička BARTKOVÁ",
		"farnost->zaujimavosti-kostola"		=>	"Mgr. Anička BARTKOVÁ",
		"farnost->dolezite-osobnosti"		=>	"Mgr. Anička BARTKOVÁ",
		"farnost->svety-frantisek"			=>	"p. Dekan Sabol",
		"farnost->statistiky"				=>	"p. Dekan Sabol",
		"farnost->vianoce-v-detve"			=>	"Ing. Ondrej VRŤO",
		"farnost->farska-charita"			=>	"p. Dekan Sabol",
		"farnost->farska-kniznica"			=>	"Milka Žubrietovsk8",
		"farnost->knazi-vo-farnosti"		=>	"p. Dekan Sabol",
		"farnost->knazi-z-nasho-kraja"		=>	"p. Dekan Sabol",
		"farnost->kontakt-farsky-urad"		=>	"p. Dekan Sabol",

		"liturgia"							=>	"Rôzny autori",
		"liturgia->sviatost-krstu"			=>	"p. Dekan Sabol",
		"liturgia->svate-prijimanie"		=>	"p. Dekan Sabol",
		"liturgia->birmovanie"				=>	"p. Dekan Sabol",
		"liturgia->spovedanie"				=>	"p. Dekan Sabol",
		"liturgia->pomazanie-chorych"		=>	"p. Dekan Sabol",
		"liturgia->vysviacka"				=>	"p. Dekan Sabol",
		"liturgia->sobas"					=>	"p. Dekan Sabol",
		"liturgia->pohreb"					=>	"p. Dekan Sabol",
		"liturgia->pozehnavanie-pribitkov"	=>	"p. Dekan Sabol",
		"liturgia->pozehnavanie-predmetov"	=>	"p. Dekan Sabol",
		"liturgia->poboznosti-a-adoracie"	=>	"p. Dekan Sabol",
		"liturgia->zivotopisy-svatych"		=>	"p. Dekan Sabol",
		"liturgia->zaujimave-kazne-a-uvahy"	=>	"p. Dekan Sabol",
		"liturgia->odkazy-zaujimave-stranky"=>	"p. Dekan Sabol",
		"liturgia->zakl-vedomosti-krestana"	=>	"p. Dekan Sabol",
		"liturgia->kodex-kanonickeho-prava"	=>	"p. Dekan Sabol",
		
		"dekanat"							=>	"Ing. Ondrej VRŤO",
		"dekanat->schematizmus"				=>	"Ing. Ondrej VRŤO",
		"dekanat->klastor-karmelu-detva"	=>	"Mgr. Anička BARTKOVÁ",
		"dekanat->rad-bratov-kapucinov"		=>	"Mgr. Anička BARTKOVÁ",
		"dekanat->svate-omse-v-okoli"		=>	"p. Dekan Sabol",
		"dekanat->kam-vo-farnosti"			=>	"Ing. Ondrej VRŤO",
		"dekanat->podpolianske-krize"		=>	"Mgr. Anička BARTKOVÁ",
		"dekanat->kontakt-dekanskeho-uradu"	=>	"p. Dekan Sabol",		
	),	// "Autor"
	
	// Informácia pre vyhľadávacie roboty -> GooogleBoot - indexovať túto stránku alebo nie?
	"Nastavenie Robots Index" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	true,
		"ostatne->vyhladavanie"				=>	false,

		"farnost"							=>	true,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->rozpisy-lektorov-detva"	=>	true,
		"farnost->svate-omse-farnosti-detva"=>	true,
		"farnost->historia-kostola"			=>	true,
		"farnost->zaujimavosti-kostola"		=>	true,
		"farnost->dolezite-osobnosti"		=>	true,
		"farnost->svety-frantisek"			=>	true,
		"farnost->statistiky"				=>	true,
		"farnost->vianoce-v-detve"			=>	true,
		"farnost->farska-charita"			=>	true,
		"farnost->farska-kniznica"			=>	true,
		"farnost->knazi-vo-farnosti"		=>	true,
		"farnost->knazi-z-nasho-kraja"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,

		"liturgia"							=>	true,
		"liturgia->sviatost-krstu"			=>	true,
		"liturgia->svate-prijimanie"		=>	true,
		"liturgia->birmovanie"				=>	true,
		"liturgia->spovedanie"				=>	true,
		"liturgia->pomazanie-chorych"		=>	true,
		"liturgia->vysviacka"				=>	true,
		"liturgia->sobas"					=>	true,
		"liturgia->pohreb"					=>	true,
		"liturgia->pozehnavanie-pribitkov"	=>	true,
		"liturgia->pozehnavanie-predmetov"	=>	true,
		"liturgia->poboznosti-a-adoracie"	=>	true,
		"liturgia->zivotopisy-svatych"		=>	true,
		"liturgia->zaujimave-kazne-a-uvahy"	=>	true,
		"liturgia->odkazy-zaujimave-stranky"=>	true,
		"liturgia->zakl-vedomosti-krestana"	=>	true,
		"liturgia->kodex-kanonickeho-prava"	=>	true,

		"dekanat"							=>	true,
		"dekanat->schematizmus"				=>	true,
		"dekanat->klastor-karmelu-detva"	=>	true,
		"dekanat->rad-bratov-kapucinov"		=>	true,
		"dekanat->svate-omse-v-okoli"		=>	true,
		"dekanat->kam-vo-farnosti"			=>	true,
		"dekanat->podpolianske-krize"		=>	true,
		"dekanat->kontakt-dekanskeho-uradu"	=>	true,		
	),	// "Nastavenie Robots Index"

	// Informácia pre vyhľadávacie roboty -> GooogleBoot - nasledovať linky na tejto stránke alebo nie?
	"Nastavenie Robots Folow" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	true,
		"ostatne->vyhladavanie"				=>	false,

		"farnost"							=>	true,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->rozpisy-lektorov-detva"	=>	true,
		"farnost->svate-omse-farnosti-detva"=>	true,
		"farnost->historia-kostola"			=>	true,
		"farnost->zaujimavosti-kostola"		=>	true,
		"farnost->dolezite-osobnosti"		=>	true,
		"farnost->svety-frantisek"			=>	true,
		"farnost->statistiky"				=>	true,
		"farnost->vianoce-v-detve"			=>	true,
		"farnost->farska-charita"			=>	true,
		"farnost->farska-kniznica"			=>	true,
		"farnost->knazi-vo-farnosti"		=>	true,
		"farnost->knazi-z-nasho-kraja"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,

		"liturgia"							=>	true,
		"liturgia->sviatost-krstu"			=>	true,
		"liturgia->svate-prijimanie"		=>	true,
		"liturgia->birmovanie"				=>	true,
		"liturgia->spovedanie"				=>	true,
		"liturgia->pomazanie-chorych"		=>	true,
		"liturgia->vysviacka"				=>	true,
		"liturgia->sobas"					=>	true,
		"liturgia->pohreb"					=>	true,
		"liturgia->pozehnavanie-pribitkov"	=>	true,
		"liturgia->pozehnavanie-predmetov"	=>	true,
		"liturgia->poboznosti-a-adoracie"	=>	true,
		"liturgia->zivotopisy-svatych"		=>	true,
		"liturgia->zaujimave-kazne-a-uvahy"	=>	true,
		"liturgia->odkazy-zaujimave-stranky"=>	true,
		"liturgia->zakl-vedomosti-krestana"	=>	true,
		"liturgia->kodex-kanonickeho-prava"	=>	true,

		"dekanat"							=>	true,
		"dekanat->schematizmus"				=>	true,
		"dekanat->klastor-karmelu-detva"	=>	true,
		"dekanat->rad-bratov-kapucinov"		=>	true,
		"dekanat->svate-omse-v-okoli"		=>	true,
		"dekanat->kam-vo-farnosti"			=>	true,
		"dekanat->podpolianske-krize"		=>	true,
		"dekanat->kontakt-dekanskeho-uradu"	=>	true,
	),	// "Nastavenie Robots Folow"

	// Doplnok "Vedeli ste že ..." ->  true - nastaví zobrazenie, false - nastaví NEzobrazovať 
	//	  Do poľa pod caruselom sa načítava náhodná zaujímavosť z poľa v súbore:  vedeli-ste-ze-zoznam.php
	"Vedeli Ste Ze" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	false,
		"ostatne->vyhladavanie"				=>	false,

		"farnost"							=>	false,
		"farnost->liturgicke-oznamy"		=>	true,
		"farnost->rozpisy-lektorov-detva"	=>	true,
		"farnost->svate-omse-farnosti-detva"=>	true,
		"farnost->historia-kostola"			=>	true,
		"farnost->zaujimavosti-kostola"		=>	true,
		"farnost->dolezite-osobnosti"		=>	true,
		"farnost->svety-frantisek"			=>	true,
		"farnost->statistiky"				=>	true,
		"farnost->vianoce-v-detve"			=>	true,
		"farnost->farska-charita"			=>	true,
		"farnost->farska-kniznica"			=>	true,
		"farnost->knazi-vo-farnosti"		=>	true,
		"farnost->knazi-z-nasho-kraja"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,

		"liturgia"							=>	false,
		"liturgia->sviatost-krstu"			=>	true,
		"liturgia->svate-prijimanie"		=>	true,
		"liturgia->birmovanie"				=>	true,
		"liturgia->spovedanie"				=>	true,
		"liturgia->pomazanie-chorych"		=>	true,
		"liturgia->vysviacka"				=>	true,
		"liturgia->sobas"					=>	true,
		"liturgia->pohreb"					=>	true,
		"liturgia->pozehnavanie-pribitkov"	=>	true,
		"liturgia->pozehnavanie-predmetov"	=>	true,
		"liturgia->poboznosti-a-adoracie"	=>	true,
		"liturgia->zivotopisy-svatych"		=>	true,
		"liturgia->zaujimave-kazne-a-uvahy"	=>	true,
		"liturgia->odkazy-zaujimave-stranky"=>	true,
		"liturgia->zakl-vedomosti-krestana"	=>	true,
		"liturgia->kodex-kanonickeho-prava"	=>	true,

		"dekanat"							=>	false,
		"dekanat->schematizmus"				=>	true,
		"dekanat->klastor-karmelu-detva"	=>	true,
		"dekanat->rad-bratov-kapucinov"		=>	true,
		"dekanat->svate-omse-v-okoli"		=>	true,
		"dekanat->kam-vo-farnosti"			=>	true,
		"dekanat->podpolianske-krize"		=>	true,
		"dekanat->kontakt-dekanskeho-uradu"	=>	true,
	),	// "Vedeli Ste Ze"

	// Doplnok "Často kladené otázky" ->  true - nastaví zobrazenie Doplnku, false - nastaví NEzobrazovať doplnok
	//	  Do poľa na spodku stránky sa načítavajú otázky z poľa v súbore:   casto-kladene-otazky-zoznam.php
	"Často kladené otázky" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	true,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	false,
		"ostatne->vyhladavanie"				=>	false,

		"farnost"							=>	false,		
		"farnost->liturgicke-oznamy"		=>	'Liturgia',
		"farnost->rozpisy-lektorov-detva"	=>	true,
		"farnost->svate-omse-farnosti-detva"=>	true,
		"farnost->historia-kostola"			=>	array( array("Liturgia", 9),
													   array("Svadba", 3)),
		"farnost->zaujimavosti-kostola"		=>	true,
		"farnost->dolezite-osobnosti"		=>	true,
		"farnost->svety-frantisek"			=>	true,
		"farnost->statistiky"				=>	true,
		"farnost->vianoce-v-detve"			=>	true,
		"farnost->farska-charita"			=>	true,
		"farnost->farska-kniznica"			=>	true,
		"farnost->knazi-vo-farnosti"		=>	true,
		"farnost->knazi-z-nasho-kraja"		=>	true,
		"farnost->kontakt-farsky-urad"		=>	true,

		"liturgia"							=>	false,
		"liturgia->sviatost-krstu"			=>	true,
		"liturgia->svate-prijimanie"		=>	true,
		"liturgia->birmovanie"				=>	true,
		"liturgia->spovedanie"				=>	true,
		"liturgia->pomazanie-chorych"		=>	true,
		"liturgia->vysviacka"				=>	true,
		"liturgia->sobas"					=>	true,
		"liturgia->pohreb"					=>	true,
		"liturgia->pozehnavanie-pribitkov"	=>	true,
		"liturgia->pozehnavanie-predmetov"	=>	true,
		"liturgia->poboznosti-a-adoracie"	=>	true,
		"liturgia->zivotopisy-svatych"		=>	true,
		"liturgia->zaujimave-kazne-a-uvahy"	=>	true,
		"liturgia->odkazy-zaujimave-stranky"=>	true,
		"liturgia->zakl-vedomosti-krestana"	=>	true,
		"liturgia->kodex-kanonickeho-prava"	=>	true,

		"dekanat"							=>	false,
		"dekanat->schematizmus"				=>	true,
		"dekanat->klastor-karmelu-detva"	=>	true,
		"dekanat->rad-bratov-kapucinov"		=>	true,
		"dekanat->svate-omse-v-okoli"		=>	true,
		"dekanat->kam-vo-farnosti"			=>	true,
		"dekanat->podpolianske-krize"		=>	true,
		"dekanat->kontakt-dekanskeho-uradu"	=>	true,
	),	// "Často kladené otázky"

	// Carusel  ->  pozri aj excelovú tabuľku
		// false -> nastaví NEzobrazovať Carousel
		// 'JedenNahodnyObrazok' -> vyberie jeden náhodný obrázok z adresára /Data/Carousel a nebude aktivovaný Java skript. Pri obnovení stránky sa obrázok zmení
		// 'standard' 			 -> nastaví štandardné pole obrázkov nastavené v premennej $StandardnyCarousel na vrchu tohoto súboru
		// array('028', '029')   -> Individuálne pole obrázkov pre danú stránku + automatický pohyb
	"Carusel" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	'JedenNahodnyObrazok',
		"Hlavná Stránka" 					=>	'JedenNahodnyObrazok',
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	array('028', '029', '030', '031', '032', '033', '034'),
		"ostatne->vyhladavanie"				=>	false,

		"farnost"							=>	'standard',
		"farnost->liturgicke-oznamy"		=>	'standard',
		"farnost->rozpisy-lektorov-detva"	=>	'standard',
		"farnost->svate-omse-farnosti-detva"=>	'standard',
		"farnost->historia-kostola"			=>	'standard',
		"farnost->zaujimavosti-kostola"		=>	'standard',
		"farnost->dolezite-osobnosti"		=>	'standard',
		"farnost->svety-frantisek"			=>	'standard',
		"farnost->statistiky"				=>	'standard',
		"farnost->vianoce-v-detve"			=>	'standard',
		"farnost->farska-charita"			=>	'standard',
		"farnost->farska-kniznica"			=>	'standard',
		"farnost->knazi-vo-farnosti"		=>	'standard',
		"farnost->knazi-z-nasho-kraja"		=>	'standard',
		"farnost->kontakt-farsky-urad"		=>	'standard',

		"liturgia"							=>	array('043', '044'),
		"liturgia->sviatost-krstu"			=>	'standard',
		"liturgia->svate-prijimanie"		=>	'standard',
		"liturgia->birmovanie"				=>	'standard',
		"liturgia->spovedanie"				=>	'standard',
		"liturgia->pomazanie-chorych"		=>	'standard',
		"liturgia->vysviacka"				=>	'standard',
		"liturgia->sobas"					=>	'standard',
		"liturgia->pohreb"					=>	'standard',
		"liturgia->pozehnavanie-pribitkov"	=>	'standard',
		"liturgia->pozehnavanie-predmetov"	=>	'standard',
		"liturgia->poboznosti-a-adoracie"	=>	'standard',
		"liturgia->zivotopisy-svatych"		=>	'standard',
		"liturgia->zaujimave-kazne-a-uvahy"	=>	'standard',
		"liturgia->odkazy-zaujimave-stranky"=>	'standard',
		"liturgia->zakl-vedomosti-krestana"	=>	'standard',
		"liturgia->kodex-kanonickeho-prava"	=>	'standard',

		"dekanat"							=>	'standard',
		"dekanat->schematizmus"				=>	'standard',
		"dekanat->klastor-karmelu-detva"	=>	'standard',
		"dekanat->rad-bratov-kapucinov"		=>	'standard',
		"dekanat->svate-omse-v-okoli"		=>	'standard',
		"dekanat->kam-vo-farnosti"			=>	'standard',
		"dekanat->podpolianske-krize"		=>	'standard',
		"dekanat->kontakt-dekanskeho-uradu"	=>	'standard',
	),	// "Carusel"
	
	// Pravý panel ->  určuje celkový počet otázok na stránke Trvalé + Náhodné
	"Pravý Panel Zloženie" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	'standard',
		"Hlavná Stránka" 					=>	'standard',
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	'standard',
		"ostatne->vyhladavanie"				=>	false,
		
		"farnost"							=>	'standard',
		"farnost->liturgicke-oznamy"		=>	array( array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Menu'),
													   array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Linky'),
													   array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
													   array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')),
		"farnost->rozpisy-lektorov-detva"	=>	'standard',
		"farnost->svate-omse-farnosti-detva"=>	'standard',
		"farnost->historia-kostola"			=>	'standard',
		"farnost->zaujimavosti-kostola"		=>	'standard',
		"farnost->dolezite-osobnosti"		=>	'standard',
		"farnost->svety-frantisek"			=>	false,
		"farnost->statistiky"				=>	'standard',
		"farnost->vianoce-v-detve"			=>	'standard',
		"farnost->farska-charita"			=>	'standard',
		"farnost->farska-kniznica"			=>	'standard',
		"farnost->knazi-vo-farnosti"		=>	'standard',
		"farnost->knazi-z-nasho-kraja"		=>	'standard',
		"farnost->kontakt-farsky-urad"		=>	'standard',

		"liturgia"							=>	'standard',
		"liturgia->sviatost-krstu"			=>	'standard',
		"liturgia->svate-prijimanie"		=>	'standard',
		"liturgia->birmovanie"				=>	'standard',
		"liturgia->spovedanie"				=>	'standard',
		"liturgia->pomazanie-chorych"		=>	'standard',
		"liturgia->vysviacka"				=>	'standard',
		"liturgia->sobas"					=>	'standard',
		"liturgia->pohreb"					=>	'standard',
		"liturgia->pozehnavanie-pribitkov"	=>	'standard',
		"liturgia->pozehnavanie-predmetov"	=>	'standard',
		"liturgia->poboznosti-a-adoracie"	=>	'standard',
		"liturgia->zivotopisy-svatych"		=>	'standard',
		"liturgia->zaujimave-kazne-a-uvahy"	=>	'standard',
		"liturgia->odkazy-zaujimave-stranky"=>	'standard',
		"liturgia->zakl-vedomosti-krestana"	=>	'standard',
		"liturgia->kodex-kanonickeho-prava"	=>	'standard',
		
		"dekanat"							=>	'standard',
		"dekanat->schematizmus"				=>	'standard',
		"dekanat->klastor-karmelu-detva"	=>	'standard',
		"dekanat->rad-bratov-kapucinov"		=>	'standard',
		"dekanat->svate-omse-v-okoli"		=>	'standard',
		"dekanat->kam-vo-farnosti"			=>	'standard',
		"dekanat->podpolianske-krize"		=>	'standard',
		"dekanat->kontakt-dekanskeho-uradu"	=>	'standard',
	),	// "Pravý Panel Zloženie"

	// Bublinkové menu ->  určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	"Bublinkové Menu" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	false,
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	true, // pri fotogalériách sa vkladá separátny kód
		"ostatne->Vsetky-otazky"			=>	false,
		"ostatne->vyhladavanie"				=>	false,

		"farnost"							=>	array ( array("", "Farnosť")),
		"farnost->liturgicke-oznamy"		=>	array ( array("/farnost", "Farnosť"),
													    array("", "Litgurgické oznamy")),
		"farnost->rozpisy-lektorov-detva"	=>	array ( array("/farnost", "Farnosť"),
													    array("", "Rozpisy lektorov")),
		"farnost->svate-omse-farnosti-detva"=>	array ( array("/farnost", "Farnosť"),
													    array("", "Omše vo farnosti")),
		"farnost->historia-kostola"			=>	array ( array("/farnost", "Farnosť"),
													    array("", "História kostola sv. Frantiska v Detve")),
		"farnost->zaujimavosti-kostola"		=>	array ( array("/farnost", "Farnosť"),
													    array("", "Zaujímavosti nášho kostola")),
		"farnost->dolezite-osobnosti"		=>	array ( array("/farnost", "Farnosť"),
													    array("", "Dôležité osobnosti farnosti")),
		"farnost->svety-frantisek"			=>	array ( array("/farnost", "Farnosť"),
													    array("", "sv. František - patrón našej farnosti")),
		"farnost->statistiky"				=>	array ( array("/farnost", "Farnosť"),
													    array("", "Štatistiky")),
		"farnost->vianoce-v-detve"			=>	array ( array("/farnost", "Farnosť"),
													    array("", "Vianoce v Detve")),
		"farnost->farska-charita"			=>	array ( array("/farnost", "Farnosť"),
													    array("", "Farská charita")),
		"farnost->farska-kniznica"			=>	array ( array("/farnost", "Farnosť"),
													    array("", "Farská knižnica")),
		"farnost->knazi-vo-farnosti"		=>	array ( array("/farnost", "Farnosť"),
													    array("", "Kňazi pôsobiaci vo farnosti Detva")),
		"farnost->knazi-z-nasho-kraja"		=>	array ( array("/farnost", "Farnosť"),
													    array("", "Kňazi z nášho kraja")),
		"farnost->kontakt-farsky-urad"		=>	array ( array("/farnost", "Farnosť"),
													    array("", "Kontakt na farský úrad Detva")),


		"liturgia"							=>	array ( array("", "Liturgia")),
		"liturgia->sviatost-krstu"			=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Sviatosť krstu")),
		"liturgia->svate-prijimanie"		=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Sväté prijímanie")),
		"liturgia->birmovanie"				=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Birmovanie")),
		"liturgia->spovedanie"				=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Spovedanie")),
		"liturgia->pomazanie-chorych"		=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Pomazanie chorých")),
		"liturgia->vysviacka"				=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Vysviacka")),
		"liturgia->sobas"					=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Sobáš")),
		"liturgia->pohreb"					=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Pohreb")),
		"liturgia->pozehnavanie-pribitkov"	=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Požehnávanie príbytkov")),
		"liturgia->pozehnavanie-predmetov"	=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Požehnávanie predmetov")),
		"liturgia->poboznosti-a-adoracie"	=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Pobožnosti a adorácie")),
		"liturgia->zivotopisy-svatych"		=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Životopisy svätých")),
		"liturgia->zaujimave-kazne-a-uvahy"	=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Zaujímavé kázne a úvahy")),
		"liturgia->odkazy-zaujimave-stranky"=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Odkazy na zaujímavé stránky")),
		"liturgia->zakl-vedomosti-krestana"	=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Základné vedomosti kresťana")),
		"liturgia->kodex-kanonickeho-prava"	=>	array (	array("/liturgia", "Liturgia"),
													    array("", "Kódex kánonického práva")),

											
		"dekanat"							=>	array ( array("", "Dekanát")),
		"dekanat->schematizmus"				=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Schématizmus dekanátu Detva")),
		"dekanat->klastor-karmelu-detva"	=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Kláštor Kráľovnej Karmelu")),
		"dekanat->rad-bratov-kapucinov"		=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Rád Menších bratov kapucínov")),
		"dekanat->svate-omse-v-okoli"		=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Sväté omše v okolí")),
		"dekanat->kam-vo-farnosti"			=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Kam vo farnosti ?")),
		"dekanat->podpolianske-krize"		=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Podpolianske vyrezávané kríže")),
		"dekanat->kontakt-dekanskeho-uradu"	=>	array ( array("/dekanat/", "Dekanát"),
													    array("", "Kontakt dekanského úradu")),													
	),	// "Bublinkové Menu"	
);

	
	
	
// Naplnenie konštánt pre konkrétnu stránku z poľa:  $konstantyStranok
// ak na stránke nieje premenná ktorá označuje o akú stránku ide
// alebo v poli $konstantyStranok chýba hodnota prislúchajúca stránke, nastavia sa štandardné hodnoty

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
	} else {$vedeliSteZeOFF = false;}

	// určuje či sa zobrazí na spodku stránku Doplnok "Často kladené otázky"
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Často kladené otázky"])) { 
			$otazkyOFF = $konstantyStranok["Často kladené otázky"][$nazovVolajucejStranky];
	} else {$otazkyOFF = false;}

	// Pravý panel
	if (array_key_exists($nazovVolajucejStranky, $konstantyStranok["Pravý Panel Zloženie"])) { 
			$PravyPanelZlozenie = $konstantyStranok["Pravý Panel Zloženie"][$nazovVolajucejStranky];
	} else {$PravyPanelZlozenie = "standard";}
?>