		<!-- START Include - Right Panel -->
<?php 
if ($PravyPanelZlozenie == false) {
	echo "\t\t\t<!-- Stránka neobsahuje - Right Panel -->\n";
} else {
	echo "\t\t<aside class=\"col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4\" >";
	if(!isset($PravyPanelZlozenie) or $PravyPanelZlozenie =='standard') { 
		$PravyPanelZlozenie = $PravyPanelStandard;
	}
	foreach ($PravyPanelZlozenie as $PanelID) {
		echo "\n\t\t\t<div class=\"rightOznamy ";
		if ($PanelID['Tlaciaren'] == false) {
			echo " hidden-print";
		}
		echo "\"";
		if ($PanelID['PevnaVyska'] !== false) {
			echo " style=\"height: ". $PanelID['PevnaVyska'] ."px;\"";
		}
		if ($PanelID['Role'] !== false) {
			echo " role=\"". $PanelID['Role'] ."\"";
		}
		echo ">";
		echo "\t<!-- RIGHT PANEL - Položka ". $PanelID['NazovPanelu'] ." (". $PanelID['CestaSuboru'] .") -->\n";
		include $PanelID['CestaSuboru'];
		echo "\t\t\t</div>";
	}
	echo "\n\t\t</aside>\n";
}
?>
		<!-- END Include - Right Panel -->