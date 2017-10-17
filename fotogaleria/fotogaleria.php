<?php
	// zapnutie vypisovania chýb
	//error_reporting (E_ALL ^ E_NOTICE);

	// Inicializačné konštanty stránky
	$nazovGalerie = $_GET["galeria"];
	$cisloListu = $_GET["p"];
	if (isset($_GET["album"])){
		$nazovAlbumu = $_GET["album"];
	}
	$title = str_replace(Array('%20', '-'), Array(' ', ' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $nazovGalerie)));
	
	//oprava gramatiky niektorých galérií - POZOR prvé písmeno daj veľkým
	$title = str_replace(Array('Fotogaleria', 'Detvianske vyrezavane krize', 'Starsie'), 
						 Array('Fotogaléria', 'Detvianske vyrezávané kríže', 'Staršie'), $title);
						 
						 
	if (isset($nazovAlbumu)){
		$xml = new DOMDocument();
		$suborXML = '/_fotoalbumy/' . $nazovGalerie . '/' . $nazovAlbumu;
		
		if (!file_exists($suborXML)) {
			$adresarVSTUP = $suborXML;
			include "sablony/vytvor-XML-albumu.php";
			
			// doplnit kod-->  "oprav-XML-albumu.php  (v prípade že dôjde k presunu do iného adresára, prepíše cesty, doplní nové fotky, znefunkční chýbajúce fotky, .. a hlavne .. neprepíše ručne vypĺňané polia)
		}
		$xml->load( $XMLsuborABS );
		$titleALBUMx = $xml->getElementsByTagName( "NazovAlbumu" );
		$titleALBUM = $titleALBUMx->item(0)->nodeValue;
	}
?>
<?php
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
	$caruselPoradie = array('006', '002', '003', '004', '001', '009', '010');
	//$caruselPoradie = rand(1,50); - dopnit kod na vyber nahodnuch 6 obrázkov
	$aktivny = 1;

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
	//$otazkyOFF = true;
	$otazkyOFF = false;
	//$otazkyTrvale = false;
	$otazkyTrvale = array('01', '02', '03', '04');  // určuje id otázok v tabuľke SQL
	// určuje či otázky rozšíriť o náhodné otázky
	$otazkyRandomOFF = true;  
	$otazkyPočet = 7; // určuje celkový počet otázok na stránke Trvalé+Random

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
			<div class="gallery" role="img">
<?php
	include "sablony/funkcie-fotogalerie.php";

	if ($nazovGalerie=='zoznam-galerii'){
		include "sablony/zoznam-galerii.php";
	} else {
		if (!isset($nazovAlbumu)){
			include "sablony/zoznam-albumov-v-galerii.php";
				// potom zmaz tento docasny kod - VZOR
				echo "<br>\n\n\t\t\t</div>\n\n\n\t\t\t<h4><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i> VZOR <i class=\"fa fa-arrow-down \" aria-hidden=\"true\"></i></h4>\n\n\t\t\t<div class=\"gallery\" role=\"img\">\n";
				include "galeria-VZOR.php";
		} else {
			include "sablony/jeden-album.php";
				// potom zmaz tento docasny kod - VZOR
				echo "<br>\n\n\t\t\t</div>\n\n\n\t\t\t<h4><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i> VZOR <i class=\"fa fa-arrow-down \" aria-hidden=\"true\"></i></h4>\n\n\t\t\t<div class=\"gallery\" role=\"img\">\n";
				include "jeden-album-VZOR.php";
		}
	}
?>
			</div>
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
