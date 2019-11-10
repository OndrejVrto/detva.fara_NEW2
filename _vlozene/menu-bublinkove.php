			<!-- START Include - Bublinkové menu -->
<?php
	$pocetBubliniek = count($bublinkoveMenu);
	$pocitadlo = 0;
	echo "\t\t\t<ol class=\"breadcrumb mt-3 text-left\">";
	echo "\n\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"sr-only\">Domov</span></a></li>";
	foreach ($bublinkoveMenu as $MYbublinkoveMenu) {
		$pocitadlo++;
		echo "\n\t\t\t\t<li class=\"breadcrumb-item";
		if ($pocitadlo == $pocetBubliniek) {
			echo " active";
		}
		echo "\">";
		if ($MYbublinkoveMenu[0] !==''){
			echo '<a href="' . $MYbublinkoveMenu[0] . '">';
			echo $MYbublinkoveMenu[1];
			echo '</a>';
		} else {
			echo $MYbublinkoveMenu[1];
		}
		echo "</li>";
	}
	echo "\n\t\t\t</ol>\n";
?>
			<!-- END Include - Bublinkové menu -->