<!-- START Include - Vedeli ste že ... -->
<?php
/*vlozenie poľa s otázkami

$vedeliSteZe_zoznam = array
	1 => array(
		"Oblast" 		=> "sviatky",
		"Zaujimavost" 	=> "medzi popolcovou stredou a veľkonočnou nedeľou je 46 dní",
		"Odkaz"			=> "/liturgia/krestanske-sviatosti#krst",
		"Titulok"		=> "Stránka o sviatkoch"
		),  
		.....atď
*/
include_once("vedeli-ste-ze-zoznam.php");

	echo "\t\t\t<div class=\"breadcrumb text-left mt-3\">";
	echo "\n\t\t\t\t<span class=\"active\" ><strong>Vedeli ste že ...</strong>&nbsp;&nbsp;</span>\n\t\t\t\t";

	$nahodnaZaujimavost = rand(1,count($vedeliSteZe_zoznam));
	
	echo $vedeliSteZe_zoznam[$nahodnaZaujimavost]["Zaujimavost"];
		
	if (array_key_exists("Odkaz",$vedeliSteZe_zoznam[$nahodnaZaujimavost])) {  
		echo "\n\t\t\t\t&nbsp;&nbsp;<a href=\"" .  $vedeliSteZe_zoznam[$nahodnaZaujimavost]["Odkaz"] . "\"";
		if (array_key_exists("Titulok", $vedeliSteZe_zoznam[$nahodnaZaujimavost])) {
			echo " title=\"" . $vedeliSteZe_zoznam[$nahodnaZaujimavost]["Titulok"] . "\"";
		}
		echo ">Čítajte ďalej ...</a>";
	}

	echo "\n\t\t\t</div>\n";
?>
<!-- END Include - Vedeli ste že ... -->