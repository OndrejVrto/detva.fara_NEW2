			<!-- START Include - Bublinkové menu - Automaticky generované pre FotoAlbumy -->
<?php
    echo "\t\t\t<ol class=\"breadcrumb mt-3 text-left\">\n";
	echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span class=\"sr-only\">Domov</span></a></li>\n";
	echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/fotogaleria/zoznam-galerii\">Fotogaléria</a></li>\n";		

	if ($nazovGalerie!='zoznam-galerii'){
		echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/fotogaleria/" . str_replace(" ", '%20', $nazovGalerie) . "/1/\">" . $title . "</a></li>\n";
	}
	if (isset($nazovAlbumu)){
		echo "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/fotogaleria/" . str_replace(" ", '%20', $nazovGalerie . "/" . $nazovAlbumu) . "/1/\">" . $titleALBUM . "</a></li>\n";
	}
	if ($nazovGalerie!='zoznam-galerii'){
		echo "\t\t\t\t<li class=\"breadcrumb-item active\">List " . $cisloListu . "</li>\n";
	}
	echo "\t\t\t</ol>\n";
?>
			<!-- END Include - Bublinkové menu - Automaticky generované pre FotoAlbumy -->