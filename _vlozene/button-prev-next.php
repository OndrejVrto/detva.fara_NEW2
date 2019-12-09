<?php
function tlacitkaDopreduDozadu ($aktualnaStranka, $maximumStranok, $odsadenie = 4, $textVzad = 'Späť', $textVpred = 'Vpred') {
	
	$aktualnaURL = rtrim($_SERVER['SCRIPT_NAME'], ".php");

	$posun = "\n";
	for ($k=1; $k<=$odsadenie; $k++){
		$posun .= "\t";
	}
	$pracovna = $posun . '<!-- START - Tlačítka Dopredu a Dozadu  -->';
	$pracovna .= $posun . '<div class="btn-toolbar justify-content-between" role="toolbar">';
	
	if ($aktualnaStranka>2) {
		$pracovna .= $posun . "\t" . '<a class="btn btn-outline-primary ml-0 ml-sm-5" href="' .$aktualnaURL."/".($aktualnaStranka-1)."/". '" role="button">' .$textVzad. '</a>';
	} elseif($aktualnaStranka==2){
				$pracovna .= $posun . "\t" . '<a class="btn btn-outline-primary ml-0 ml-sm-5" href="' .$aktualnaURL. '" role="button">' .$textVzad. '</a>';
	} else {
		$pracovna .= $posun . "\t" . '<a class="btn btn-outline-primary ml-0 ml-sm-5 disabled" tabindex="-1" aria-disabled="true" role="button">' .$textVzad. '</a>';
	}
	if ($maximumStranok>1 and $maximumStranok != $aktualnaStranka) {
		$pracovna .= $posun . "\t" .'<a class="btn btn-outline-primary mr-0 mr-sm-5" href="' .$aktualnaURL."/".($aktualnaStranka+1)."/". '" role="button">' .$textVpred. '</a>';
	} else {
		$pracovna .= $posun . "\t" . '<a class="btn btn-outline-primary mr-0 mr-sm-5 disabled" tabindex="-1" aria-disabled="true" role="button">' .$textVpred. '</a>';
	}	

	$pracovna .= $posun . '</div>';
	$pracovna .= $posun . '<!-- END - Tlačítka Dopredu a Dozadu  -->';
	$pracovna .= "\n";
	
	return $pracovna;
}