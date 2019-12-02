<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'Hlavná Stránka';

	$path = $_SERVER['DOCUMENT_ROOT'];	
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>

<a href="/stranka-2" >2</a>
<a href="/stranka-3" >3</a>
<a href="/stranka-4" >4</a>
<a href="/stranka-5" >5</a>

<?php
	// nastavenie vlastností pre "rýchlo" pridané správy načítavané zo súboru
	// Dohodnúť to s dekanom a dopracovať kód načítavania textu z klasického txt súboru
	// Išlo by o vybrané farské oznamy
	//include("_vlozene/spravy-rychle.php");
	
	// nastavenie vlastností pre archivované správy
	$pocetSprav = 4;  		// počet automaticky vložených správ na jednej stránke
	$predTerminon = True;	// zobrazuje aj správy s termínom ktorý ešte nenastal
	$vyprsanyTermin = True;	// zobrazuje aj správy s vypršanou platnosťou
	$viacStranok = True;		// zobrazí pagination na spodku stránky a načítava staršie správy
	
	include $path . "/_vlozene/spravy.php";
?>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>