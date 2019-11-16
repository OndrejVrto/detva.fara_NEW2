			<!-- START Include - Často kladené otázky -->			
			<hr>
			<h2>Často kladené otázky</h2>
			<div class="well text-left">
<?php

/* // možnosti
	"Otázky Zapnut" => array(
		"Chybová 404" 						=>	false,
		"Čistá" 							=>	true,
		"farnost->liturgicke-oznamy"		=>	'Liturgia',
		"farnost->historia-kostola"			=>	array(
													array("Liturgia", 9),
													array("Svadba", 3)
*/

include_once $path . "/_vlozene/casto-kladene-otazky-zoznam.php";

	if ($otazkyOFF==true) { $kod = 1; }
	if (is_string($otazkyOFF)){ $kod = 2; }
	if (is_array($otazkyOFF)) { $kod = 3; }

	switch ($kod) {
		// 1 = true - vygeneruj náhodné otázky
		case 1:
			$polePracovne = array();
			$polePracovneVYBER = array();
			$pocetOblasti = count($otazky_zoznam);
			$nazvyOblasti = array_keys($otazky_zoznam);
			$pocetOtazok = $pocetNahodnychOtazok;
			$ochrana = 0; 
			//echo "Pocet oblasti: " . $pocetOblasti . "<br>";	
			
			for ($y=0; $y<=$pocetNahodnychOtazok-1 ;$y++){
				$nahodnaOblast = rand(0,$pocetOblasti-1);
				$nahodnaOtazka = rand(1,count(array_values($otazky_zoznam)[$nahodnaOblast]));
				//echo $nahodnaOblast . "<br>";
				//echo $nahodnaOtazka. "<br><br>";
				$key = array_search($nahodnaOblast.','.$nahodnaOtazka, $polePracovneVYBER);
				if ($key===false){	
					array_push($polePracovneVYBER, $nahodnaOblast.','.$nahodnaOtazka);
					array_push($polePracovne, array($nazvyOblasti[$nahodnaOblast],$nahodnaOtazka));
				} else {
					$y--;
				}
				$ochrana++;
				if ($ochrana>=100){
					//echo 'Priveľa opakovaní: ' . $ochrana;
					break(1);
				} 
			}
		break;
		
		// 2 = presný názov stránky - poľa
		case 2:
		$polePracovne = array();
		$pocetOtazok = count($otazky_zoznam[$otazkyOFF]);
		
		for ($y=1; $y<=$pocetOtazok ;$y++){
			array_push($polePracovne, array($otazkyOFF, $y));
		}
		break;
		
		// 3 = zadefinované poľe otázok
		case 3:
		$polePracovne = $otazkyOFF;
		$pocetOtazok = count($otazkyOFF);
	}
	
/*  print_r($polePracovne);
 echo '<br><br>';
 echo 'Pocet otazok: ' . $pocetOtazok;
 echo '<br><br>'; */

vypisKodNaOtazky($polePracovne, $otazky_zoznam, $pocetOtazok);

function vypisKodNaOtazky($otazky, $zoznam, $pocetOpakovani){

	for ($x=0; $x<=$pocetOpakovani-1 ;$x++){
		$idOtazky = $otazky[$x];
		echo "\t\t\t\t<div class=\"d-inline\"><strong>";
		echo $zoznam[$idOtazky[0]][$idOtazky[1]]["Otazka"];
		echo "</strong></div><br>";
		echo "\n\t\t\t\t<div class=\"d-inline\">";
		echo $zoznam[$idOtazky[0]][$idOtazky[1]]["Odpoved"];
		
		if (array_key_exists("Odkaz",$zoznam[$idOtazky[0]][$idOtazky[1]])) {  
			echo "\n\t\t\t\t<a href=\"" .  str_replace(" ", '%20', $zoznam[$idOtazky[0]][$idOtazky[1]]["Odkaz"]) . "\"";
			if (array_key_exists("Titulok",$zoznam[$idOtazky[0]][$idOtazky[1]])) {
				echo " title=\"" . $zoznam[$idOtazky[0]][$idOtazky[1]]["Titulok"] . "\""; 
			}
			if (array_key_exists("OdkazText",$zoznam[$idOtazky[0]][$idOtazky[1]])) {
				echo ">" . $zoznam[$idOtazky[0]][$idOtazky[1]]["OdkazText"] . "</a>"; 
			} else {
				echo ">Viac ... </a>"; 
			}
		}
		echo "</div>";		
		if ($x!==$pocetOpakovani-1){
			echo "\n\t\t\t\t\t<br><hr>\n";
		} else {
			echo "\n\t\t\t\t\t<br><br>\n";
		}
	}
}
?>
				<p class="text-secondary pt-0 pb-0 mb-0 text-right"><a href="/ostatne/casto-kladene-otazky-spolu" title="Stránka so všetkými otázkami"><small>Otázky zo všetkých kategórií</small></a></p>
			</div>
			<!-- START Include - Často kladené otázky -->