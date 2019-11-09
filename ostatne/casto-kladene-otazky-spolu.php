<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'ostatne->Vsetky-otazky';

	$path = $_SERVER['DOCUMENT_ROOT'];	
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include_once $path . "/_vlozene/vrch-stranky.php"; echo "\n";

include_once $path . "/_vlozene/casto-kladene-otazky-zoznam.php";

$nazvyOblasti = array_keys($otazky_zoznam);

echo "\t\t<h1 class=\"text-center\">Všetky často kladené otázky (FAQ)</h1>";
echo "\n\n\t\t\t<div class=\"well text-left\">";
	
for ($x=0; $x<=count($otazky_zoznam)-1 ;$x++){

	echo "\n\t\t\t<h2>";
	echo $nazvyOblasti[$x];
	echo "</h2>";
	
	// echo count($otazky_zoznam[$nazvyOblasti[$x]]);
	
  	for ($y=1; $y<=count($otazky_zoznam[$nazvyOblasti[$x]]) ;$y++){
		
		echo "\n\t\t\t\t<div class=\"d-inline\"><strong>";
		echo $otazky_zoznam[$nazvyOblasti[$x]][$y]["Otazka"];
		echo "</strong></div><br>";
		echo "\n\t\t\t\t<div class=\"d-inline\">";
		echo $otazky_zoznam[$nazvyOblasti[$x]][$y]["Odpoved"];
		
		
		if (array_key_exists("Odkaz",$otazky_zoznam[$nazvyOblasti[$x]][$y])) {  
			echo "\n\t\t\t\t<a href=\"" .  $otazky_zoznam[$nazvyOblasti[$x]][$y]["Odkaz"] . "\"";
			if (array_key_exists("Titulok",$otazky_zoznam[$nazvyOblasti[$x]][$y])) {
				echo " title=\"" . $otazky_zoznam[$nazvyOblasti[$x]][$y]["Titulok"] . "\""; 
			}
			if (array_key_exists("OdkazText",$otazky_zoznam[$nazvyOblasti[$x]][$y])) {
				echo ">" . $otazky_zoznam[$nazvyOblasti[$x]][$y]["OdkazText"] . "</a>"; 
			} else {
				echo ">Viac ... </a>"; 
			}
		}
		echo "</div>";		
		if ($y!==count($otazky_zoznam[$nazvyOblasti[$x]])){
			echo "\n\t\t\t\t\t<br><hr>";
		}
	}
	if ($x==count($otazky_zoznam)-1){
		echo "\n\t\t\t</div>\n";
	} else {
		echo "\n\t\t\t</div>\n";
		echo "\n\t\t\t<div class=\"well text-left\">";
	}
}

include_once $path . "/_vlozene/spodok-stranky.php"; echo "\n";
?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>