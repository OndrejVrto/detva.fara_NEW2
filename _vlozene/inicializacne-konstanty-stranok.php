<?php

// Inicializačné konštanty každej stránky: detva.fara.sk

// Konštanty spoločné

	// Carousel -> zoznam obrázkov ak je zvolená možnosť 'standard'
	$StandardnyCarousel = array('057', '056', '054', '051', '042', '048', '035', '036', '038', '040', '055'); 

	// Right panel -> Štandardné zloženie pri vo2be 'standard'
	$PravyPanelStandard = array(
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Vyvoj'),	
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Myslienka'),	
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
		$radenie_albumov = "A-Z";						// radenie od A-Z alebo Z-A
		
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



// MENU hlavné a zoznam linik do stránok jednotlivých sekcií
$menuHlavne = array (
	"Farnosť" => array (
		1	=> array ("farnost"								,"text-success"		,"/"														,"Aktuality"),
		2	=> array ("farnost->liturgicke-oznamy"			,""					,"/farnost/liturgicke-oznamy-farnosti-detva"				,"Liturgické oznamy"),
		3	=> array ("farnost->rozpisy-lektorov-detva"		,"bg-warning"		,"/farnost/rozpisy-lektorov-detva"							,"Rozpisy lektorov"),
		4	=> array ("farnost->svate-omse-farnosti-detva"	,"text-danger"		,"/farnost/svate-omse-vo-farnosti-detva"					,"Omše vo farnosti"),
		5	=> "separator",
		6	=> array ("farnost->historia-kostola"			,""					,"/farnost/historia-kostola-sv-frantiska-v-detve"			,"História kostola"),
		7	=> array ("farnost->zaujimavosti-kostola"		,"text-danger"		,"/farnost/zaujimavosti-nasho-kostola"						,"Zaujímavosti nášho kostola"),
		8	=> array ("farnost->dolezite-osobnosti"			,"text-danger"		,"/farnost/dolezite-osobnosti-farnosti"						,"Dôležité osobnosti farnosti"),
		9	=> array ("farnost->svety-frantisek"			,""					,"/farnost/svety-frantisek-z-assisi-patron-farnosti-detva"	,"Patrón farnosti"),
		10	=> array ("farnost->statistiky"					,"text-danger"		,"/farnost/statistiky-a-ine-zaujimave-cisla"				,"Štatistiky"),
		11	=> array ("farnost->vianoce-v-detve"			,"text-danger"		,"/farnost/vianoce-v-detve"									,"Vianoce v Detve"),
		12	=> "separator",
		13	=> array ("farnost->farska-charita"				,"text-danger"		,"/farnost/farska-charita"									,"Farská charita"),
		14	=> array ("farnost->farska-kniznica"			,"text-danger"		,"/farnost/farska-kniznica"									,"Farská knižnica"),
		15	=> "separator",
		16	=> array ("farnost->knazi-vo-farnosti"			,""					,"/farnost/knazi-posobiaci-vo-farnosti-detva"				,"Kňazi pôsobiaci vo farnosti"),
		17	=> array ("farnost->knazi-z-nasho-kraja"		,"text-danger"		,"/farnost/knazi-pochadzajuci-z-nasho-kraja"				,"Kňazi pochádzajúci z farnosti"),
		18	=> "separator",
		19	=> array ("farnost->kontakt-farsky-urad"		,""					,"/farnost/kontakt-farsky-urad-detva"						,"Kontakt"),
	),                                                            

	"Spoločenstvá" => array (
		1	=> array ("spolocenstva->zbor-hosanna"			,"text-danger"		,"/spolocenstva/mladeznicky-zbor-hosanna" 		,"Mládežnícky zbor Hosanna"),
		2	=> array ("spolocenstva->detsky-spevokol"		,"text-danger"		,"/spolocenstva/detsky-spevokol-srdiecko" 		,"Detský spevokol Srdiečko"),
		3	=> array ("spolocenstva->divadlo-frantisek"		,"text-danger"		,"/spolocenstva/ochotnicke-divadlo-frantisek" 	,"Ochotnícke divadlo František"),
		4	=> array ("spolocenstva->dychova-hudba"			,"text-danger"		,"/spolocenstva/dychova-hudba" 					,"Dychová hudba"),
		5	=> "separator",
		6	=> array ("spolocenstva->lektori"				,"text-danger"		,"/spolocenstva/lektori" 						,"Lektori"),
		7	=> array ("spolocenstva->ministranti"			,"text-danger"		,"/spolocenstva/ministranti" 					,"Miništranti"),
		8	=> array ("spolocenstva->akolyti"				,"text-danger"		,"/spolocenstva/akolyti" 						,"Akolyti"),
		9	=> array ("spolocenstva->kostolnici"			,"text-danger"		,"/spolocenstva/kostolnici" 					,"Kostolníci"),
		10	=> array ("spolocenstva->organisti-farnosti"	,"text-danger"		,"/spolocenstva/organisti-farnosti" 			,"Organisti farnosti"),
		11	=> "separator",
		12	=> array ("spolocenstva->faustinum"				,"text-danger"		,"/spolocenstva/faustinum" 						,"Faustínum"),
		13	=> array ("spolocenstva->ruzencove-spolocen"	,"text-danger"		,"/spolocenstva/ruzencove-spolocenstva" 		,"Ružencové spoločenstvá"),
		14	=> array ("spolocenstva->biblicke-stretka"		,"text-danger"		,"/spolocenstva/biblicke-stretka" 				,"Biblické stretká"),
		15	=> array ("spolocenstva->erko"					,"text-danger"		,"/spolocenstva/erko" 							,"eRko"),
		16	=> "separator",
		17	=> array ("spolocenstva->farska-rada"			,"text-danger"		,"/spolocenstva/farska-rada" 					,"Farská rada"),
		18	=> array ("spolocenstva->katecheti-animatori"	,"text-danger"		,"/spolocenstva/katecheti-a-animatori" 			,"Katechéti a animátori"),
		19	=> array ("spolocenstva->zivot-vo-farnosti"		,"text-danger"		,"/spolocenstva/zivot-vo-farnosti" 				,"Život vo farnosti"),
	),

	"Liturgia" => array (
		1	=> array ("liturgia->sviatost-krstu"			,"text-warning"		,"/liturgia/sviatost-krstu" 			 	,"Sviatosť krstu"),
		2	=> array ("liturgia->svate-prijimanie"			,"text-danger"		,"/liturgia/svate-prijimanie" 			 	,"Sväté prijímanie"),
		3	=> array ("liturgia->birmovanie"				,"text-danger"		,"/liturgia/birmovanie" 				 	,"Birmovanie"),
		4	=> array ("liturgia->spovedanie"				,"text-danger"		,"/liturgia/spovedanie" 				 	,"Spovedanie"),
		5	=> array ("liturgia->pomazanie-chorych"			,"text-danger"		,"/liturgia/pomazanie-chorych"			 	,"Pomazanie chorých"),
		6	=> array ("liturgia->vysviacka"					,"text-danger"		,"/liturgia/vysviacka" 					 	,"Vysviacka"),
		7	=> array ("liturgia->sobas"						,"text-danger"		,"/liturgia/sobas" 						 	,"Sobáš"),
		8	=> "separator",
		9	=> array ("liturgia->pohreb"					,"text-danger"		,"/liturgia/pohreb" 					 	,"Pohreb"),
		10	=> array ("liturgia->pozehnavanie-pribitkov"	,"text-danger"		,"/liturgia/pozehnavanie-pribitkov" 	 	,"Požehnávanie príbytkov"),
		11	=> array ("liturgia->pozehnavanie-predmetov"	,"text-danger"		,"/liturgia/pozehnavanie-predmetov" 	 	,"Požehnávanie predmetov"),
		12	=> array ("liturgia->poboznosti-a-adoracie"		,"text-danger"		,"/liturgia/poboznosti-a-adoracie" 		 	,"Pobožnosti a adorácie"),
		13	=> "separator",
		14	=> array ("liturgia->zivotopisy-svatych"		,"text-danger"		,"/liturgia/zivotopisy-svatych" 		 	,"Životopisy svätých"),
		15	=> array ("liturgia->zaujimave-kazne-a-uvahy"	,"text-danger"		,"/liturgia/zaujimave-kazne-a-uvahy" 	 	,"Zaujímavé kázne a úvahy"),
		16	=> array ("liturgia->odkazy-zaujimave-stranky"	,"text-danger"		,"/liturgia/odkazy-na-zaujimave-stranky" 	,"Odkazy na zaujímavé stránky"),
		17	=> "separator",
		18	=> array ("liturgia->zakl-vedomosti-krestana"	,"text-danger"		,"/liturgia/zakladne-vedomosti-krestana" 	,"Základné vedomosti kresťana"),
		19	=> array ("liturgia->kodex-kanonickeho-prava"	,"text-danger"		,"/liturgia/kodex-kanonickeho-prava" 	 	,"Kódex kánonického práva"),
	),

	"Dekanát" => array (
		1	=> array ("dekanat->schematizmus"				,"text-warning"		,"/dekanat/schematizmus-dekanatu-detva-zoznam-farnosti-a-knazov"	,"Mapa a zoznam farností"),
		2	=> array ("dekanat->klastor-karmelu-detva"		,"text-warning"		,"/dekanat/klastor-kralovnej-karmelu-v-detve" 						,"Kláštor Kráľovnej Karmelu"),
		3	=> array ("dekanat->rad-bratov-kapucinov"		,"text-danger"		,"/dekanat/rad-mensich-bratov-kapucinov" 							,"Rád Menších bratov Kapucínov"),
		4	=> "separator",
		5	=> array ("dekanat->svate-omse-v-okoli"			,"text-danger"		,"/dekanat/svate-omse-v-okoli" 										,"Sväté omše v okolí"),
		6	=> array ("dekanat->kam-vo-farnosti"			,"text-danger"		,"/dekanat/kam-vo-farnosti" 										,"Kam vo farnosti ?"),
		7	=> array ("dekanat->podpolianske-krize"			,"text-warning"		,"/dekanat/podpolianske-vyrezavane-krize" 							,"Podpolianske vyrezávané kríže"),
		8	=> "separator",
		9	=> array ("dekanat->kontakt-dekanskeho-uradu"	,"text-danger"		,"/dekanat/kontakt-dekanskeho-uradu" 								,"Kontakt dekanského úradu"),
	),	

	
	"Fotogaléria" => array (
		1	=> array (""	,"text-primary"	,"/fotogaleria/2007/1/" 						,"2007"),
		2	=> array (""	,"text-primary"	,"/fotogaleria/2008/1/" 						,"2008"),
		3	=> "separator",			
		4	=> array (""	,"text-primary"	,"/fotogaleria/2015/1/" 						,"2015"),
		5	=> array (""	,"text-primary"	,"/fotogaleria/2017/1/" 						,"2017"),
		6	=> array (""	,"text-primary"	,"/fotogaleria/starsie/1/" 						,"Staršie"),
		7	=> "separator",			
		8	=> array (""	,"text-success"	,"/fotogaleria/kostoly/1/" 						,"Kostoly"),
		9	=> array (""	,"text-success"	,"/fotogaleria/kaplnky/1/" 						,"Kaplnky"),
		10	=> array (""	,"text-danger"	,"/fotogaleria/detvianske-vyrezavane-krize/1/"	,"Detvianske vyrezávané kríže"),
	),	
);

// Konštanty stránok individuálne
$konstantyStranok = array(

	// Meta značka stránky - TITLE -> Zobrazuje sa ako názov okna.	
	"Titulok Stránky" => array(
		"Chybová 404" 						=>	"Farnosť Detva - chybová stránka",
		"Čistá" 							=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, na stránke sa pracuje",
		"Hlavná Stránka" 					=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"Fotogaléria" 						=>	"Farnosť Detva - fotogaléria",   // POZOR špeciálny kód pri fotogalérii
		"ostatne->Vsetky-otazky"			=>	"Farnosť Detva - zaujímavé otázky",
		"ostatne->vyhladavanie"				=>	"Farnosť Detva - Vyhľadávanie",
		"vzor"								=>	"Farnosť Detva - Vzorová stránka",
		
		"farnost"							=>	"Farnosť Detva - kam ďalej?",
		"farnost->liturgicke-oznamy"		=>	"Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy",
		"farnost->rozpisy-lektorov-detva"	=>	"Farnosť Detva - ",
		"farnost->svate-omse-farnosti-detva"=>	"Farnosť Detva - ",
		"farnost->historia-kostola"			=>	"Farnosť Detva - história kostola",		
		"farnost->zaujimavosti-kostola"		=>	"Farnosť Detva - ",
		"farnost->dolezite-osobnosti"		=>	"Farnosť Detva - ",
		"farnost->svety-frantisek"			=>	"Farnosť Detva - sv. František patrón farnosti",
		"farnost->statistiky"				=>	"Farnosť Detva - ",
		"farnost->vianoce-v-detve"			=>	"Farnosť Detva - ",
		"farnost->farska-charita"			=>	"Farnosť Detva - ",
		"farnost->farska-kniznica"			=>	"Farnosť Detva - ",
		"farnost->knazi-vo-farnosti"		=>	"Farnosť Detva - Aktuálne pôsobiaci kňazi vo farnosti",		
		"farnost->knazi-z-nasho-kraja"		=>	"Farnosť Detva - ",
		"farnost->kontakt-farsky-urad"		=>	"Farnosť Detva - kontakty farnosti",

		"liturgia"							=>	"Farnosť Detva - Liturgia, slávnosti a požehnania",
		"liturgia->sviatost-krstu"			=>	"Farnosť Detva - ",
		"liturgia->svate-prijimanie"		=>	"Farnosť Detva - ",
		"liturgia->birmovanie"				=>	"Farnosť Detva - ",
		"liturgia->spovedanie"				=>	"Farnosť Detva - ",
		"liturgia->pomazanie-chorych"		=>	"Farnosť Detva - ",
		"liturgia->vysviacka"				=>	"Farnosť Detva - ",
		"liturgia->sobas"					=>	"Farnosť Detva - ",
		"liturgia->pohreb"					=>	"Farnosť Detva - ",
		"liturgia->pozehnavanie-pribitkov"	=>	"Farnosť Detva - ",
		"liturgia->pozehnavanie-predmetov"	=>	"Farnosť Detva - ",
		"liturgia->poboznosti-a-adoracie"	=>	"Farnosť Detva - ",
		"liturgia->zivotopisy-svatych"		=>	"Farnosť Detva - ",
		"liturgia->zaujimave-kazne-a-uvahy"	=>	"Farnosť Detva - ",
		"liturgia->odkazy-zaujimave-stranky"=>	"Farnosť Detva - ",
		"liturgia->zakl-vedomosti-krestana"	=>	"Farnosť Detva - ",
		"liturgia->kodex-kanonickeho-prava"	=>	"Farnosť Detva - ",

		"spolocenstva"						=>	"Farnosť Detva - Spoločenstvá",		
		"spolocenstva->zbor-hosanna"		=>	"Farnosť Detva - Mládežnícky zbor Hosanna",
		"spolocenstva->detsky-spevokol"		=>	"Farnosť Detva - Detský spevokol Srdiečko",
		"spolocenstva->divadlo-frantisek"	=>	"Farnosť Detva - Ochotnícke divadlo František",
		"spolocenstva->dychova-hudba"		=>	"Farnosť Detva - Dychová hudba",
		"spolocenstva->lektori"				=>	"Farnosť Detva - Lektori",
		"spolocenstva->ministranti"			=>	"Farnosť Detva - Miništranti",
		"spolocenstva->akolyti"				=>	"Farnosť Detva - Akolyti",
		"spolocenstva->kostolnici"			=>	"Farnosť Detva - Kostolníci",
		"spolocenstva->organisti-farnosti"	=>	"Farnosť Detva - Organisti farnosti",
		"spolocenstva->faustinum"			=>	"Farnosť Detva - Faustínum",
		"spolocenstva->ruzencove-spolocen"	=>	"Farnosť Detva - Ružencové spoločenstvá",
		"spolocenstva->biblicke-stretka"	=>	"Farnosť Detva - Biblické stretká",
		"spolocenstva->erko"				=>	"Farnosť Detva - eRko",
		"spolocenstva->farska-rada"			=>	"Farnosť Detva - Farská rada",
		"spolocenstva->katecheti-animatori"	=>	"Farnosť Detva - Katechéti a animátori",
		"spolocenstva->zivot-vo-farnosti"	=>	"Farnosť Detva - Život vo farnosti",
	
		"dekanat"							=>	"Dekanát Detva - hlavná stránka",
		"dekanat->schematizmus"				=>	"Dekanát Detva - Schematizmus dekanátu",		
		"dekanat->klastor-karmelu-detva"	=>	"Dekanát Detva - Kláštor Kráľovnej Karmelu v Detve",
		"dekanat->rad-bratov-kapucinov"		=>	"Dekanát Detva - ",
		"dekanat->svate-omse-v-okoli"		=>	"Dekanát Detva - ",
		"dekanat->kam-vo-farnosti"			=>	"Dekanát Detva - ",
		"dekanat->podpolianske-krize"		=>	"Dekanát Detva - Podpolianske vyrezávané kríže",
		"dekanat->kontakt-dekanskeho-uradu"	=>	"Dekanát Detva - ",
	),	// "Titulok Stránky"

	// Meta značka stránky - description -> popisuje stránku
	"Popis Stránky" => array(
		"Chybová 404" 						=>	"Farnosť Detva - stránka chybová - Error 404",
		"Čistá" 							=>	"Farnosť Detva - čistá stránka, na ktorej nieje žiadny obsah. Zobrazuje sa pri neexistujúcom odkaze.",
		"Hlavná Stránka" 					=>	"Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy",
		"Fotogaléria" 						=>	"Farnosť Detva - fotogaléria, albumy, obrázky kostolov a kaplniek",
		"ostatne->Vsetky-otazky"			=>	"Farnosť Detva - zaujímavé otázky a odpovede na rôzne témy",
		"ostatne->vyhladavanie"				=>	"Farnosť Detva - vyhľadávanie na stránke",
		"vzor"								=>	"Farnosť Detva - vzorová stránka pre potreby vývoja",

		"farnost"							=>	"Krásna príroda, krásny kostol, krásne kríže, krásne kroje. Prídi sa presvedčiť aj sám.",
		"farnost->liturgicke-oznamy"		=>	"Farnosť Detva - aktuálne oznamy",
		"farnost->rozpisy-lektorov-detva"	=>	"3",
		"farnost->svate-omse-farnosti-detva"=>	"4",
		"farnost->historia-kostola"			=>	"Farnosť Detva - dejiny a história farského kostola v Detve",		
		"farnost->zaujimavosti-kostola"		=>	"5",
		"farnost->dolezite-osobnosti"		=>	"6",
		"farnost->svety-frantisek"			=>	"sv. František - patrón farnosti",
		"farnost->statistiky"				=>	"",
		"farnost->vianoce-v-detve"			=>	"",
		"farnost->farska-charita"			=>	"",
		"farnost->farska-kniznica"			=>	"",
		"farnost->knazi-vo-farnosti"		=>	"Kňazi aktuálne pôsobiaci vo farnosti Detva.",		
		"farnost->knazi-z-nasho-kraja"		=>	"",
		"farnost->kontakt-farsky-urad"		=>	"Farnosť Detva - kontakty, poloha v meste Detva, telefón, email, sms",

		"liturgia"							=>	"Prvé sväté príjimanie, sobáš, pohreb, birmovka alebo krst. Všetky informácie na jednom mieste",
		"liturgia->sviatost-krstu"			=>	"1",
		"liturgia->svate-prijimanie"		=>	"2",
		"liturgia->birmovanie"				=>	"3",
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

		"spolocenstva"						=>	"Spoločenstvá",		
		"spolocenstva->zbor-hosanna"		=>	"Mládežnícky zbor Hosanna",
		"spolocenstva->detsky-spevokol"		=>	"Detský spevokol Srdiečko",
		"spolocenstva->divadlo-frantisek"	=>	"Ochotnícke divadlo František",
		"spolocenstva->dychova-hudba"		=>	"Dychová hudba",
		"spolocenstva->lektori"				=>	"Lektori",
		"spolocenstva->ministranti"			=>	"Miništranti",
		"spolocenstva->akolyti"				=>	"Akolyti",
		"spolocenstva->kostolnici"			=>	"Kostolníci",
		"spolocenstva->organisti-farnosti"	=>	"Organisti farnosti",
		"spolocenstva->faustinum"			=>	"Faustínum",
		"spolocenstva->ruzencove-spolocen"	=>	"Ružencové spoločenstvá",
		"spolocenstva->biblicke-stretka"	=>	"Biblické stretká",
		"spolocenstva->erko"				=>	"eRko",
		"spolocenstva->farska-rada"			=>	"Farská rada",
		"spolocenstva->katecheti-animatori"	=>	"Katechéti a animátori",
		"spolocenstva->zivot-vo-farnosti"	=>	"Život vo farnosti",

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
		"ostatne->vyhladavanie"				=>	"Vyhľadávanie ...",
		"vzor"								=>	"Vzorová prázdna stránka",

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

		"spolocenstva"						=>	"Spoločenstvá",		
		"spolocenstva->zbor-hosanna"		=>	"Mládežnícky zbor Hosanna",
		"spolocenstva->detsky-spevokol"		=>	"Detský spevokol Srdiečko",
		"spolocenstva->divadlo-frantisek"	=>	"Ochotnícke divadlo František",
		"spolocenstva->dychova-hudba"		=>	"Dychová hudba",
		"spolocenstva->lektori"				=>	"Lektori",
		"spolocenstva->ministranti"			=>	"Miništranti",
		"spolocenstva->akolyti"				=>	"Akolyti",
		"spolocenstva->kostolnici"			=>	"Kostolníci",
		"spolocenstva->organisti-farnosti"	=>	"Organisti farnosti",
		"spolocenstva->faustinum"			=>	"Faustínum",
		"spolocenstva->ruzencove-spolocen"	=>	"Ružencové spoločenstvá",
		"spolocenstva->biblicke-stretka"	=>	"Biblické stretká",
		"spolocenstva->erko"				=>	"eRko",
		"spolocenstva->farska-rada"			=>	"Farská rada",
		"spolocenstva->katecheti-animatori"	=>	"Katechéti a animátori",
		"spolocenstva->zivot-vo-farnosti"	=>	"Život vo farnosti",

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
		"vzor"								=>	"Ing. Ondrej VRŤO",

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
		"farnost->farska-kniznica"			=>	"Milka Žubrietovská",
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

		"spolocenstva"						=>	"Rôzny autori",		
		"spolocenstva->zbor-hosanna"		=>	"Rôzny autori",
		"spolocenstva->detsky-spevokol"		=>	"Rôzny autori",
		"spolocenstva->divadlo-frantisek"	=>	"Rôzny autori",
		"spolocenstva->dychova-hudba"		=>	"Rôzny autori",
		"spolocenstva->lektori"				=>	"Rôzny autori",
		"spolocenstva->ministranti"			=>	"Rôzny autori",
		"spolocenstva->akolyti"				=>	"Rôzny autori",
		"spolocenstva->kostolnici"			=>	"Rôzny autori",
		"spolocenstva->organisti-farnosti"	=>	"Rôzny autori",
		"spolocenstva->faustinum"			=>	"Rôzny autori",
		"spolocenstva->ruzencove-spolocen"	=>	"Rôzny autori",
		"spolocenstva->biblicke-stretka"	=>	"Rôzny autori",
		"spolocenstva->erko"				=>	"Rôzny autori",
		"spolocenstva->farska-rada"			=>	"Rôzny autori",
		"spolocenstva->katecheti-animatori"	=>	"Rôzny autori",
		"spolocenstva->zivot-vo-farnosti"	=>	"Rôzny autori",

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
		"vzor"								=>	false,

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

		"spolocenstva"						=>	true,		
		"spolocenstva->zbor-hosanna"		=>	true,
		"spolocenstva->detsky-spevokol"		=>	true,
		"spolocenstva->divadlo-frantisek"	=>	true,
		"spolocenstva->dychova-hudba"		=>	true,
		"spolocenstva->lektori"				=>	true,
		"spolocenstva->ministranti"			=>	true,
		"spolocenstva->akolyti"				=>	true,
		"spolocenstva->kostolnici"			=>	true,
		"spolocenstva->organisti-farnosti"	=>	true,
		"spolocenstva->faustinum"			=>	true,
		"spolocenstva->ruzencove-spolocen"	=>	true,
		"spolocenstva->biblicke-stretka"	=>	true,
		"spolocenstva->erko"				=>	true,
		"spolocenstva->farska-rada"			=>	true,
		"spolocenstva->katecheti-animatori"	=>	true,
		"spolocenstva->zivot-vo-farnosti"	=>	true,
		
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
		"vzor"								=>	false,

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

		"spolocenstva"						=>	true,		
		"spolocenstva->zbor-hosanna"		=>	true,
		"spolocenstva->detsky-spevokol"		=>	true,
		"spolocenstva->divadlo-frantisek"	=>	true,
		"spolocenstva->dychova-hudba"		=>	true,
		"spolocenstva->lektori"				=>	true,
		"spolocenstva->ministranti"			=>	true,
		"spolocenstva->akolyti"				=>	true,
		"spolocenstva->kostolnici"			=>	true,
		"spolocenstva->organisti-farnosti"	=>	true,
		"spolocenstva->faustinum"			=>	true,
		"spolocenstva->ruzencove-spolocen"	=>	true,
		"spolocenstva->biblicke-stretka"	=>	true,
		"spolocenstva->erko"				=>	true,
		"spolocenstva->farska-rada"			=>	true,
		"spolocenstva->katecheti-animatori"	=>	true,
		"spolocenstva->zivot-vo-farnosti"	=>	true,
		
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
		"ostatne->Vsetky-otazky"			=>	true,
		"ostatne->vyhladavanie"				=>	false,
		"vzor"								=>	false,

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

		"spolocenstva"						=>	false,		
		"spolocenstva->zbor-hosanna"		=>	true,
		"spolocenstva->detsky-spevokol"		=>	true,
		"spolocenstva->divadlo-frantisek"	=>	true,
		"spolocenstva->dychova-hudba"		=>	true,
		"spolocenstva->lektori"				=>	true,
		"spolocenstva->ministranti"			=>	true,
		"spolocenstva->akolyti"				=>	true,
		"spolocenstva->kostolnici"			=>	true,
		"spolocenstva->organisti-farnosti"	=>	true,
		"spolocenstva->faustinum"			=>	true,
		"spolocenstva->ruzencove-spolocen"	=>	true,
		"spolocenstva->biblicke-stretka"	=>	true,
		"spolocenstva->erko"				=>	true,
		"spolocenstva->farska-rada"			=>	true,
		"spolocenstva->katecheti-animatori"	=>	true,
		"spolocenstva->zivot-vo-farnosti"	=>	true,
		
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
		"Hlavná Stránka" 					=>	false,
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	false,
		"ostatne->vyhladavanie"				=>	false,
		"vzor"								=>	false,

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

		"spolocenstva"						=>	false,		
		"spolocenstva->zbor-hosanna"		=>	true,
		"spolocenstva->detsky-spevokol"		=>	true,
		"spolocenstva->divadlo-frantisek"	=>	true,
		"spolocenstva->dychova-hudba"		=>	true,
		"spolocenstva->lektori"				=>	true,
		"spolocenstva->ministranti"			=>	true,
		"spolocenstva->akolyti"				=>	true,
		"spolocenstva->kostolnici"			=>	true,
		"spolocenstva->organisti-farnosti"	=>	true,
		"spolocenstva->faustinum"			=>	true,
		"spolocenstva->ruzencove-spolocen"	=>	true,
		"spolocenstva->biblicke-stretka"	=>	true,
		"spolocenstva->erko"				=>	true,
		"spolocenstva->farska-rada"			=>	true,
		"spolocenstva->katecheti-animatori"	=>	true,
		"spolocenstva->zivot-vo-farnosti"	=>	true,
		
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
		"ostatne->Vsetky-otazky"			=>	false,
		"ostatne->vyhladavanie"				=>	false,
		"vzor"								=>	'standard',

		"farnost"							=>	array('001',),
		"farnost->liturgicke-oznamy"		=>	array('002',),
		"farnost->rozpisy-lektorov-detva"	=>	array('003',),
		"farnost->svate-omse-farnosti-detva"=>	array('004',),
		"farnost->historia-kostola"			=>	array('005',),
		"farnost->zaujimavosti-kostola"		=>	array('006',),
		"farnost->dolezite-osobnosti"		=>	array('007',),
		"farnost->svety-frantisek"			=>	array('008',),
		"farnost->statistiky"				=>	array('009',),
		"farnost->vianoce-v-detve"			=>	array('010',),
		"farnost->farska-charita"			=>	array('011',),
		"farnost->farska-kniznica"			=>	array('012',),
		"farnost->knazi-vo-farnosti"		=>	array('013',),
		"farnost->knazi-z-nasho-kraja"		=>	array('014',),
		"farnost->kontakt-farsky-urad"		=>	array('015',),

		"liturgia"							=>	array('016',),
		"liturgia->sviatost-krstu"			=>	array('017',),
		"liturgia->svate-prijimanie"		=>	array('018',),
		"liturgia->birmovanie"				=>	array('019',),
		"liturgia->spovedanie"				=>	array('020',),
		"liturgia->pomazanie-chorych"		=>	array('021',),
		"liturgia->vysviacka"				=>	array('022',),
		"liturgia->sobas"					=>	array('023',),
		"liturgia->pohreb"					=>	array('024',),
		"liturgia->pozehnavanie-pribitkov"	=>	array('025',),
		"liturgia->pozehnavanie-predmetov"	=>	array('026',),
		"liturgia->poboznosti-a-adoracie"	=>	array('027',),
		"liturgia->zivotopisy-svatych"		=>	array('028',),
		"liturgia->zaujimave-kazne-a-uvahy"	=>	array('029',),
		"liturgia->odkazy-zaujimave-stranky"=>	array('030',),
		"liturgia->zakl-vedomosti-krestana"	=>	array('031',),
		"liturgia->kodex-kanonickeho-prava"	=>	array('032',),

		"spolocenstva"						=>	array('033',),		
		"spolocenstva->zbor-hosanna"		=>	array('034',),
		"spolocenstva->detsky-spevokol"		=>	array('035',),
		"spolocenstva->divadlo-frantisek"	=>	array('036',),
		"spolocenstva->dychova-hudba"		=>	array('037',),
		"spolocenstva->lektori"				=>	array('038',),
		"spolocenstva->ministranti"			=>	array('039',),
		"spolocenstva->akolyti"				=>	array('040',),
		"spolocenstva->kostolnici"			=>	array('041',),
		"spolocenstva->organisti-farnosti"	=>	array('042',),
		"spolocenstva->faustinum"			=>	array('043',),
		"spolocenstva->ruzencove-spolocen"	=>	array('044',),
		"spolocenstva->biblicke-stretka"	=>	array('045',),
		"spolocenstva->erko"				=>	array('046',),
		"spolocenstva->farska-rada"			=>	array('047',),
		"spolocenstva->katecheti-animatori"	=>	array('048',),
		"spolocenstva->zivot-vo-farnosti"	=>	array('049',),
		
		"dekanat"							=>	array('050',),
		"dekanat->schematizmus"				=>	array('051',),
		"dekanat->klastor-karmelu-detva"	=>	array('052',),
		"dekanat->rad-bratov-kapucinov"		=>	array('053',),
		"dekanat->svate-omse-v-okoli"		=>	array('054',),
		"dekanat->kam-vo-farnosti"			=>	array('055',),
		"dekanat->podpolianske-krize"		=>	array('056',),
		"dekanat->kontakt-dekanskeho-uradu"	=>	array('057',),
	),	// "Carusel"                                     
	                                                     
	// Pravý panel ->  určuje celkový počet otázok na str0ánke Trvalé + Náhodné
	"Pravý Panel Zloženie" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	'standard',
		"Hlavná Stránka" 					=>	'standard',
		"Fotogaléria" 						=>	false,
		"ostatne->Vsetky-otazky"			=>	'standard',
		"ostatne->vyhladavanie"				=>	false,
		"vzor"								=>	'standard',
		
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

		"spolocenstva"						=>	'standard',		
		"spolocenstva->zbor-hosanna"		=>	'standard',
		"spolocenstva->detsky-spevokol"		=>	'standard',
		"spolocenstva->divadlo-frantisek"	=>	'standard',
		"spolocenstva->dychova-hudba"		=>	'standard',
		"spolocenstva->lektori"				=>	'standard',
		"spolocenstva->ministranti"			=>	'standard',
		"spolocenstva->akolyti"				=>	'standard',
		"spolocenstva->kostolnici"			=>	'standard',
		"spolocenstva->organisti-farnosti"	=>	'standard',
		"spolocenstva->faustinum"			=>	'standard',
		"spolocenstva->ruzencove-spolocen"	=>	'standard',
		"spolocenstva->biblicke-stretka"	=>	'standard',
		"spolocenstva->erko"				=>	'standard',
		"spolocenstva->farska-rada"			=>	'standard',
		"spolocenstva->katecheti-animatori"	=>	'standard',
		"spolocenstva->zivot-vo-farnosti"	=>	'standard',
		
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
		"vzor"								=>	false,

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

		"spolocenstva"						=>	array ( array("", "Spoločenstvá")),	
		"spolocenstva->zbor-hosanna"		=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Mládežnícky zbor Hosanna")),
		"spolocenstva->detsky-spevokol"		=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Detský spevokol Srdiečko")),
		"spolocenstva->divadlo-frantisek"	=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Ochotnícke divadlo František")),
		"spolocenstva->dychova-hudba"		=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Dychová hudba")),
		"spolocenstva->lektori"				=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Lektori")),
		"spolocenstva->ministranti"			=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Miništranti")),
		"spolocenstva->akolyti"				=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Akolyti")),
		"spolocenstva->kostolnici"			=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Kostolníci")),
		"spolocenstva->organisti-farnosti"	=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Organisti farnosti")),
		"spolocenstva->faustinum"			=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Faustínum")),
		"spolocenstva->ruzencove-spolocen"	=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Ružencové spoločenstvá")),
		"spolocenstva->biblicke-stretka"	=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Biblické stretká")),
		"spolocenstva->erko"				=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "eRko")),
		"spolocenstva->farska-rada"			=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Farská rada")),
		"spolocenstva->katecheti-animatori"	=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Katechéti a animátori")),
		"spolocenstva->zivot-vo-farnosti"	=>	array ( array("/spolocenstva", "Spoločenstvá"),
													    array("", "Život vo farnosti")),
		
											
		"dekanat"							=>	array ( array("", "Dekanát")),
		"dekanat->schematizmus"				=>	array ( array("/dekanat", "Dekanát"),
													    array("", "Schématizmus dekanátu Detva")),
		"dekanat->klastor-karmelu-detva"	=>	array ( array("/dekanat", "Dekanát"),
													    array("", "Kláštor Kráľovnej Karmelu")),
		"dekanat->rad-bratov-kapucinov"		=>	array ( array("/dekanat", "Dekanát"),
													    array("", "Rád Menších bratov kapucínov")),
		"dekanat->svate-omse-v-okoli"		=>	array ( array("/dekanat", "Dekanát"),
													    array("", "Sväté omše v okolí")),
		"dekanat->kam-vo-farnosti"			=>	array ( array("/dekanat", "Dekanát"),
													    array("", "Kam vo farnosti ?")),
		"dekanat->podpolianske-krize"		=>	array ( array("/dekanat", "Dekanát"),
													    array("", "Podpolianske vyrezávané kríže")),
		"dekanat->kontakt-dekanskeho-uradu"	=>	array ( array("/dekanat", "Dekanát"),
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