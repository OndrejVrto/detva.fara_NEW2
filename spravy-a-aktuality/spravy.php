<?php

	// nastavenie vlastností správ
	
	// počet automaticky vložených správ na jednej stránke
	$pocetSprav = 3;
	$odsadenieTextu = 2;

	//  farby pre správy na hlavnej stránke preložené zo slovenčiny do css boostrap
	$farby = array(
		"Modrá" 	=> array("primary",		"text-white" ),
		"Sivá" 		=> array("secondary",	"text-white" ),
		"Zelená" 	=> array("success",		"" ),
		"Červená" 	=> array("danger",		"text-white" ),
		"Žltá" 		=> array("warning",		"" ),
		"Tyrkisová" => array("info",		"text-white" ),
		"Biela" 	=> array("light",		"" ),
		"Čierna" 	=> array("dark",		"text-white"),
	);

	if (!isset($_GET["p"])){
		$cisloListu = 1;
	} else {
		$cisloListu = $_GET["p"];
	}

	// vloží triedu funkcií správ
	include_once $path . "/spravy-a-aktuality/spravy-funkcie.php";

	// vloží správy z archívu
	include_once $path . "/spravy-a-aktuality/spravy-archiv.php";
	$pocetSpravCelkovo = max(count($spravyArchiv),1);
	$pocetStranok = ceil($pocetSpravCelkovo/$pocetSprav);

	if ($pocetStranok == $cisloListu){
		// Naimportuje správy z txt súboru na prvú stránku
		include_once $path . "/spravy-a-aktuality/spravy-textak.php";
		
		// vloží ručne pridané správy pri tvorbe správy
		include_once $path . "/spravy-a-aktuality/spravy-aktualne.php";
	}

	if ($cisloListu == $pocetStranok) {
		$od = count($spravyArchiv);
	} else {
		$od = $cisloListu * $pocetSprav;	
	}
		
	$do = ($cisloListu * $pocetSprav) - $pocetSprav + 1;

	echo "\t". '<!-- START - Správy z archívu -->' .PHP_EOL;	
	for ($e=$od; $e>=$do; $e--){
		echo hlavickaSpravy ($spravyArchiv[$e]["Titulok"], $spravyArchiv[$e]["Farba"], $odsadenie = $odsadenieTextu, $cisloSpravy = $e);
		echo $spravyArchiv[$e]["Sprava"];
		echo petickaSpravy ($spravyArchiv[$e]["Napisal"], $spravyArchiv[$e]["Datum"], $odsadenie = $odsadenieTextu, $cisloSpravy = $e);
		echo PHP_EOL;
	}
	echo "\t". '<!-- END - Správy z archívu -->' .PHP_EOL;

	$adresarVSTUPalbumHTML = "/stranka-";
	// vytvorí pagination
	include_once $path . "/_vlozene/funkcie-paginations.php";
	echo PHP_EOL ."\t". '<!-- START - Paginations -->';
	echo pagination_vrto($cisloListu, $pocetStranok, $adresarVSTUPalbumHTML, '', '' , true, 0, 3 );
	echo "\t". '<!-- START - Paginations -->';