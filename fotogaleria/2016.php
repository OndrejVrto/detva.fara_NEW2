<?php 
	// Inicializačné konštanty stránky

	// Meta značky stránky - ! musia byť vyplnené !
	$titulokStranky = 'Farnosť Detva - oficiálna stránka farnosti aj dekanátu, aktuálne oznamy';
	$nadpisStrankyPreTlac = 'Schematizmus dekanátu Detva';
	$navsivitPo = '30 days';
	$popisStranky = 'Farnosť Detva - hlavná stránka farnosti, hlavný obsah, kontakty, bohoslužby, aktuálne oznamy';
	$klucoveslova = 'Detva, fara, kostol, farnosť, liturgické, oznamy, sväté, omše, rozpis, lektor, dekanát, aktuality, služby, božie, bohoslužby, nedeľa';

	// poradie a typy obrázkov v caruseli
	$caruselPoradie = array('006', '002', '003', '004', '001', '009', '010');
	$aktivny = 1;

	// určuje či sa na stránke zobrazí bublinkové menu a následne ho naplní
	$bublinkoveMenu = array (
		array("html" => "/fotogaléria", "nazov" => "Fotogaléria"),
		array("html" => "/fotogaleria/2015/1/", "nazov" => "2015")
	);
	//$bublinkoveMenu = false;

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
	//$PravyPanelZlozenie = false;
	$PravyPanelZlozenie = 'standard';
?>
<?php include "../_vlozene/header.php"; echo "\n"; ?>
<!-- Start HEAD special -->
	<link rel="stylesheet" type="text/css" href="/_css/folio-gallery.css" />
	<link rel="stylesheet" type="text/css" href="/_css/colorbox/colorbox.css" />
<!-- End HEAD special -->
<?php include "../_vlozene/vrch-stranky.php"; echo "\n"; ?>



<?php 
	// error_reporting (E_ALL ^ E_NOTICE);
	// photo gallery settings
	$mainFolder    = '../_fotoalbumy/2016';		// folder where your albums are located - relative to root
	$albumsPerPage = '10';						// number of albums per page
	$itemsPerPage  = '10';						// number of images per page    
	$thumb_width   = '135';						// width of thumbnails
	$thumb_height  = '135';						// height of thumbnails
	$extensions    = array(".jpg",".png",".gif",".JPG",".PNG",".GIF");		// allowed extensions in photo gallery
?>
			<div class="gallery" role="img">
<?php include "sablony/galeriaFunkcie.php"; ?>
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
