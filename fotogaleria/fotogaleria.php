<?php
	include "sablony/funkcie-fotogalerie.php";
	//oprava gramatiky niektorých galérií - POZOR prvé písmeno daj veľkým	
	$title = str_replace(Array('%20', '-'), Array(' ', ' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $nazovGalerie)));
	$title = str_replace(Array('Fotogaleria', 'Detvianske vyrezavane krize', 'Starsie'), 
						      Array('Fotogaléria', 'Detvianske vyrezávané kríže', 'Staršie'), $title);
						 

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva, Fotogaléria: ' . $title;
	if (isset($nazovAlbumu)){ $titulokStranky = $titulokStranky . ' - ' . $titleALBUM; }
	
	$nadpisStrankyPreTlac = 'Fotogaléria: ' . $title;
	if (isset($nazovAlbumu)){ $nadpisStrankyPreTlac = $nadpisStrankyPreTlac . ' - ' . $titleALBUM; }
	
	$navsivitPo = '30 days';
	$nastavenieRobots = 'noindex, nofollow';
	$popisStranky = 'Farnosť Detva - fotogaléria, albumy, obrázky kostolov a kaplniek';
	$klucoveslova = 'Detva, fara, kostol, farnosť, fotky, obrázky, mládež, dychovka, slávnosť, výročie, deň rodín, oslava, dekanát';

	// poradie a typy obrázkov v caruseli
	$caruselOFF = false;
	$caruselStabilny = true;
	//$caruselPoradie = array('1', '11', '12', '13', '14', '15', '10', '17', '18', '19', '20');
	//$caruselAktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	// v albumoch funguje špecialne bublinkové menu
	/*$bublinkoveMenu = array (
		array("html" => "/fotogaléria", "nazov" => "Fotogaléria"),
		array("html" => "/fotogaleria/2008/1/", "nazov" => "2008")
	);*/
	//$bublinkoveMenu = false;
	$bublinkoveMenu = true;

	// určuje či sa na stránke zobrazí menu "vedeli ste že" do ktorého sa načítava obsah z MySQL
	$vedeliSteZeOFF = false;

	// určuje či sa zobrazia "často kladené otázky" - tie sa načítavajú z MySQL
	$otazkyOFF = false;
	$otazkyTrvale = true;
	$otazkyTrvaleZoznam = array();  // určuje poradie trvalych otázok
	$otazkyRandom = true;  	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyPocetCelkovy = 2; 		// určuje celkový počet otázok na stránke Trvalé+Random

	// určuje skladbu Pravého panelu
	// ak sa nezadá nič alebo sa zadá hodnota 'standard' bude na stránke štandardne zvolený panel nakonfigurovaný v súbore rightPanel-standard.php
	// ak sa zvolí hodnota false panel nebude žiadny a hlavný obsah sa roztiahne na celú šírku stránky
	/*$PravyPanelZlozenie = array(
		array('CestaSuboru' => "liturgicke-oznamy-detva-right.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot'),
		array('CestaSuboru' => "rightPanel-standard.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes')
	);*/
	//$PravyPanelZlozenie = 'standard';
	$PravyPanelZlozenie = false;
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
	<!--<link rel="stylesheet" type="text/css" href="/_css/folio-gallery.css" /> -->
	<link rel="stylesheet" type="text/css" href="/_css/colorbox/colorbox.css" />
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>

<?php

	echo "\n\t\t\t<div class=\"gallery\" role=\"img\">\n";
	echo $vystupHTML;
	echo "\t\t\t</div>";
	
	
// potom zmaz tento docasny kod pre vlozenie VZORov
		echo "\n\n<h4><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i> VZOR <i class=\"fa fa-arrow-down \" aria-hidden=\"true\"></i></h4>\n\n\t\t\t<div class=\"gallery\" role=\"img\">\n";
		if ($nazovGalerie=='zoznam-galerii'){
			include "vzory/zoznam-galerii-VZOR.php";
		} else {
			if (!isset($nazovAlbumu)){
				include "vzory/galeria-VZOR.php";
			} else {
				include "vzory/jeden-album-VZOR.php";
			}
		}
?>

<?php include "../_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
	<script type="text/javascript" src="/_javascripty/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".albumpix").colorbox({rel:'albumpix', slideshow:true, slideshowSpeed:"4000" , maxWidth:"90%", maxHeight:"90%"});
	});
	</script>
	<script type="text/javascript" src="/_javascripty/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/_javascripty/jquery.colorbox-sk.js"></script>
<!-- END - skripty na konci stranky -->
</body>
</html>
