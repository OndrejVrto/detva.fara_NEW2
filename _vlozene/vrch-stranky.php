</head>
<body>
<!--<div class="pozdrav text-center hidden-xs">
	"Pochválený buď Ježiš Kristus! Vitajte na internetovej stránke farnosti Detva ,želáme Vám požehnaný deň."
</div> -->
<?php
	if (!isset($nadpisStrankyPreTlac)) { 
		$nadpisStrankyPreTlac = 'Podstránka farnosti Detva';
	}
	include "menu.php"; echo "\n";
	include "carousel.php"; echo "\n";
?>
<div class="container">
	<div class="row">
		<div class="d-print-inline-block text-center">
			<h2><?php echo $nadpisStrankyPreTlac; ?></h2>
		</div>
<?php
	if ($PravyPanelZlozenie == false) {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\" role=\"main\">\n";
	} else {
		echo "\t\t<main class=\"col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8\" role=\"main\">\n";
	}
	if (isset($bublinkoveMenu) and $bublinkoveMenu !== false) {	
		if (isset($nazovGalerie)){
			include "menu-bublinkove-albumy.php"; echo "\n";	
		} else {
			include "menu-bublinkove.php"; echo "\n";
		}
	}
	if (isset($vedeliSteZeOFF) and $vedeliSteZeOFF == true) {
		include "vedeli-ste-ze.php"; echo "\n";
	}
?>

<!-- START MAIN - Hlavný obsah stránky
=============================================================================================================================== -->