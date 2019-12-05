<?php
//
// display pagination - počet stránok s rozdelením podľa mojich predstáv
// funkciu navrhol Vrťo 12/2017
//
function pagination_vrto($aktivnaStranka, $pocetStran, $url_zaciatok, $url_koniec, $id, $opacneCislovanie = false, $velkost = 0, $odsadenie = 4 ) {

	//nahradenie medzier kvoli validite HTML kodu href
	$url_zaciatok = str_replace(" ", '%20', $url_zaciatok);
	$url_koniec = str_replace(" ", '%20', $url_koniec);

	switch ($velkost) {
    case 0:
        $velkost = "";
        break;
    case 1:
        $velkost = " pagination-sm";
        break;
    case 2:
        $velkost = " pagination-lg";
        break;
	}
	if ($id!="") {
		$idtrieda = '';
		if	($id=='prve') {$idtrieda = " pb-3";}
		if	($id=='druhe') {$idtrieda = " pt-3";}
		
		$id = htmlspecialchars($id);
		$id = str_replace(array("'", '"'), array("\\'", "\\\""), $id);
		$id = ' id="' .  $id . '"';
	} else {
		$id = "";
	}

	if ($aktivnaStranka > $pocetStran){
		$aktivnaStranka=$pocetStran;
	}
	if ($aktivnaStranka < 1){
		$aktivnaStranka = 1;
	}
	
	if ($pocetStran > 1) {
		
		$vystup = '';
		
		$zalomenie = "\n";
		for ($k = 1; $k <= $odsadenie; $k++) { $zalomenie .= "\t"; }
		
		$vystup .= $zalomenie . '<nav class="justify-content-center m-0 px-0' .$idtrieda. '" aria-label="Page navigation"' . $id . '>';
		$vystup .= $zalomenie . "\t" . '<ul class="pagination' . $velkost . ' justify-content-center m-0 p-0">';

		If ($opacneCislovanie==false){
			if ($aktivnaStranka == 1) {
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>';
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '1' . $url_koniec .'">1<span class="sr-only">(aktívna)</span></a></li>';
			} else {
				$predchadzajuca_Stranka = $aktivnaStranka - 1;			
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $predchadzajuca_Stranka . $url_koniec .'" aria-label="Previous"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>';
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '1' . $url_koniec .'">1</a></li>';			
			}
			
			if ($pocetStran > 7) {
				if ($aktivnaStranka < 5){
					if ($aktivnaStranka==2){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '2' . $url_koniec .'">2</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '2' . $url_koniec .'">2</a></li>';	
					}
					if ($aktivnaStranka==3){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '3' . $url_koniec .'">3</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '3' . $url_koniec .'">3</a></li>';	
					}				
					if ($aktivnaStranka==4){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '4' . $url_koniec .'">4</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '4' . $url_koniec .'">4</a></li>';	
					}
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '5' . $url_koniec .'">5</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
					
				} elseif ($aktivnaStranka > $pocetStran - 4){
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 4) . $url_koniec .'">'. ($pocetStran - 4) .'</a></li>';
					if ($aktivnaStranka==($pocetStran - 3)){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 3) . $url_koniec .'">'. ($pocetStran - 3) .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 3) . $url_koniec .'">'. ($pocetStran - 3) .'</a></li>';	
					}
					if ($aktivnaStranka==($pocetStran - 2)){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 2) . $url_koniec .'">'. ($pocetStran - 2) .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 2) . $url_koniec .'">'. ($pocetStran - 2) .'</a></li>';	
					}
					if ($aktivnaStranka==($pocetStran - 1)){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 1) . $url_koniec .'">'. ($pocetStran - 1) .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 1) . $url_koniec .'">'. ($pocetStran - 1) .'</a></li>';	
					}
					
				} else {
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($aktivnaStranka - 1) . $url_koniec .'">'. ($aktivnaStranka - 1) .'</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . $aktivnaStranka . $url_koniec .'">'. $aktivnaStranka .'</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($aktivnaStranka + 1) . $url_koniec .'">'. ($aktivnaStranka + 1) .'</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
				}
				
			} else {
				for( $e=2; $e < $pocetStran; $e++ ) {
					if ($e == $aktivnaStranka) {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . $e . $url_koniec .'">'. $e .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $e . $url_koniec .'">'. $e .'</a></li>';					
					}
				}
			}

			if ($aktivnaStranka == $pocetStran) {
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . $pocetStran . $url_koniec .'">'. $pocetStran .'<span class="sr-only">(aktívna)</span></a></li>';
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>';
			} else {
				$dalsia_Stranka = $aktivnaStranka + 1;
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $pocetStran . $url_koniec .'">'. $pocetStran .'</a></li>';	
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $dalsia_Stranka . $url_koniec . '" aria-label="Next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>';
			}
		} else {
			// vytvorenie opačného poradia stran
			if ($aktivnaStranka == $pocetStran) {
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>';
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . $pocetStran . $url_koniec .'">1<span class="sr-only">(aktívna)</span></a></li>';
			} else {
				$predchadzajuca_Stranka = ($aktivnaStranka + 1);
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $predchadzajuca_Stranka . $url_koniec .'" aria-label="Previous"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>';
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $pocetStran . $url_koniec .'">1</a></li>';			
			}
			if ($pocetStran > 7) {
				if ($aktivnaStranka < 5){
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';					
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '5' . $url_koniec .'">'. ($pocetStran - 4) .'</a></li>';					
					if ($aktivnaStranka==4){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '4' . $url_koniec .'">'. ($pocetStran - 3) .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '4' . $url_koniec .'">'. ($pocetStran - 3) .'</a></li>';	
					}
					if ($aktivnaStranka==3){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '3' . $url_koniec .'">'. ($pocetStran - 2) .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '3' . $url_koniec .'">'. ($pocetStran - 2) .'</a></li>';	
					}				
					if ($aktivnaStranka==2){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '2' . $url_koniec .'">'. ($pocetStran - 1) .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '2' . $url_koniec .'">'. ($pocetStran - 1) .'</a></li>';	
					}
				
				} elseif ($aktivnaStranka > $pocetStran - 4){
					if ($aktivnaStranka==($pocetStran - 1)){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 1) . $url_koniec .'">2</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 1) . $url_koniec .'">2</a></li>';	
					}
					if ($aktivnaStranka==($pocetStran - 2)){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 2) . $url_koniec .'">3</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 2) . $url_koniec .'">3</a></li>';	
					}
					if ($aktivnaStranka==($pocetStran - 3)){
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 3) . $url_koniec .'">4</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 3) . $url_koniec .'">4</a></li>';	
					}
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran - 4) . $url_koniec .'">5</a></li>';					
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
				} else {
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($aktivnaStranka + 1) . $url_koniec .'">'. ($pocetStran - $aktivnaStranka - 0) .'</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($aktivnaStranka + 0) . $url_koniec .'">'. ($pocetStran - $aktivnaStranka + 1) .'</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($aktivnaStranka - 1) . $url_koniec .'">'. ($pocetStran - $aktivnaStranka + 2) .'</a></li>';
					$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="">...</a></li>';
				}
			} else {
				for( $e=2; $e < $pocetStran; $e++ ) {
					if ($e == $pocetStran-$aktivnaStranka+1) {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . ($pocetStran-$e+1) . $url_koniec .'">'. $e .'</a></li>';
					} else {
						$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . ($pocetStran-$e+1) . $url_koniec .'">'. $e .'</a></li>';
					}
				}
			}
			if ($aktivnaStranka == 1) {
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item active"><a class="page-link" href="'. $url_zaciatok . '1' . $url_koniec .'">'. $pocetStran .'<span class="sr-only">(aktívna)</span></a></li>';
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item disabled"><a class="page-link" href="#" aria-label="Next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>';
			} else {
				$dalsia_Stranka = $aktivnaStranka - 1;
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . '1' . $url_koniec .'">'. $pocetStran .'</a></li>';	
				$vystup .= $zalomenie . "\t\t" . '<li class="page-item"><a class="page-link" href="'. $url_zaciatok . $dalsia_Stranka . $url_koniec . '" aria-label="Next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>';
			}
		}
		
		$vystup .= $zalomenie . "\t" . '</ul>';
		$vystup .= $zalomenie . "</nav>\n";
		
		return $vystup;
	} else {
		return false;
	}
}