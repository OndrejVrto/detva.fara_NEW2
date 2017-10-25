<?php
	// hlavička textového súboru
	header( "Content-Type: text/plain; charset=utf-8" );
	
	// nastavenie - kolko sekund môze bezat tento cod
	set_time_limit(5*60);
	
	// odchytávanie chýb
	error_reporting(0);
	//error_reporting(E_ERROR | E_WARNING);
	//error_reporting(E_ALL);

	define ("kSERVER", 'http://localhost:8069');
	define ("bezFotogalerii", false);
	define ("VYPIS", false);
	define ("ochranaMAX", '1000');
	
	//globalne premenne
	$linky_vsetky = array();
	$ignoreListLinky = array ("/", "/cista", "mailto:" );

	//inicializacia prveho adresara
	$linkVSTUP = '/';
		
	// vynulovanie ochrany
	$ochrana = '0';
	najdi_vsetky_linky($linkVSTUP);
	//if (VYPIS){
		echo "\nPočet vykonaní funkcie: " . $ochrana . " z " . ochranaMAX;
		echo "\nBez fotogalérií: " . bezFotogalerii . "\n\n";
		var_export($linky_vsetky);	
		echo "\n\n\n";
	//}
	// vynulovanie ochrany
	$ochrana = '0';
	$pocitadlo = '0';
	//otvorenie spojenia
	include '../_vlozene/ConnectMyAdmin.php';
	$SQLlink = MySQLi_connect($prihlasenieSQL, $loginSQL, $passwordSQL, $databazaSQL) or die('Pripojenie k serveru zlyhalo!');
	$SQLlink->set_charset("utf8");
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	//vymazanie tabuľky v databáze
	$dotaz = "DROP TABLE IF EXISTS `search_data`";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (ZMAŽ TABUĽKU) !");
	
	//vytvorenie čistej tabuľky v databáze
	$dotaz = "CREATE TABLE search_data (
				id int(11) NOT NULL AUTO_INCREMENT,
				link varchar(255) COLLATE utf8_slovak_ci NOT NULL DEFAULT '',
				title varchar(255) COLLATE utf8_slovak_ci NOT NULL DEFAULT '',
				nadpis varchar(255) COLLATE utf8_slovak_ci NOT NULL DEFAULT '',
				obsah text COLLATE utf8_slovak_ci NOT NULL,
				PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR TABUĽKU) !");
	
	foreach ($linky_vsetky as $i){
		$ochrana++;
		if (VYPIS){echo "\nStránka č. " . $ochrana . "\n\n";}
		if ( $ochrana < ochranaMAX ){
			$pole = parsuj_stranku($i);
			if ($pole!=false){
				if (VYPIS){
					//docasny vystup na obrazovku
					echo 'VSTUP: ' . $pole['LINK'] . "\n";
					echo 'TITLE: ' . $pole['TITULOK'] . "\n";
					echo 'NADPIS: ' . $pole['NADPIS'] . "\n";
					echo "OBSAH:\n" . $pole['OBSAH'] . "\n\n";
				}
				$pocitadlo++;
				// naplnenie tabuľky hodnotami
				$dotaz = "INSERT INTO search_data VALUES ( 
							'" . $pocitadlo . "', 
							'" . $SQLlink->real_escape_string($pole['LINK']) . "', 
							'" . $SQLlink->real_escape_string($pole['TITULOK']) . "', 
							'" . $SQLlink->real_escape_string($pole['NADPIS']) . "', 
							'" . $SQLlink->real_escape_string($pole['OBSAH']) . "'
							)";
				// naplnenie tabuľky hodnotami
				MySQLi_query($SQLlink, $dotaz) or die("\n\nNepodarilo sa vyhodnotiť dotaz (VLOŽ ÚDAJ) !" . $pocitadlo);
			}
		}
	}
	
	echo "\nPočet vykonaní SQL: " . $ochrana . " z " . ochranaMAX;
	
	// vytvorenie FULTEXTového kľúča nad tabuľkou
	$dotaz = "ALTER TABLE search_data ADD FULLTEXT search (title, nadpis, obsah)";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR FULTEXT) !");

	//uzavretie spojenia
	MySQLi_Close($SQLlink);
	
// koniec skriptu
	


// funkcia nahradí znaky tabulátora a konce riadkov za medzeru
function replace_carriage_return($string){
    return str_replace(array("\n\r", "\n", "\r", "\t"), ' ', $string);
}

// !!! POZOR !!! funkcia je rekurzívna - tz. volá sama seba
// prechádza všetki linky na stránke a podstránkach a hľadá jedinečné linky
function najdi_vsetky_linky ($cesta){

	//globalne premenne
	global $linky_vsetky;
	global $ignoreListLinky;
	global $ochrana;
	// lokalne premenne
	$vystup = '';
	$vsetly_linky_local = array();

	$ochrana++;
	
	$dokument = new DOMDocument();
	@$dokument->loadHTMLFile(kSERVER . $cesta);

	$linky = $dokument->getElementsByTagName('a');
	foreach ($linky as $linka){
		$link = $linka->getAttribute('href');
		// vymaze vsetky kotvy z linkaov. Linky ponechá
		$link = preg_replace("/(.*)#(.*)/", "$1", $link);
		// vymaže všetky linky na súbory
		$link = preg_replace("/(.*)\..*/", "", $link);
		// ak je link v hlavnom zozname alebo
		// ak je link v ignore liste alebo 
		// ak link nezačína spetným lomítkom 
		// nezaradí sa do výberu
		if (!in_array($link, $linky_vsetky) and !in_array($link, $ignoreListLinky) and $link[1]=='/') {
			// ak je zapnutá voľba "bez fotogalérie" na true fotogalérie sa odignorujú
			if (bezFotogalerii and substr($link, 0, 13 )=='/fotogaleria/'){
			} else {
				// naplní polia lokálneho aj Globálneho zoznamu novými linkami
				$linky_vsetky[] = $link;
				$vsetly_linky_local[] = $link;
			}
		}
	}
	foreach ($vsetly_linky_local as $linka_jedna_local){
		if ( $ochrana < ochranaMAX ){
			// rekurzívna funkcia sa spustí v prípade, že sa na stránke nájdu linky ktoré ešte niesú v hlavnom poli
			najdi_vsetky_linky($linka_jedna_local);
		}
	}
}

function parsuj_stranku ($linkStranky){

	$prevodni_tabulka = Array(
	  'ä'=>'a', 'Ä'=>'A', 'á'=>'a', 'Á'=>'A', 'a'=>'a', 'A'=>'A', 'a'=>'a', 'A'=>'A', 'â'=>'a', 'Â'=>'A',
	  'č'=>'c', 'Č'=>'C', 'ć'=>'c', 'Ć'=>'C', 'ď'=>'d', 'Ď'=>'D', 'ě'=>'e', 'Ě'=>'E', 'é'=>'e', 'É'=>'E',
	  'ë'=>'e', 'Ë'=>'E', 'e'=>'e', 'E'=>'E', 'e'=>'e', 'E'=>'E', 'í'=>'i', 'Í'=>'I', 'i'=>'i', 'I'=>'I',
	  'i'=>'i', 'I'=>'I', 'î'=>'i', 'Î'=>'I', 'ľ'=>'l', 'Ľ'=>'L', 'ĺ'=>'l', 'Ĺ'=>'L', 'ń'=>'n', 'Ń'=>'N',
	  'ň'=>'n', 'Ň'=>'N', 'n'=>'n', 'N'=>'N', 'ó'=>'o', 'Ó'=>'O', 'ö'=>'o', 'Ö'=>'O', 'ô'=>'o', 'Ô'=>'O',
	  'o'=>'o', 'O'=>'O', 'o'=>'o', 'O'=>'O', 'ő'=>'o', 'Ő'=>'O', 'ř'=>'r', 'Ř'=>'R', 'ŕ'=>'r', 'Ŕ'=>'R',
	  'š'=>'s', 'Š'=>'S', 'ś'=>'s', 'Ś'=>'S', 'ť'=>'t', 'Ť'=>'T', 'ú'=>'u', 'Ú'=>'U', 'ů'=>'u', 'Ů'=>'U',
	  'ü'=>'u', 'Ü'=>'U', 'u'=>'u', 'U'=>'U', 'u'=>'u', 'U'=>'U', 'u'=>'u', 'U'=>'U', 'ý'=>'y', 'Ý'=>'Y',
	  'ž'=>'z', 'Ž'=>'Z', 'ź'=>'z', 'Ź'=>'Z', 
	);
	
	//','=>'',  '.'=>'',
	
	$dokument = new DOMDocument();
	@$dokument->loadHTMLFile(kSERVER . $linkStranky);

	$title = $dokument->getElementsByTagName('title')->item(0)->nodeValue;
	$nadpis = $dokument->getElementById('NadpisTlac')->nodeValue;
	$hlavnyObsah = $dokument->getElementById('ExportSearch');
	
	if ($title==NULL or $nadpis==NULL or $hlavnyObsah==NULL) {
		if (VYPIS){echo "!! Chyba !!\n\n";}
		return false;
	} else {
		// TITULOK - úprava
		// odstráni všetky tabulátory a konce riadkov
		$title = replace_carriage_return($title);
		// dve a viac medzier nahradí jednou medzerou
		$title = preg_replace("/ {2,}/", "", $title);
		$title = trim($title);
		$hrubyTEXT = $hlavnyObsah->nodeValue;
		// zamení všetky znaky s diakritikou na znaky bez diakritiky
		// odstráni čiarky a bodky
		$text = strtr($hrubyTEXT, $prevodni_tabulka);
		// všetky znaky malé
		$malePismena = strtolower($text);

		// NADPIS PRE TLAČ - úprava
		// odstráni všetky tabulátory a konce riadkov
		$nadpis = replace_carriage_return($nadpis);
		// dve a viac medzier nahradí jednou medzerou
		$nadpis = preg_replace("/ {2,}/", "", $nadpis);
		$nadpis = trim($nadpis);
		
		// HLAVNÝ TEXT - úprava
		// odstráni všetky tabulátory a konce riadkov
		$obsah = replace_carriage_return($malePismena);
		// dve a viac medzier nahradí jednou medzerou
		$obsah = preg_replace("/ {2,}/", " ", $obsah);
		// odstráni medzery so začiatku a s konca reťazca
		$obsah = trim($obsah);
		
		//navratova hodnota v poli
		return array('LINK'=>$linkStranky , 'TITULOK'=>$title ,'NADPIS'=>$nadpis ,'OBSAH'=>$obsah );
	}
}