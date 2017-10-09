<!-- START Include - Bublinkové menu - Automaticky generované pre FotoAlbumy -->
<?php
    echo "\t\t\t<ol class=\"breadcrumb text-left\">\n";
	echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"sr-only\">Domov</span></a></li>\n";
	echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/fotogaleria/zoznam-galerii\">Fotogaléria</a></li>\n";
	if ($nazovGalerie!='zoznam-galerii'){
		echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/fotogaleria/" . $nazovGalerie . "\">" . $title . "</a></li>\n";
	}
	if (isset($nazovAlbumu)){
		echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/fotogaleria/" . $nazovGalerie . "/" . $nazovAlbumu . "/1/\">" . $titleALBUM . "</a></li>\n";
	}
	echo "\t\t\t\t<li class=\"breadcrumb-item active\">List " . $cisloListu . "</li>\n";
	echo "\t\t\t</ol>\n";
?>
<!-- END Include - Bublinkové menu - Automaticky generované pre FotoAlbumy -->