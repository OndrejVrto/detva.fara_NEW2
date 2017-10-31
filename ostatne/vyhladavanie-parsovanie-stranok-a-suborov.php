<?php
	// hlavička textového súboru
	header( "Content-Type: text/plain; charset=utf-8" );
	
	// nastavenie - kolko sekund môze bezat tento cod
	set_time_limit(5*60);
	
	// odchytávanie chýb
	error_reporting(0);
	error_reporting(E_ERROR | E_WARNING);
	//error_reporting(E_ALL);

	$time_pre = microtime(true);
	
	define ("kSERVER", 'http://detva.fara.new');
	define ("linkVSTUP", '/');  	//inicializacia prveho adresara
	//define ("linkVSTUP", '/fotogaleria/2015/2015-12-25-Betlehemci-na-fare/1/');  	//inicializacia prveho adresara	

	define ("VYPIS", false);
	define ("ochranaMAX", '2000');
	define ("scoreMANUAL", '0.1');
	
	//globalne premenne
	$linky_vsetky = array();
	$ignoreListLinky = array ("/", "/cista", "mailto:" );

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
				score_manualne float(3) NOT NULL DEFAULT '0.1',
				subor varchar(255) COLLATE utf8_slovak_ci NULL,
				pripona varchar(10) COLLATE utf8_general_ci NULL,
				typ_suboru varchar(25) COLLATE utf8_general_ci NULL,
				link varchar(255) COLLATE utf8_slovak_ci NOT NULL,
				title varchar(255) COLLATE utf8_slovak_ci NOT NULL,
				nadpis varchar(255) COLLATE utf8_slovak_ci NOT NULL,
				title_upraveny varchar(255) COLLATE utf8_slovak_ci NOT NULL,
				nadpis_upraveny varchar(255) COLLATE utf8_slovak_ci NOT NULL,
				obsah text COLLATE utf8_slovak_ci NOT NULL,
				PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR TABUĽKU) !");

	// vynulovanie ochrany
	$ochrana = '0';
	$pocitadlo = '0';
	
	
	najdi_vsetky_linky(linkVSTUP);
	
	// vytvorenie FULTEXTového kľúča nad tabuľkou
	$dotaz = "ALTER TABLE search_data ADD FULLTEXT search (title_upraveny, nadpis_upraveny, obsah)";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR FULTEXT) !");

	//uzavretie spojenia
	MySQLi_Close($SQLlink);
	
	$time_post = microtime(true);
	$exec_time = $time_post - $time_pre;
	
	echo "\nPočet vykonaní funkcie: " . $ochrana . " z " . ochranaMAX;
	echo "\nProgram trval: " . $exec_time . " s\n\n";
	var_export($linky_vsetky);	
	
// koniec skriptu
	


// !!! POZOR !!! funkcia je rekurzívna - tz. volá sama seba
// prechádza všetki linky na stránke a podstránkach a hľadá jedinečné linky
function najdi_vsetky_linky ($cesta){
	
	global $pocitadlo;
	global $linky_vsetky;
	global $ochrana;
	global $ignoreListLinky;
	global $SQLlink;
	
	$vystup = '';
	$vsetly_linky_local = array();
	
	$ochrana++;
	
	$dokument = new DOMDocument();
	@$dokument->loadHTMLFile(kSERVER . $cesta);
	
	if (preg_replace("/.*\..*/", '', $cesta)){
		// ak je v $link odkaz na Stránku
		
		// POZOR nasledujúce 3 riadky generujú chybu (Notice) ak neexistuje na stránke daný element alebo ID
		$title = $dokument->getElementsByTagName('title')->item(0)->nodeValue;
		$nadpis = $dokument->getElementById('NadpisTlac')->nodeValue;
		$hlavnyObsah = $dokument->getElementById('ExportSearch');
		
		if ($title==NULL or $nadpis==NULL or $hlavnyObsah==NULL) {
			if (VYPIS){echo "!! Chyba !!\n\n";}
			return false;
		} else {
			// TITULOK - úprava
			$title = gramatika($title);

			// NADPIS PRE TLAČ - úprava
			$nadpis = gramatika($nadpis);

			// HLAVNÝ TEXT - úprava
			$obsah = $hlavnyObsah->nodeValue;
			$obsah = gramatika($obsah);
			
			$pocitadlo++;
			// naplnenie tabuľky hodnotami
			$dotaz = "INSERT INTO search_data VALUES ( 
						'" . $pocitadlo . "',
						'" . scoreMANUAL . "',
						'NULL',
						'',
						'',
						'" . $SQLlink->real_escape_string((string)$cesta) . "', 
						'" . $SQLlink->real_escape_string((string)$title['sGramatikou']) . "', 
						'" . $SQLlink->real_escape_string((string)$nadpis['sGramatikou']) . "',
						'" . $SQLlink->real_escape_string((string)$title['bezGramatiky']) . "',
						'" . $SQLlink->real_escape_string((string)$nadpis['bezGramatiky']) . "',
						'" . $SQLlink->real_escape_string((string)$obsah['bezGramatiky']) . "'
						)";
			// naplnenie tabuľky hodnotami
			MySQLi_query($SQLlink, $dotaz) or die("\n\nNepodarilo sa vyhodnotiť dotaz (VLOŽ ÚDAJ) !" . $pocitadlo);
		}
	}

	// načítanie všetkých liniek na styránke
	$linky = $dokument->getElementsByTagName('a');

	foreach ($linky as $linka){
		$link = $linka->getAttribute('href');
		// vymaze vsetky kotvy
		$link = preg_replace("/(.*)#.*/", "$1", $link);
		// vymaže všetky linky na súbory
		//$link = preg_replace("/.*\..*/", "", $link);
		// ak je link v hlavnom zozname alebo
		// ak je link v ignore liste alebo 
		// ak link nezačína spetným lomítkom 
		// nezaradí sa do výberu
		if (!in_array($link, $linky_vsetky) and !in_array($link, $ignoreListLinky) and substr($link, 0, 1 )=='/') {
			// TITULOK súboru - úprava
			$titulokSuboru = $linka->getAttribute('title');
			$titulokSuboru = gramatika($titulokSuboru);

			// ak je v $linka odkaz na Súbor
			if (!preg_replace("/.*\..*/", '', $link)){
				// ak je v v premennej link na fotku s vyplneným titulkom alebo odkaz na hocijaký Súbor mimo adresára fotoalbumy
				if ((!preg_replace("/^\/\_fotoalbumy.*\..*/", '', $link) and $titulokSuboru['bezGramatiky']!='') or preg_replace("/^\/\_fotoalbumy.*\..*/", '', $link)){
				
					$element = $linka->nodeValue;
					$element = gramatika($element);
						
					$subor = preg_replace("/.*\/(.*)\..*/", '$1', $link);
					$subor = gramatika($subor);

					$pripona = preg_replace("/.*\.(.*)/", '$1', $link);
					$pripona = gramatika($pripona);
					
					$typSuboru = $linka->getAttribute('type');
					$typSuboru = gramatika($typSuboru);
					
					$pocitadlo++;
					// naplnenie tabuľky hodnotami
					$dotaz = "INSERT INTO search_data VALUES ( 
								'" . $pocitadlo . "',
								'" . scoreMANUAL*1.5 . "',
								'" . (string)$subor['sGramatikou'] . "',
								'" . (string)$pripona['bezGramatiky'] . "',
								'" . (string)$typSuboru['bezGramatiky'] . "',
								'" . $SQLlink->real_escape_string((string)$link) . "', 
								'" . (string)$titulokSuboru['sGramatikou'] . "',
								'" . (string)$element['sGramatikou'] . "',
								'" . (string)$titulokSuboru['bezGramatiky'] . "',
								'" . (string)$element['bezGramatiky'] . "',
								'" . (string)$subor['bezGramatiky'] . "'
								)";
					// naplnenie tabuľky hodnotami
					MySQLi_query($SQLlink, $dotaz) or die("\n\nNepodarilo sa vyhodnotiť dotaz (VLOŽ ÚDAJ) !" . $pocitadlo);
				} else {
					$link = false;
				}
			}
			
			// naplní polia lokálneho aj Globálneho zoznamu novými linkami
			if ($link){
				$linky_vsetky[]= $link;
				$vsetly_linky_local[] = $link;
			}
		}
	}
	
	// !!! rekurzívna funkcia sa spustí v prípade, že sa na stránke nájdu linky ktoré ešte niesú v hlavnom poli
	foreach ($vsetly_linky_local as $linka_jedna_local){
		if ( $ochrana < ochranaMAX ){
			najdi_vsetky_linky($linka_jedna_local);
		}
	}
}

function gramatika($vstup){
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
	if ($vstup=='' or $vstup==NULL){
		return array( 'sGramatikou'=>'' , 'bezGramatiky'=>'' );
	} else {
		// odstráni všetky tabulátory a konce riadkov
		$vystup_gramatika = str_replace(array("\n\r", "\n", "\r", "\t"), " ", $vstup);
		// dve a viac medzier nahradí jednou medzerou
		$vystup_gramatika = preg_replace("/ {2,}/", " ", $vystup_gramatika);
		// odstráni prázdne miesto na konci a na začiatku
		$vystup_gramatika = trim($vystup_gramatika);

		// odstráni diakritiku
		$vystup_bez_gramatiky = strtr($vystup_gramatika, $prevodni_tabulka);
		// všetky znaky malé
		$vystup_bez_gramatiky = strtolower($vystup_bez_gramatiky);
		
		//navratova hodnota v poli
		return array( 'sGramatikou'=>$vystup_gramatika , 'bezGramatiky'=>$vystup_bez_gramatiky );
	}

}