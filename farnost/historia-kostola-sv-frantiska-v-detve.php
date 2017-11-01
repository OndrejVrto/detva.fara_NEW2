<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'História kostola';
	$navsivitPo = '30 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('06', '02', '03', '04', '01', '09', '10');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/farnost", "nazov" => "Farnosť"),
		array("html" => "", "nazov" => "História kostola")
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
	$PravyPanelZlozenie = false;
	//$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>


			<div class="kostolPage">
				<h1>Farský kostol</h1>
				<div class="textkostol">Pôvod mestečka Detva tesne súvisí s Vígľašským hradom, s ktorým spolu znášali všetky utrpenia, o ktorých súčasné pokolenie vie len veľmi málo. Historické pramene hovoria, že pánmi tohto územia boli pred tisíc rokmi Slovania. Títo už akiste boli kresťanmi, preto sa dá domnievať, že tu v hradnom sídle mohlo už byť niečo kresťanského charakteru, možno i kostol.</div>
				<div class="textkostol">Prvá lokalita ( Zvolen ) mala už v roku 1135 kostol, ktorý mal aj svojho kňaza. Je teda viac než pravdepodobné, začiatky tohto kostola siahajú do čias svätoštefanských. Uhorský kráľ Štefan I., keď sa zbavil všetkých svojich protivníkov – pohanov, svoje kráľovstvo vzorne usporiadal a zosilnil. Zvlášť mu záležalo na osude kresťanstva preto nariadil, aby v každej desiatej osade bol postavený kostol. Vychádzajúc z týchto predpokladov, ľud sa oboznamoval z evanjeliom najskôr na hrade vo Vígľaši, potom Očovej, ku ktorej v rámci cirkevnej organizácie patrilo aj územie Detvy. </div>
				<div class="textkostol">V prvej písomnej zmienke o obci Detva sa už po prvýkrát spomína fara,  založená roku 1644.</div>
				<div class="textkostol">Základy kostola boli položené roku 1661 a v roku 1664 bol dokončený. V tom čase tu ako farár pôsobil Juraj Kološi. Nad bránou kostola bol latinský nápis: „Dňa 13. augusta 1661 túto bránu postavili na vlastné náklady Detvanci a v tom istom roku dňa 4. mája položili základný kameň kostola.“</div>
				<div class="textkostol">Na túto dobu poukazuje aj tvar pôdorysu a presbytéria najstaršej časti kostola. Presbytérium malo mierne pretiahnutý pôdorys s polygonálnym uzáverom a opornými piliermi. K presbytériu pôvodne patrila obdĺžníková loď pravdepodobne bez klenieb a s vežou na západnej strane. Pôvodnú podobu kostola je však ťažko rekonštruovať, leboneskoršie prestavby podstatne zmenili jeho architektúru.</div>
				<div class="textkostol">Pretože Detva vznikla v období protireformačných aktivít starali sa o ňu hneď od začiatku rády jezuitov a františkánov, ktorý tu zanechali aj stopu na patrocíniu kostola a farnosti. Roku 1730 sa tu spomína spoločenstvo svätého Františka Assiského, mužská i ženská rehoľa, ktoré viedol ostrihomský vikár a neskorší detviansky farár Juraj Spačinský.</div>
				<div class="textkostol">V roku 1695 sa vzmáhajúca Detva stala obeťou požiaru. Požiar zničil kostol, farské budovy a domy v blízkosti kostola. Kostol sa však postupne začal opravovať. V roku 1712 bol ohradený vysokým kamenným múrom. Oprava kostola sa veľmi predĺžila a až v roku 1750  bol obnovený veľký oltár a kazateľnica. </div>
				<div class="textkostol">Na pamiatku dalo mestečko postaviť v roku 1768 sochu svätého Jána Nepomuckého. Dnes sa socha nachádza pred Pastoračným centrom (časť Chudobienca ). Detva v tom období patrila do ostrihomskej arcidiecézy. V roku 1776 po zriadení Banskobystrickej diecézy bola farnosť pridelená do jej pôsobnosti, kde patrí dodnes.</div>
				<div class="textkostol">Začiatkom 19. storočia sa kostol stával vzhľadom na veľkosť farnosti tesný, a preto farár Ján Štrba začal so zväčšovaním farského kostola. Veľkoleposť chrámu bola zvýraznená dvomi bočnými loďami, ktoré od hlavnej lode oddeľovali dekoratívne tvarované stĺpy. Prestavaná bola aj veža a pokrytá medeným plechom. Do kostola sa vchádzalo jedným hlavným vchodom a dvomi bočnými. Na veži sa nachádzali mestské hodiny. </div>
				<div class="textkostol">Čo sa týka vnútorného zariadenia, kostol mal tri oltáre. Hlavný oltár zasvätený svätému Františkovi Assiskému, a bočné oltáre zasvätené Jánovi Nepomuckému a Božskému srdcu. K vnútornému zariadeniu patrila aj kazateľnica, dve spovednice  a sakristia. Celé zariadenie –kostola sa zachovalo s výnimkou čiastočného poškodenia oltára a niektorých liturgických predmetov. </div>
				<div class="textkostol">Po prestavbe kostol v roku 1909 dostal novú monštranciu od kňažnej Izabela ( existuje dodnes ). Maľba kostola bola prevedená roku 1913. počas pôsobenia farára Antona Kúdelku bol v roku 1917 kúpený nový zvon, Boží hrob a mnohé zástavy. Farár Ján Štrbáň kúpil nové zvony, dal pozlátiť hlavný oltár a vydláždiť kostol novou dlažbou. Elektrifikácia kostola bola vykonaná roku 1928. v rámci renovácie boli pred kostolom roku 1934  vysvätené dva kríže. </div>
				<div class="textkostol">V roku 1936 namaľoval František Gyurkovits z Lučenca obrazy svätého Františka Assiského ( dnešný oltárny obraz ), svätého Františka Xaverského a svätých Cyrila a Metoda. 
				Dňa 13. februára 1945 bol kostol veľmi poškodený granátmi. Znovu bol opravený až roku 1949. </div>
				<div class="textkostol">Najväčší zvon, ktorý bol už r. 1858 prelievaný znovu pukol v roku 1964. Tento zvon bol miláčikom pre Detvancov. Zvlášť chýbal veriacim z lazov, no napriek tomu nemali vôľu dať ho urobiť, lebo sa obávali, že zvon sa už nikdy nevráti. Bolo veľa aj takých, ktorí si mysleli, že vo zvone je zlato a striebro. Dal sa teda urobiť rozbor zvona a ukázalo sa že materiál zvonu je dosť zlý. Chemické zloženie zvonu vyzeralo takto: 76% meď, 18% cín, 25% olovo, ostatok stopy niklu, železa atď.  Keď teda prestali rečí o zlate a striebre zvon bol odmontovaný a poslaný majstrovi Dytrichovi Brodek u Přerova. Zvon vážil 15.30 q. Dytrich ulial  nový zvon ťažší ako bol starý. Terajší zvon váži 19.40 q . Náklad na túto prácu si vyžiadal 67 732 Kčs plus 10 000 Kčs na nový materiál, ktorý sasom šťastnou náhodou zohnal. Keď zvon prišiel bolo veľa radosti a pri posviacke pekná slávnosť.</div>
				<div class="textkostol">Od 15. januára 1982 prebehla celková renovácia kostola. Dekan Jozef Závodský požiadal Rímskokatolícky biskupský úrad v Banskej Bystrici o povolenie vykonať neodkladné práce.</div>
				<div class="textkostol">Odborné reštauračné práce vykonal akademický maliar Rudolf Čerget. Opravy interiéru vykonalo Svojpomocné stavebné a drevospracujúce družstvo Trenčín v období od 2. februára 1987 až do roku 1989Po vnútornej obnove priestorov nasledovala oprava vonkajšieho vzhľadu kostola. Oprava prebiehala za účinnej pomoci miestneho obyvateľstva.  </div>
				<div class="textkostol">V súčasnosti je kostol pravidelne udržiavaný, denne sa tu konajú sväté omše.</div>
				<div class="textkostol">V roku 1990 ONV vo zvolene zaregistroval chrám sv. Františka Assiského v Detve ako národnú kultúrnu pamiatku.</div>
			</div>


<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>