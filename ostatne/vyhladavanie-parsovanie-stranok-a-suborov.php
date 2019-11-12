<?php
	require_once "class.html2text.inc.php";
	
	// hlavička textového súboru
	header( "Content-Type: text/plain; charset=utf-8" );
	
	// nastavenie - koľko sekúnd môže bežat tento kód
	set_time_limit(5*60);
	
	// odchytávanie chýb
	//error_reporting(0);
	//error_reporting(E_ERROR | E_WARNING);
	error_reporting(E_ALL);

	define ("kSERVER", 'https://detva.fara.new');
	//define ("kSERVER", 'http://localhost:8080');
	define ("linkVSTUP", '/');  	//inicializacia prveho adresara
	//define ("linkVSTUP", '/fotogaleria/2015/1');  	//inicializacia prveho adresara	
	//define ("linkVSTUP", '/farnost/knazi-posobiaci-vo-farnosti-detva');  	//inicializacia prveho adresara	
	define ("VYPIS", false);
	define ("ochranaMAX", '1000');
	define ("scoreMANUAL", '0.1');
	
	//globalne premenne
	$linky_vsetky = array();
	$ignoreListLinky = array ("/", "/cista", "mailto:" );

	// vynulovanie ochrany
	$ochrana = '0';
	$pocitadlo = '0';

	$time_pre = microtime(true);	
	
	// hlavny skript
	$dotazDATA = "INSERT INTO `search_data` (`id`, `score_manualne`, `subor`, `pripona`, `typ_suboru`, `link`, `title`, `nadpis`, `title_upraveny`, `nadpis_upraveny`, `obsah`) VALUES \n";
	najdi_vsetky_linky(linkVSTUP);
	
	// odstráni poslednú čiarku
	$dotazDATA = substr($dotazDATA, 0 , StrLen($dotazDATA)-3);
		
	$time_post = microtime(true);
	$exec_time = $time_post - $time_pre;
	
	echo "\nPočet vykonaní funkcie: " . $ochrana . " z " . ochranaMAX;
	echo "\nProgram trval: " . round ($exec_time, 1) . " s\n\n";
	//var_export($linky_vsetky);	
	var_dump($dotazDATA);
	
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
	$dotaz = "DROP TABLE IF EXISTS `search_data`;";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (ZMAŽ TABUĽKU) !");
	
	//vytvorenie čistej tabuľky v databáze
	$dotaz = "CREATE TABLE search_data (
				id int(11) NOT NULL,
				score_manualne float(3) NOT NULL,
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
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR TABUĽKU) !");
	
	// naplnenie tabuľky hodnotami
	MySQLi_query($SQLlink, $dotazDATA) or die("\n\nNepodarilo sa vyhodnotiť dotaz (VLOŽ ÚDAJ) !" . $pocitadlo);

	// vytvorenie FULTEXTového kľúča nad tabuľkou
	$dotaz = "ALTER TABLE `search_data` ADD FULLTEXT `searchINDEX` (`title_upraveny`, `nadpis_upraveny`, `obsah`);";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR FULTEXT) !");

	//uzavretie spojenia
	MySQLi_Close($SQLlink);
	

// koniec skriptu
	


// !!! POZOR !!! funkcia je rekurzívna - tz. volá sama seba
// prechádza všetki linky na stránke a podstránkach a hľadá jedinečné linky
function najdi_vsetky_linky ($cesta){
	
	global $dotazDATA;
	global $pocitadlo;
	global $linky_vsetky;
	global $ochrana;
	global $ignoreListLinky;
	
	$vystup = '';
	$vsetly_linky_local = array();
	
	$ochrana++;
	
	$dokument = new DOMDocument();
	@$dokument->loadHTMLfile(kSERVER . $cesta);
	$dokument->normalizeDocument();
		
	// ak NIEje v $link odkaz na súbor 
	// alebo 
	// je link na stránku ktorá končí hocijakým číslom okrem /1/
	//  and !preg_replace("/.*\/[2-9]?|\d{2,}\/$/", '', $cesta
	
	if (preg_replace("/.*\..*/", '', $cesta)){
		
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
			// ziskanie cisteho HTML kodu aj s elementami
			$obsah = $dokument->saveHTML($hlavnyObsah);
			// specialna trieda pre vyber cisteho textu z html kodu
			// http://www.chuggnutt.com/html2text
			$obsah = gramatika($obsah);
			$h2t =& new html2text($obsah['bezGramatiky']);
			$obsah = $h2t->get_text();
			$obsah = gramatika($obsah);
			
			$pocitadlo++;
			// naplnenie tabuľky hodnotami
			$dotazDATA .= "('" . $pocitadlo . "',";
			$dotazDATA .= "'" . scoreMANUAL . "',";
			$dotazDATA .= "'NULL',";
			$dotazDATA .= "'',";
			$dotazDATA .= "'',";
			$dotazDATA .= "'" . (string)$cesta . "',";
			$dotazDATA .= "'" . (string)$title['sGramatikou'] . "',";
			$dotazDATA .= "'" . (string)$nadpis['sGramatikou'] . "',";
			$dotazDATA .= "'" . (string)$title['bezGramatiky'] . "',";
			$dotazDATA .= "'" . (string)$nadpis['bezGramatiky'] . "',";
			$dotazDATA .= "'" . (string)$obsah['bezGramatiky'] . "'), \n";
		}
	}

	// načítanie všetkých liniek na stránke
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
			// ak je v $linka odkaz na Súbor
			if (!preg_replace("/.*\..*/", '', $link)){
				// TITULOK súboru - úprava
				$titulokSuboru = $linka->getAttribute('title');
				// ak je v premennej link na fotku s vyplneným titulkom alebo odkaz na hocijaký Súbor mimo adresára fotoalbumy
				if ((!preg_replace("/^\/\_fotoalbumy.*\..*/", '', $link) and $titulokSuboru!=NULL) or preg_replace("/^\/\_fotoalbumy.*\..*/", '', $link)){
			
					$titulokSuboru = gramatika($titulokSuboru);				
					
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
					$dotazDATA .= "(";
					$dotazDATA .= "'" . $pocitadlo . "',";
					$dotazDATA .= "'" . scoreMANUAL*4 . "',";
					$dotazDATA .= "'" . (string)$subor['sGramatikou'] . "',";
					$dotazDATA .= "'" . (string)$pripona['bezGramatiky'] . "',";
					$dotazDATA .= "'" . (string)$typSuboru['bezGramatiky'] . "',";
					$dotazDATA .= "'" . (string)$link . "',";
					$dotazDATA .= "'" . (string)$titulokSuboru['sGramatikou'] . "',";
					$dotazDATA .= "'" . (string)$element['sGramatikou'] . "',";
					$dotazDATA .= "'" . (string)$titulokSuboru['bezGramatiky'] . "',";
					$dotazDATA .= "'" . (string)$element['bezGramatiky'] . "',";
					$dotazDATA .= "'" . (string)$subor['bezGramatiky'] . "." . (string)$pripona['bezGramatiky'] . "'), \n";
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
	  'ž'=>'z', 'Ž'=>'Z', 'ź'=>'z', 'Ź'=>'Z', ','=>'',  '.'=>'-',
	);

	if ($vstup=='' or $vstup==NULL){
		return array( 'sGramatikou'=>'xxx' , 'bezGramatiky'=>'xxx' );
	} else {
		// odstráni všetky tabulátory a konce riadkov
		$vystup_gramatika = str_replace(array("\n\r", "\n", "\r", "\t"), " ", $vstup);

		//od-eskejpuje uvodzovky
		$vystup_gramatika = str_replace(array("'", '"'), array("\\'", "\\\""), $vystup_gramatika);
		// eskejpuje tiez ale treba zapnut globalnu premennu sqllink
		//$vystup_gramatika = $SQLlink->real_escape_string($vystup_gramatika);
		
		// dve a viac medzier nahradí jednou medzerou
		$vystup_gramatika = preg_replace("/( ){2,}/", " ", $vystup_gramatika);
		// nahradí pevnú medzeru za normálnu
		$vystup_gramatika = preg_replace("/\xC2\xA0/", " ", $vystup_gramatika);
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