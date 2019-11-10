		<!-- START Include - Right Panel -->
<?php 
if ($PravyPanelZlozenie == false) {
	echo "\t<!-- Stránka neobsahuje - Right Panel -->\n";
} else {
	echo "\t\t<aside class=\"col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4\" role=\"complementary\">";
	if(!isset($PravyPanelZlozenie) or $PravyPanelZlozenie =='standard') { 
		$PravyPanelZlozenie = array(
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'Meniny'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => false, "PevnaVyska" => 365, "Role" => false, "NazovPanelu" => 'VyveskaOznamy'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => 360, "Role" => false, "NazovPanelu" => 'CitanieNaDnes'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => false, "PevnaVyska" => 365, "Role" => false, "NazovPanelu" => 'VyveskaAkcie'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'LinkBreviarBiblia'),
			array('CestaSuboru' => "rightPanel-panely.php", "Tlaciaren" => true, "PevnaVyska" => false, "Role" => false, "NazovPanelu" => 'PochodZaZivot')
		);
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