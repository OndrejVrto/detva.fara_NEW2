<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'Fotogaléria';

	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/inicializacne-konstanty-stranok.php";

	// funkcie špeciálne pre fotoalbum
	include_once $path . "/fotogaleria/sablony/funkcie-fotogalerie.php";
	
	//oprava gramatiky niektorých galérií po načítaní adresárov
	//POZOR prvé písmeno prvého slova v poli $OpravaGramatikyIN daj veľkým
	$title = str_replace(Array('%20', '-'), Array(' ', ' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $nazovGalerie)));
	$title = str_replace($OpravaGramatikyIN, $OpravaGramatikyOUT, $title);

	$titulokStranky = 'Farnosť Detva, Fotogaléria: ' . $title;
	if (isset($nazovAlbumu)){ $titulokStranky = $titulokStranky . ' - ' . $titleALBUM; }
	
	$nadpisStrankyPreTlac = 'Fotogaléria: ' . $title;
	if (isset($nazovAlbumu)){ $nadpisStrankyPreTlac = $nadpisStrankyPreTlac . ' - ' . $titleALBUM; }

	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
	<!--<link rel="stylesheet" type="text/css" href="/_css/folio-gallery.css" /> -->
	<link rel="stylesheet" type="text/css" href="/_css/colorbox/colorbox.css" />
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php 
include_once $path . "/_vlozene/vrch-stranky.php"; echo "\n";

echo "\t\t\t" . '<div class="gallery" role="img">';
echo $vystupHTML;
echo "\t\t\t</div>\n";


// zmaz tento docasny kod pre vlozenie VZORov
		echo "\n\n\t<!-- VZOR -->";
 		echo "\n\t<h4><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i> VZOR <i class=\"fa fa-arrow-down \" aria-hidden=\"true\"></i></h4>";
		echo "\n\n\t\t<div class=\"gallery\" role=\"img\">\n";
		if ($nazovGalerie=='zoznam-galerii'){
			include "vzory/zoznam-galerii-VZOR.php";
		} else {
			if (!isset($nazovAlbumu)){
				include "vzory/galeria-VZOR.php";
			} else {
				include "vzory/jeden-album-VZOR.php";
			}
		} 
		echo "\n\t\t</div>\n";
// zmaz tento docasny kod pre vlozenie VZORov 

include_once $path . "/_vlozene/spodok-stranky.php"; echo "\n";
?>
<!-- START - Individuálne skripty na konci stranky -->
	<script type="text/javascript" src="/_javascripty/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".albumpix").colorbox({rel:'albumpix', slideshow:true, slideshowSpeed:"4000" , maxWidth:"90%", maxHeight:"90%"});
	});
	</script>
	<script type="text/javascript" src="/_javascripty/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="/_javascripty/jquery.colorbox-sk.js"></script>
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>
