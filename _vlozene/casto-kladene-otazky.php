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

/*   konstanty sú nastavené v hlavnom súbore */
	$otazkyTrvale = true;
	$otazkyTrvaleZoznam = array(2, 3);  // určuje poradie trvalych otázok
	$otazkyRandom = true;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 4; 		// určuje celkový počet otázok na stránke Trvalé+Random


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
}
?>
				<p class="text-secondary pt-0 pb-0 mb-0 text-right"><a href="/ostatne/casto-kladene-otazky-spolu"><small>Otázky zo všetkých kategórií</small></a></p>
			</div>
<!-- START Include - Často kladené otázky -->