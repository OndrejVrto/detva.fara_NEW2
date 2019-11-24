<!-- START Include - Správy na hlavnej stránke -->
	<!-- START - Ručne pridané správy -->
			<article class="card border border-success my-3" role="region">
				<div class="card-header bg-success">
					<h1 class="card-title">Detský letný kresťanský tábor</h1>
				</div>
				<div class="card-body p-3">
					<img class="mx-auto ml-lg-3 mb-3 d-block img-thumbnail float-lg-right" width="350" src="/_aktuality/2016-2Q/Detsky-tabor-2015-a025.jpg" alt="Tábor na farskom dvore" />
					<p class="text-justify"><strong>Farnosť Detva</strong> organizuje <strong>detský letný kresťanský tábor</strong>, určený pre deti 1. – 9.
					ročníka ZŠ, ktorý sa uskutoční <strong>22. 8. – 27. 8. 2016</strong> v Kokave nad Rimavicou na chate Hámor. Cena tábora je 85,-€ a maximálny počet detí je 50. Prihlasiť svoje
					dieťa môžete každú nedeľu po detskej sv. omši v sakrestií. Pri prihlasovaní uprednostňujeme deti z našej farnosti s trvalým pobytom v Detve.</p>
					<p class="text-justify">Ak máte záujem o prihlásenie do tábora, tak po sv. omši si môžete vziať prihlášku, ktorú nájdete na
					stolíku s novinami. Vyplnenú prihlášku so zálohou 40,-€ treba doniesť do sakrestie po detskej sv. omši.</p>
					<p class="text-justify">Ak chcete podporiť kresťanský tábor, tak to môžete urobiť aj
					darovaním 2% vašej dane. Tlačivá sa nachádzajú v kostole na stolíku s časopismi.</p>
				</div>
				<div class="card-footer text-muted">
					<span class="card-text float-left"><small>Napísal:</small> Janko Fízik</span>
					<span class="card-text float-right">12.10.2017</span>
				</div>
			</article>
			
			<article class="card border border-danger my-3" role="region">
				<div class="card-header bg-danger text-white">
					<h1 class="card-title">Pozvánka na spoločnú modlitbu</h1>
				</div>
				<div class="card-body p-3">
					<img class="mx-auto ml-lg-3 mb-3 d-block img-thumbnail float-lg-right" width="200" src="/_aktuality/2016-2Q/plagat-ruzenec-k-boziemu-milosrdenstvu.jpg" alt="Plagát a pozvánka na ruženec k božiemu milosrdenstvu" />
					<p class="text-justify">V nedeľu 10.04. bude v kláštore o 15.00 hod modlitba <strong>Ruženca k Božiemu milosrdenstvu</strong> s piesňami zboru z Bánoviec nad Bebravou.</p>
					<p>Srdečne Vás všetkých pozývame.</p>
					<p><a target="_blank" href="/_aktuality/2016-2Q/plagat-ruzenec-k-boziemu-milosrdenstvu.pdf" title="Plagát a pozvánka na ruženec k božiemu milosrdenstvu v pdf">Plagát v pdf</a></p>
					<img class="img-thumbnail d-block mx-auto float-lg-left" src="/_aktuality/2016-2Q/zbor-banovce.jpg" width="200" alt="Spoločná fotka zboru s Bánoviec nad bebravou" />
				</div>
				<div class="card-footer text-muted">
					<span class="card-text float-left"><small>Napísal:</small> Ondrej Vrťo</span>
					<span class="card-text float-right">12.05.2017</span>
				</div>
			</article>
	<!-- END - Ručne pridané správy -->
	
	<!-- START - Automaticky pridané správy -->
<?php
	// kod pre potreby vyvoja
	
/* 	echo $_SERVER['PHP_SELF'];
	echo "<br>\n";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>\n";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>\n";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>\n";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>\n";
	echo $_SERVER['SCRIPT_FILENAME'];
	echo "<br>\n";
	echo $_SERVER['QUERY_STRING'];
	echo "<br>\n p -> ";
	if (isset($_GET["p"])){
		echo $_GET["p"];
	} else {
		echo 'neexistuje';
	} */
	
include_once("_vlozene/spravy-zoznam.php");
/*echo "\n<br>",'<code>';
echo htmlspecialchars(var_dump($spravy));
echo "</code>";*/

/*   konstanty sú nastavené v hlavnom súbore
	$otazkyTrvale = true;
	$otazkyTrvaleZoznam = array(2, 3);  // určuje poradie trvalych otázok
	$otazkyRandom = true;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 4; 		// určuje celkový počet otázok na stránke Trvalé+Random
*/
/*
function vypisKodNaOtazky($idOtazky, $zoznam, $Posledny){
	
	echo "\t\t\t\t\t<div class=\"d-inline\">";
	echo $zoznam[$idOtazky]["Otazka"];
	echo "</div>";
	echo "\n\t\t\t\t\t<div class=\"d-inline\">";
	echo $zoznam[$idOtazky]["Odpoved"];
	
	if (array_key_exists("Odkaz",$zoznam[$idOtazky])) {  
		echo "\n\t\t\t\t\t<a href=\"" .  $zoznam[$idOtazky]["Odkaz"] . "\"";
		if (array_key_exists("Titulok",$zoznam[$idOtazky])) {
			echo " title=\"" . $zoznam[$idOtazky]["Titulok"] . "\""; 
		}
		if (array_key_exists("OdkazText",$zoznam[$idOtazky])) {
			echo ">" . $zoznam[$idOtazky]["OdkazText"] . "</a>"; 
		} else {
			echo ">Viac ... </a>"; 
		}
	}
	if ($Posledny===true){
		echo "</div>\n";	
	} else {
		echo "</div>\n\t\t\t\t<br>\n";	
	}
}

if ($otazkyTrvale==true){
	$polePracovne = $otazkyTrvaleZoznam;
}else {
	$polePracovne = array();
}

$ochrana = 0;
$otazkyPocetNahodnych = $otazkyPocetCelkovy - count($polePracovne);

if ($otazkyPocetNahodnych>0 and $otazkyRandom==true) {
	
	for ($y=0; $y<=$otazkyPocetNahodnych-1 ;$y++){
		$nahodnaotazka = rand(1,count($otazky_zoznam));
		$key = array_search($nahodnaotazka, $polePracovne);
		if ($key===false){	
			array_push($polePracovne, $nahodnaotazka);
		} else {
			$y--;
		}
		$ochrana++;
		if ($ochrana>=100){
			//echo 'Priveľa opakovaní: ' . $ochrana;
			break(1);
		}
	}
} else {
	if (count($polePracovne)>0){
	}else{
		$polePracovne = array();
		//echo "\t\t\t\t<div class=\"d-inline\"><a href=\"/ostatne/casto-kladene-otazky-spolu\" >Otázky zo všetkých kategórií.</a></div>\n";
	}
}

$pocetPrvkov = count($polePracovne);

for ($x=0; $x<=$pocetPrvkov-1 ;$x++){
	if ($x==$pocetPrvkov-1){
		vypisKodNaOtazky($polePracovne[$x],$otazky_zoznam,true);
	} else {
		vypisKodNaOtazky($polePracovne[$x],$otazky_zoznam,false);
	}		
	echo "\t\t\t\t<hr>\n";
}*/
?>

	<!-- END - Automaticky pridané správy -->
<!-- END Include - Správy na hlavnej stránke -->

<!-- ZALOHA - start -->
		
			
			<!--<article class="card text-left" role="region">
				<h1 class="bg-success text-center">Odber krvi na Detvianskej fare</h1>
				<img class="center-block img-thumbnail" style="float: left; margin-right: 20px" src="/_aktuality/2016-2Q/odber-krvi1.jpg" width="120" class="img-thumbnail" alt="Kvapka krvi" />
				<p style="min-height: 110px;" class="text-justify">
					<a href="http://www.ntssr.sk/kde-darovat-krv/banska-bystrica" >Transfúzna  stanica v Banskej Bystrici</a> v spolupráci s farským  úradom  v Detve a 
					<a href="http://www.ozfrantisek.sk/" >Občianským  združením  František</a> organizuje <strong>odber krvi</strong> dobrovoľných darcov krvi, ktorý sa uskutoční 
					<br><br><strong>v piatok 1. apríla v zasadačke <a href="/farnost/kontakt-farsky-urad-detva.php" >farského úradu</a> od 8.00 – 10.00 hod</strong>
					<br><br><a href="http://www.ntssr.sk/o-darovani-krvi/predtym-ako-darujete-svoju-krv" >Viac o darovaní krvi ...</a>
				</p>
			</article>
			<article class="card text-left" role="region">
				<h1 class="bg-danger text-center">Program duchovnej obnovy pred sviatkom Božieho milosrdenstva</h1>
				<a target="_blank" href="/_aktuality/2016-1Q/Program_duch_obnovy.pdf">
					<img class="center-block img-thumbnail" style="float: left; margin-right: 20px" src="/_aktuality/2016-1Q/Program_duch_obnovy.jpg" width="200" class="img-thumbnail" alt="Program duchovnej obnovy" />
				</a>
				<p style="min-height: 270px;" class="text-justify">
					<strong>Združenie Faustínum</strong> vás pozýva pri príležitosti sviatku Božieho milosrdenstva na duchovnú  obnovu vo  štvrtok, piatok a v sobotu  do  farského  kostola.  
					Duchovnú obnovu budú viesť dp. Peter Repiský a dp. František Trstenský.
					<br><br><a href="http://www.milosrdenstvo.sk/zdruzenie-faustinum" >Viac o združení Faustínum na Slovensku ...</a>
				</p>
			</article>
			<article class="card text-left" role="region">
				<h1 class="bg-success text-center">Slávenie Veľkonočných sviatkov 2016 v Detve</h1>
				<h3><strong>24.marca - Zelený štvrtok</strong></h3>
				<ul>
					<li>vo Farskom kostole o 17:00 h, po slávnostnej svätej omši nasleduje Eucharistická adorácia pri Božom hrobe do 19:00 h.</li>
					<li>v Kostole Bosých karmelitánok o 18:00 h</li>
				</ul>
				<h3><strong>25.marca - Veľký piatok</strong></h3>
				<ul>
					<li>vo Farskom kostole - Modlitba ranných chvál s lamentáciami o 8:00 h</li>
				</ul>
				<p><em>Veľkopiatočné obrady utrpenia a smrti Pána</em><p>
				<ul>
					<li>vo Farskom kostole o 15:00 h, po obradoch nasleduje Eucharistická adorácia pri Božom hrobe celonočná až do soboty do 19:30 h</li>
					<li>v Kostole Bosých karmelitánok o 15:00 h</li>
				</ul>
				<h3><strong>26.marca - Biela sobota</strong></h3>
				<ul>
					<li>vo Farskom kostole - modlitba ranných chvál s lamentáciami o 8:00 h</li>
				</ul>
				<p><em>Svätá omša – Veľkonočná vigília</em><p>
				<ul>
					<li>vo Farskom kostole o <del>19:30 h</del> <mark>18:30 h</mark></li>
					<li>v Kostole Bosých karmelitánok o 21:00 h</li>
				</ul>
				<h3><strong>27.marca - Veľkonočná nedeľa Pánovho zmŕtvychvstania</strong></h3>
				<ul>
					<li>svätá omša v Kostole Bosých karmelitánok o 8:30 h</li>
					<li>svätá omša vo Farskom kostole o 7:45 h, o 9:00 h, o 10:30 h, o 17:30 h</li>
				</ul>
				<h3><strong>28.marca - Veľkonočný pondelok</strong></h3>
				<ul>
					<li>svätá omša v Kostole Bosých karmelitánok o 7:30 h</li>
					<li>svätá omša vo Farskom kostole o 7:45 h, o 9:00 h, o 10:30 h</li>
				</ul>
			</article>
			<article class="card" role="region">
				<h1 class="bg-white text-center">Týždeň s TV LUX</h1>
				<a target="_blank" href="http://www.tvlux.sk/archiv/play/9488">
					<img class="img-thumbnail img-responsive" style="float: left; margin-right: 20px" src="/_aktuality/2016-1Q/logo-tv-lux.jpg" width="200" alt="Logo TV LUX" />
				</a>
				<p style="min-height: 130px;" class="text-justify">Naša farnosť je v tomto týždni zapojená do akcie TV Lux <a target="_blank" href="http://www.tvlux.sk/archiv/play/9488">„Týždeň s“</a>. Prosíme vás o modlitby a osobné obety za TV Lux. 
				Za našu farnosť sa bude slúžiť sv. omša v televizií v pondelok ráno a cez týždeň bude predstavená naša farnosť.
				</p>
			</article>
			<article class="card" role="region">
				<h2 class="bg-success text-center">Listovanie Bibliou - MILOSRDENSTVO I.</h2>
				<a target="_blank" type="pdf" href="/_aktuality/2016-1Q/benediktini-A3-plagat-program-modlitieb.pdf">
				<img class="img-thumbnail center-block img-responsive" src="/_aktuality/2016-1Q/benediktini-A3-plagat-program-modlitieb-thumb.jpg" width="200px" alt="plagat listovanie bibliou" />
				</a>
			</article>
			<article class="card" role="region">
				<h1 class="bg-success text-center">Detva patrí medzi mestá vo svete, ktoré prijali známu sväticu</h1>
					<p class="text-left"><strong>Detva bola 12. a 13. januára 2016 v poradí šiestym slovenským mestom, ktoré privítalo relikvie sv. Terezky z Lisieux, na Slovensku ju prijme celkovo 28 obcí.</strong></p>
					<p class="text-justify">Prvou zastávkou bolo hlavné mesto Bratislava, do Detvy Terezku priviezli z banskobystrickej Katedrály.
					Relikviár, v ktorom prenášajú takmer celé telesné ostatky svätej, uložili v kostole Kláštora Božieho milosrdenstva a Kráľovnej Karmelu v Detve. 
					Tu v neskorých večerných hodinách pri svätej omši osem členov Svetského rádu bosých karmelitánov zložilo večné sľuby. 
					Ešte do polnoci prichádzali veriaci z Detvy uctiť si relikviár. 
					Potom sestry bosé karmelitánky mohli prísť k svojej spolusestre z Lisieux a stráviť s ňou čas v modlitbách. 
					Kaplnku otvorili opäť ráno o piatej hodine pre verejnosť.</p>
					<img class="img-thumbnail center-block img-responsive" src="/_aktuality/2016-1Q/omsa-terezka-fotka1.jpg" width="800" height="533" class="img-thumbnail" alt="svata Terezka 1" />
					<p class="text-justify">Na slávnostnú svätú omšu do Farského kostola sv. Františka Assiského previezli relikviár v stredu dopoludnia sprievodom áut.</p>
					<p class="text-justify">Generálny vikár Banskobystrickej diecézy Branislav Koppal, ktorý predsedal bohoslužbe, upriamil pozornosť veriacich na to, že sa práve dotýkajú úžasného tajomstva Božej lásky. 
					„Veríme v jej hlboko duchovnú prítomnosť práve cez jej ostatky,“ dodal Koppal.</p>
					<p class="text-justify">Mária Františka Terézia Martinová sa narodila v januári 1873 v Alencone vo francúzskej Normandii ako najmladšia z deviatich detí. 
					Jej rodičia boli svätorečení v roku 2015. 
					Ako mladá rehoľníčka Terézia od Dieťaťa Ježiša a Svätej Tváre viedla skromný skrytý život. 
					Jej duchovné posolstvo sa zachovalo vďaka osobným zápiskom, vďaka niekoľkým básňam, divadelným hrám a listom, ktoré napísala.</p>
					<p class="text-justify">Zomrela v karmelitánskom kláštore po boji s tuberkulózou ako dvadsaťštyriročná. 
					Bolo to 30. septembra 1897. 
					V dnešnej dobe by sa tento mladý vek považoval za tragické úmrtie. No vtedy sa asi len tridsať smútiacich zúčastnilo jej pohrebu na mestskom cintoríne. 
					Predpokladalo sa, že sa na ňu ako to býva, čoskoro zabudne.</p>
					<p class="text-justify">Prekvapivo, úcta k nej sa však šírila do celého sveta. Iste aj vďaka pribúdajúcim vymodleným zázrakom. 
					Spôsob, akým Terezka milovala Boha, ľudí a stvorený svet nazval Branislav Koppal mystikou obyčajnosti. 
					Práve k tomuto povzbudil veriacich, aby mali srdce naplnené Božou láskou pri vykonávaní všedných denných povinností. 
					Tajomstvo svätosti sa skrýva v obyčajných chvíľach života.</p>
					<img class="img-thumbnail center-block img-responsive" src="/_aktuality/2016-1Q/omsa-terezka-fotka2.jpg" width="800" height="533" class="img-thumbnail" alt="svata Terezka 2" />
					<p class="text-justify">Celková váha Terezkinho relikviára aj s ochranným plexisklom je 247 kg. 
					Po Slovensku putuje od 10. do 24. januára 2016. Urna putuje už niekoľko desaťročí. 
					Prešla od Filipín po Spojené štáty americké, putovala cez Irak, Izrael, Sibír a mnohé ďalšie. 
					Detviansky dekan Ľuboš Sabol jej pri rozlúčke zveril do modlitieb celú farnosť. 
					Nech vyprosuje mladým angažovanosť vo farnosti a odvahu uzatvárať manželstvá, prosil svätú, aby v nebi pomáhala vyprosovať ďalších kňazov z Detvy, aby prosila za prácu pre manželov, 
					za pomoc pre starých a chorých a za ďalšie životné okolnosti obyvateľov podpolianskeho mesta.</p>
					<p class="text-left"><em>Text a foto: Zuzana Juhaniaková</em></p>
			</article>
			<article class="card" role="region">
				<p><a href="/farnost/liturgicke-oznamy-farnosti-detva" >Oznamy nájdete v menu - Farnosť -> Liturgické Oznamy</a></p>
				<p><a href="/farnost/liturgicke-oznamy-farnosti-detva">Rozpisy služieb lektorov nájdete v menu - Farnosť -> Liturgické Oznamy</a></p>
			</article>-->
<!-- ZALOHA end -->