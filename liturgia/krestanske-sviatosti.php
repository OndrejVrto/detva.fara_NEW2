<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Sviatosti';
	$navsivitPo = '30 days';
	$nastavenieRobots = 'noindex, nofollow';	
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('038', '040', '030', '045', '018', '019', '020');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/liturgia", "nazov" => "Liturgia"),
		array("html" => "", "nazov" => "Sviatosti")
	);
	//$bublinkoveMenu = false;

	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
	$vedeliSteZeOFF = true;

	// určuje či sa zobrazia "často kladené otázky" - tie sa načítavajú z MySQL
	$otazkyOFF = true;
	$otazkyTrvale = true;
	$otazkyTrvaleZoznam = array(2, 3);  // určuje poradie trvalych otázok
	$otazkyRandom = true;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 4; 		// určuje celkový počet otázok na stránke Trvalé+Random

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

			<h1 class="text-center">Vysluhovanie ostatných sviatostí</h1>
			<section class="text-left">
				<h2 class="text-left">Sväté prijímanie (Eucharistia)</h2>
				<p class="text-left">Podklady k prednáškam (katechézam) pre rodičov</p>
				<a target="_blank" type="application/msword" href="/data/sviatosti/prve-stretnutie-katecheza.doc">Prvé stretnutie - katechéza</a> 
				<br>
				<a target="_blank" type="application/msword" href="/data/sviatosti/druhe-stretnutie-katecheza.doc">Druhé stretnutie - katechéza</a>
			</section>
			<hr>
			<section>
				<h2 class="text-left">Sviatosť manželstva</h2>
				<p class="text-left">Na prijatie sviatosti manželstva je potrebné sa prihlásiť 2 mesiace vopred na farskom úrade.</p>
				<br>
				<p class="text-left"><strong>Príprava snúbencov v roku 2016</strong> </p>
				<p style="text-align: left;">Prednáška začína vždy o 18.30 h. v zasadačke Farského úradu v Detve</p>

				<div id="Príprava snúbencov 2016" align=center>
					<table class="table">
					 <tr class="active">
					  <td colspan=2>1.František Veverka (0915 604 558)</td>
					  <td>15.02.</td>
					  <td>04.04.</td>
					  <td>09.05.</td>
					  <td>13.06.</td>
					  <td>18.07.</td>
					  <td>05.09.</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Vierouka</td>
					 </tr>
					 <tr class="active">
					  <td colspan=2>2. Jozef Murín (0905 324 471)</td>
					  <td>22.02.</td>
					  <td>11.04.</td>
					  <td>16.05.</td>
					  <td>20.06.</td>
					  <td>25.07.</td>
					  <td>12.09.</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Povolanie k manželstvu</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Život kresťanskej rodiny</td>
					 </tr>
					 <tr class="active">
					  <td colspan=2>3. Vladimír Kučera (0907 880 582)</td>
					  <td>29.02.</td>
					  <td>18.04.</td>
					  <td>23.05.</td>
					  <td>27.06.</td>
					  <td>01.08.</td>
					  <td>19.09.</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Podoby lásky</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Starostlivosť o manželský život</td>
					 </tr>
					 <tr class="active">
					  <td colspan=2>4. Ján Krekáň (0915 379 956)</td>
					  <td>07.03.</td>
					  <td>25.04.</td>
					  <td>30.05.</td>
					  <td>04.07.</td>
					  <td>08.08.</td>
					  <td>26.09.</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Príprava na rodičovstvo</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Zodpovedné rodičovstvo</td>
					 </tr>
					 <tr class="active">
					  <td colspan=2>5. Valika Škopíková (0907 876 817)</td>
					  <td>14.03.</td>
					  <td>02.05.</td>
					  <td>06.06.</td>
					  <td>11.07.</td>
					  <td>15.08.</td>
					  <td>03.10.</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Plánovanie rodičovstva – zodpovedné rodičovstvo</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Prirodzené metódy plánovania rodičovstva</td>
					 </tr>
					 <tr>
					  <td></td>
					  <td>Antikoncepcia, Interrupcia</td>
					 </tr>
					</table>
				</div>
			</section>
			<hr>
			<section>
				<h2 class="text-left">Sviatosť krstu</h2>
				<p class="text-left">Sviatosť krstu sa vysluhuje v našej farnosti bez svätej omše každú sobotu po rannej svätej omši o 6:30. Sviatosť krstu so svätou omšou sa vysluhuje v nedeľu po dohode s kňazom.</p>
				<p class="text-left">Príprava na sviatosť krstu sa koná každú stredu o 18:30 v budove farského úradu.</p>
			</section>
			<hr>
			<section>
				<h2 class="text-left">Sviatosť pomazania chorých</h2>
				<p class="text-left">Vyslúženie tejto sviatosti chorému a umierajúcemu kedykoľvek i uprostred noci, treba zavolať kňazovi, na farský úrad, alebo osobne kontaktovať cez deň na farskom úrade alebo po každej svätej omši.</p>
			</section>
			<hr>
			<section>
				<h2 class="text-left">Sviatosť zmierenia</h2>
				<p class="text-left">Sviatosť pokánia sa  vysluhuje každý deň pol hodinu pred každou svätou omšou a cez svätú omšu v prípade potreby okrem nedele.</p>
				<p class="text-left">V prvopiatkovom týždni sa sviatosť zmierenia vysluhuje podľa potreby, časy sú vždy rozpísané vo farských oznamoch na príslušný týždeň.</p>
			</section>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>