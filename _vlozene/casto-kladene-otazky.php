<!-- START Include - Často kladené otázky -->
			<hr>
			<h2>Často kladené otázky</h2>
			<div class="well text-left">
<?php
/*vlozenie poľa s otázkami
$otazky_zoznam = array
(	1 => array(
		"Oblast" 	=> "krst",
		"Otazka" 	=> "Je krst sviatosť?",
		"Odpoved"	=> "Nieje, pretože je to svätenina.",
		"Odkaz"		=> "/liturgia/krestanske-sviatosti#krst",
		"Titulok"	=> "Stránka o krstoch"
		).....atď
*/
include_once("casto-kladene-otazky-zoznam.php");

/*   konstanty sú nastavené v hlavnom súbore
	$otazkyTrvale = true;
	$otazkyTrvaleZoznam = array(2, 3);  // určuje poradie trvalych otázok
	$otazkyRandom = true;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 4; 		// určuje celkový počet otázok na stránke Trvalé+Random
*/

function vypisKodNaOtazky($idOtazky, $zoznam, $Posledny){
	
	echo "\t\t\t\t<strong>";
	echo $zoznam[$idOtazky]["Otazka"];
	echo " ... </strong>\n\t\t\t\t\t";
	echo $zoznam[$idOtazky]["Odpoved"];
	echo "\n\t\t\t\t\t<a href=\"" .  $zoznam[$idOtazky]["Odkaz"] . "\" title=\"" . $zoznam[$idOtazky]["Titulok"] . "\"> Viac ...</a>";
	
	if ($Posledny===true){
		echo "\n";	
	} else {
		echo "\n\t\t\t\t<br>\n";	
	}
}

if ($otazkyTrvale==true){
	$polePracovne = $otazkyTrvaleZoznam;
}else {
	$polePracovne = array();
}

$ochrana = 0;
$otazkyPocetNahodnych = $otazkyPocetCelkovy - count($otazkyTrvaleZoznam);

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
		if ($ochrana>=1000){
			//echo 'Priveľa opakovaní: ' . $ochrana;
			break(1);
		}
	}
	
} else {
	$polePracovne = array();
	echo "\t\t\t\t<p>Otázky niesú.</p>";
}

$pocetPrvkov = count($polePracovne);
	
for ($x=0; $x<=$pocetPrvkov-1 ;$x++){
	if ($x==$pocetPrvkov-1){
		vypisKodNaOtazky($polePracovne[$x],$otazky_zoznam,true);
	} else {
		vypisKodNaOtazky($polePracovne[$x],$otazky_zoznam,false);
	}
	
}
?>
			</div>
<!-- END Include - Často kladené otázky -->