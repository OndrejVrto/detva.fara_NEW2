<?php
	// určí ktorý adresár v poradí je vybratý adresár
	$key = array_search(folder_exist2($adresarVSTUPalbum), $zoznam_Adresarov);
	// zistí počet adresárov v poli
	$max = sizeof($zoznam_Adresarov) - 1;
	
	
	if ($key == 0 and $max == 0){
	// ak je v adresári len jeden album
		$Vzad = false;
		$Vpred = false;
	} elseif ($key == 0 and $max > 0) {
	// ak je vybratý prvý adresár
		$Vzad = false;
		$Vpred = $zoznam_Adresarov[1] . "/";
	} elseif ($key == $max and $max > 0) {
	// ak je vybratý posledný adresár
		$Vzad = $zoznam_Adresarov[$key-1] . "/";
		$Vpred = false;
	} else {
	// ak je adresárov viac ako 3 a vybratý je stredný adresár
		$Vzad = $zoznam_Adresarov[$key-1] . "/";
		$Vpred = $zoznam_Adresarov[$key+1] . "/";
	}
	
	if ( $Vzad != false ) {
		$XMLsuborABSvzad = nazov_suboru($Vzad);	
		$xmlVzad = new DOMDocument();
		if (!file_exists($XMLsuborABSvzad)) {
			VytvorXML($XMLsuborABSvzad);
		}
		$xmlVzad->load( $XMLsuborABSvzad );
	} else {
		$xmlVzad = false;
	}
	
	if ( $Vpred != false ) {
		$XMLsuborABSvpred = nazov_suboru($Vpred);	
		$xmlVpred = new DOMDocument();
		if (!file_exists($XMLsuborABSvpred)) {
			VytvorXML($XMLsuborABSvpred);
		}
		$xmlVpred->load( $XMLsuborABSvpred );
	} else {
		$xmlVpred = false;
	}
	

	$XMLsuborRELscript = nazov_suboru($adresarRELscriptAlbum);
	$XMLsuborABS = nazov_suboru($adresarABSalbum);
	$XMLsuborVSTUP = nazov_suboru($adresarVSTUPalbum);
	
	$xml = new DOMDocument();
	if (!file_exists($XMLsuborABS)) {
		VytvorXML($XMLsuborABS);
	}
	
	$xml->load( $XMLsuborABS );
	$titleALBUMx = $xml->getElementsByTagName( "NazovAlbumu" );
	$titleALBUM = $titleALBUMx->item(0)->nodeValue;
	
// začiatok tvorby HTML

	$zoznam_suborov_vsetkych  = scandir($adresarABSalbum);
	$zoznam_suborov_album = array();
	foreach($zoznam_suborov_vsetkych as $file) {
		$pripona = strrchr($file, '.');
		if(in_array($pripona, $extensions)) {
			array_push($zoznam_suborov_album, $file );
		}
	}
	$pocetObrazkov = count($zoznam_suborov_album);
	
	if( $pocetObrazkov == 0 ) {
		$vystupHTML = 'Nie je pridaná žiadna fotka.';
	} else {
		if (!isset($fotiek_na_stranke) or $fotiek_na_stranke <= 0){ 
			$fotiek_na_stranke = 100; 
		}
		$pocetStranok = ceil( $pocetObrazkov / $fotiek_na_stranke );
		if ($cisloListu>$pocetStranok){
			$cisloListu = $pocetStranok;
		}
		
	// vrchný pagination
		$vystupHTML .= print_hlavicka_albumu($xml, $xmlVzad, $xmlVpred);
		$vystupHTML .=  pagination_vrto($cisloListu, $pocetStranok, $adresarVSTUPalbumHTML, '/', 'prve', false, 0, 4 );	
		$vystupHTML .=	"\n\t\t\t\t" . '<div class="card-columns mb-n3">';
		
	// samotny zoznam albumov
	// klasické radenie albumov = od A-Z
		$start = ( $cisloListu * $fotiek_na_stranke ) - $fotiek_na_stranke;
		$ende = $start + $fotiek_na_stranke;
		if ($ende>$pocetObrazkov) {$ende = $pocetObrazkov;}
		$vystupHTML .=  print_foto_card($xml, $start, $ende );
		$vystupHTML .=	"\n\t\t\t\t" . '</div>' . "\n";

	// spodný pagination
		//$vystupHTML .=  pagination_vrto($aktivnaStranka, $pocetStran, $url_zaciatok, $url_koniec, $id, $opacneCislovanie = false, $velkost = 0 )
		$vystupHTML .=  pagination_vrto($cisloListu, $pocetStranok, $adresarVSTUPalbumHTML, '/', 'druhe', false, 0, 4 );	
	}


function print_hlavicka_albumu($xml, $xmlVzad, $xmlVpred){
	
	$pracovny = '';
	$zalomenie = "\n\t\t\t\t";
	
	if ($xmlVzad == false){
		$tlacitkoDOPREDU = "<button type=\"button\" class=\"btn w-10 btn-success border-success\">";		
		$tlacitkoDOPREDU .= $zalomenie . "\t\t" . '<i class="fa fa-ban" aria-hidden="true"></i>';
		$tlacitkoDOPREDU .= $zalomenie . "\t" . '</button>';
	} else {
		$vzad = $xmlVzad->getElementsByTagName( "LinkRewrite" )->item(0)->nodeValue . "/1/";
		$vzadTitulok = 'Dozadu - ' . $xmlVzad->getElementsByTagName( "NazovAlbumu" )->item(0)->nodeValue;
		$tlacitkoDOPREDU = "<button onclick=\"location.href = '" . $vzad . "';\" type=\"button\" class=\"btn w-10 btn-success border-success\" title=\"" . $vzadTitulok . '">';
		$tlacitkoDOPREDU .= $zalomenie . "\t\t" . '<i class="fa fa-backward" aria-hidden="true"></i>';
		$tlacitkoDOPREDU .= $zalomenie . "\t" . '</button>';
	}
	
	if ($xmlVpred == false){
		$tlacitkoDozadu = "<button type=\"button\" class=\"btn w-10 btn-success border-success\">";
		$tlacitkoDozadu .= $zalomenie . "\t\t" . '<i class="fa fa-ban" aria-hidden="true"></i>';
		$tlacitkoDozadu .= $zalomenie . "\t" . '</button>';

	} else {
		$vpred = $xmlVpred->getElementsByTagName( "LinkRewrite" )->item(0)->nodeValue . "/1/";
		$vpredTitulok = 'Dopredu - ' . $xmlVpred->getElementsByTagName( "NazovAlbumu" )->item(0)->nodeValue;	
		$tlacitkoDozadu = "<button onclick=\"location.href = '" . $vpred . "';\" type=\"button\" class=\"btn w-10 btn-success border-success\" title=\"" . $vpredTitulok . '">';
		$tlacitkoDozadu .= $zalomenie . "\t\t" . '<i class="fa fa-forward" aria-hidden="true"></i>';
		$tlacitkoDozadu .= $zalomenie . "\t" . '</button>';
	}
	
	$titleALBUM = $xml->getElementsByTagName( "NazovAlbumu" )->item(0)->nodeValue;
	$pocetFotiek = $xml->getElementsByTagName( "PocetFotiek" )->item(0)->nodeValue;
	$titulokAlbumu = $xml->getElementsByTagName( "TitulokAlbumu" )->item(0)->nodeValue;	
	$fotil = $xml->getElementsByTagName( "AutorFotiek" )->item(0)->nodeValue;	
		$datumDEN = $xml->getElementsByTagName( "DenFotenia" )->item(0)->nodeValue . '. ';
		$datumMES = $xml->getElementsByTagName( "MesFotenia" )->item(0)->nodeValue . '. ';
		$datumROK = $xml->getElementsByTagName( "RokFotenia" )->item(0)->nodeValue;
		if ($datumDEN=='. '){$datumDEN='';}
		if ($datumMES=='. '){$datumMES='';}
	$datumAlbumu = $datumDEN . $datumMES . $datumROK;

	
	$pracovny .= $zalomenie . '<div class="btn-group btn-block mw-100 mb-3">';
	$pracovny .= $zalomenie . "\t" . $tlacitkoDOPREDU;
	$pracovny .= $zalomenie . "\t" . '<div class="card w-80 border-success rounded-0">';	
	$pracovny .= $zalomenie . "\t\t" . '<h5 class="card-header text-white bg-success text-center rounded-0">' . $titleALBUM . '</h5>';	
	$pracovny .= $zalomenie . "\t\t" . '<div class="card-body p-3">';
	$pracovny .= $zalomenie . "\t\t\t" . '<p class="card-text">' . $titulokAlbumu . '</p>';
	$pracovny .= $zalomenie . "\t\t\t" . '<p class="card-text d-flex justify-content-between flex-wrap">';
	
	$pracovny .= $zalomenie . "\t\t\t\t" . '<small class="text-muted mr-3">' . $fotil . '</small>';
	$pracovny .= $zalomenie . "\t\t\t\t" . '<small class="text-muted mr-3">' . $pocetFotiek . ' obrázkov</small>';
	$pracovny .= $zalomenie . "\t\t\t\t" . '<small class="text-muted">' . $datumAlbumu . '</small>';	
	
	$pracovny .= $zalomenie . "\t\t\t" . '</p>';	
	$pracovny .= $zalomenie . "\t\t" . '</div>';
	$pracovny .= $zalomenie . "\t" . '</div>';	
	$pracovny .= $zalomenie . "\t" . $tlacitkoDozadu;
	$pracovny .= $zalomenie . '</div>';
	return $pracovny;
}	
	
function print_foto_card($xml, $start, $ende ){

	$pracovny = '';
	$zalomenie = "\n\t\t\t\t";
	$linkNAobrazok = $xml->getElementsByTagName( "LinkFotogaleria" )->item(0)->nodeValue;
	$linkNAthumb = $xml->getElementsByTagName( "LinkFotogaleriaThumbs" )->item(0)->nodeValue;
	
	for( $i=$start; $i<$ende; $i++ ){
		$fotkaSubor = $xml->getElementsByTagName( "Fotka" )->item($i)->getAttribute("subor");
		$fotkaPopisok = $xml->getElementsByTagName( "Fotka" )->item($i)->getElementsByTagName( "TitulokFotky" )->item(0)->nodeValue;
		
		//nahradí medzery v href - V HTML nie sú dovolené
		$file1 = str_replace(" ", '%20', $linkNAobrazok . $fotkaSubor);
		$pracovny .= $zalomenie . "\t" . '<a type="image/jpeg" class="albumpix" href="' . $file1 . '" title="' . $fotkaPopisok . '">';
		$pracovny .= $zalomenie . "\t\t" . '<div class="card shadow border-success">';
		
		$fotkaALT = $xml->getElementsByTagName( "Fotka" )->item($i)->getElementsByTagName( "AlternativnyNazov" )->item(0)->nodeValue;
		
		//nahradí medzery v href - V HTML nie sú dovolené
		$file2 = str_replace(" ", '%20', $linkNAthumb . $fotkaSubor);
		$pracovny .= $zalomenie . "\t\t\t" . '<img class="card-img-top" src="' . $file2 . "\"\n\t\t\t\t\t\t\t\t alt=\"" . $fotkaALT . '"/>';
		
		if ($fotkaPopisok!=''){
			$pracovny .= $zalomenie . "\t\t\t" . '<div class="card-body p-3">';			
			$pracovny .= $zalomenie . "\t\t\t\t" . '<p class="card-text">' . $fotkaPopisok . '</p>';
			$pracovny .= $zalomenie . "\t\t\t" . '</div>';	
		}
		
		$pracovny .= $zalomenie . "\t\t" . '</div>';
		$pracovny .= $zalomenie . "\t" . '</a>';
		$pracovny .= "\n";
	}
	
	return $pracovny;
}