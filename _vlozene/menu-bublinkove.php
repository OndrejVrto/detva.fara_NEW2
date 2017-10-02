<!-- START Include - Bublinkové menu -->
<?php
// v adresári test je aj verzia kde sa bublinkové menu generuje automaticky z adresy URL
// porozmýšľať či nedať radšej to -> závislosť na pekných adresách URL
	$pocetBubliniek = count($bublinkoveMenu);
	$pocitadlo = 0;
	echo "\t\t\t<ol class=\"breadcrumb text-left\">";
	echo "\n\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></li>";
	foreach ($bublinkoveMenu as $MYbublinkoveMenu) {
		$pocitadlo++;
		echo "\n\t\t\t\t<li class=\"breadcrumb-item";
		if ($pocitadlo == $pocetBubliniek) {
			echo " active";
		}
		echo "\">";
		if ($MYbublinkoveMenu['html'] !==''){
			echo '<a href="' . $MYbublinkoveMenu['html'] . '">';
			echo $MYbublinkoveMenu['nazov'];
			echo '</a>';
		} else {
			echo $MYbublinkoveMenu['nazov'];
		}
		echo "</li>";
	}
	echo "\n\t\t\t</ol>\n";
?>
<!-- END Include - Bublinkové menu -->