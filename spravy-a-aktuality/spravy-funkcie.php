<?php

function nacitatTextak (){
	
	global $path;
	$pracovny ='';
	$odsadenie = "\t\t\t\t";
	
	if ($handle = opendir($path . '/_spravy/oznamy-txt/')) {
		$blacklist = array('.', '..');
		while (false !== ($file = readdir($handle))) {
			if (!in_array($file, $blacklist)) {

				$subor = file_get_contents($path . '/_spravy/oznamy-txt/'.$file);
				
				$pracovny .= $odsadenie."<li>";
				$pracovny .= preg_replace("/[\r\n]+|[\r]+|[\n]+/", "</li>\n".$odsadenie."<li>", $subor);
				$pracovny .= "</li>";
			}
		}
		$pocetRiadkovTextovychSprav = substr_count($pracovny, "<li>");
		
		closedir($handle);
		return array($pracovny,$pocetRiadkovTextovychSprav);
	}
}

function odsadenie($odsadenie = 2){
	$zalomenie = "";
	for ($k=1; $k<=$odsadenie; $k++){
		$zalomenie .= "\t";
	}
	return $zalomenie;
}

function hlavickaSpravy ($titulok = '', $farba = 'Zelená', $odsadenie = 2, $cisloSpravy = '(bez označenia)') {
	
	global $farby;
	
	$zalomenie = odsadenie($odsadenie);
	
	$pracovny  = $zalomenie. '<!-- Správa č. ' .$cisloSpravy. ' -->';	
	$pracovny .= PHP_EOL .$zalomenie."\t". '<article class="card border border-' .$farby[$farba][0]. ' my-3" role="region">';
	$pracovny .= PHP_EOL .$zalomenie."\t\t". '<div class="card-header bg-' .$farby[$farba][0]. ' ' .$farby[$farba][1]. '">';
	$pracovny .= PHP_EOL .$zalomenie."\t\t\t". '<h1 class="card-title mb-0">' . $titulok. '</h1>';
	$pracovny .= PHP_EOL .$zalomenie."\t\t". '</div>';
	$pracovny .= PHP_EOL .$zalomenie."\t\t". '<div class="card-body p-3">' .PHP_EOL .PHP_EOL;

	return $pracovny;
}

function petickaSpravy ($meno = '', $datum = '', $odsadenie = 2, $cisloSpravy = '(bez označenia)') {
	
	$zalomenie = odsadenie($odsadenie);
	$pracovny  = PHP_EOL .$zalomenie."\t\t". '</div>';
	$pracovny .= PHP_EOL .$zalomenie."\t\t". '<div class="card-footer text-muted">';
	$pracovny .= PHP_EOL .$zalomenie."\t\t\t". '<span class="card-text float-left"><small>Napísal:</small>&nbsp;&nbsp;' . $meno. '</span>';
	$pracovny .= PHP_EOL .$zalomenie."\t\t\t". '<span class="card-text float-right">' . $datum. '</span>';	
	$pracovny .= PHP_EOL .$zalomenie."\t\t". '</div>';	
	$pracovny .= PHP_EOL .$zalomenie."\t". '</article>';
	$pracovny .= PHP_EOL .$zalomenie. '<!-- Správa č. ' .$cisloSpravy. ' -->' ."\n";	
	
	return $pracovny;
}