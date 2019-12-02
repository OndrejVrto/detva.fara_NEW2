<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'ostatne->vyhladavanie';
	$pocetVysledkovHladania = 6;
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";

	// predvyplnenie poľa Input naposledy hľadanou hodnotou.
	// poľe sa pre istotu ošetrí na html znaky
	if (isset($_GET['search'])) {
		$prevodni_tabulka_mala = Array('        '=>' ', '       '=>' ', '      '=>' ', '     '=>' ', '    '=>' ', '   '=>' ', '  '=>' ',); // medzery 8 zž 2 nahradiť 1
		$hladanaHodnota = $_GET['search'];
		$hladanaHodnota =  strtr($hladanaHodnota, $prevodni_tabulka_mala);
		$hladanaHodnota = htmlentities($hladanaHodnota);
	} else { $hladanaHodnota = ''; }
	$hladanaHodnota = "value=\"". $hladanaHodnota ."\"";

// hlavný script	
	// i pro multi-byte (napr. UTF-8)
	$prevodni_tabulka = Array(
		  'ä'=>'a', 'Ä'=>'A', 'á'=>'a', 'Á'=>'A', 'a'=>'a', 'A'=>'A', 'a'=>'a', 'A'=>'A', 'â'=>'a', 'Â'=>'A',
		  'č'=>'c', 'Č'=>'C', 'ć'=>'c', 'Ć'=>'C', 'ď'=>'d', 'Ď'=>'D', 'ě'=>'e', 'Ě'=>'E', 'é'=>'e', 'É'=>'E',
		  'ë'=>'e', 'Ë'=>'E', 'e'=>'e', 'E'=>'E', 'e'=>'e', 'E'=>'E', 'í'=>'i', 'Í'=>'I', 'i'=>'i', 'I'=>'I',
		  'i'=>'i', 'I'=>'I', 'î'=>'i', 'Î'=>'I', 'ľ'=>'l', 'Ľ'=>'L', 'ĺ'=>'l', 'Ĺ'=>'L', 'ń'=>'n', 'Ń'=>'N',
		  'ň'=>'n', 'Ň'=>'N', 'n'=>'n', 'N'=>'N', 'ó'=>'o', 'Ó'=>'O', 'ö'=>'o', 'Ö'=>'O', 'ô'=>'o', 'Ô'=>'O',
		  'o'=>'o', 'O'=>'O', 'o'=>'o', 'O'=>'O', 'ő'=>'o', 'Ő'=>'O', 'ř'=>'r', 'Ř'=>'R', 'ŕ'=>'r', 'Ŕ'=>'R',
		  'š'=>'s', 'Š'=>'S', 'ś'=>'s', 'Ś'=>'S', 'ť'=>'t', 'Ť'=>'T', 'ú'=>'u', 'Ú'=>'U', 'ů'=>'u', 'Ů'=>'U',
		  'ü'=>'u', 'Ü'=>'U', 'u'=>'u', 'U'=>'U', 'u'=>'u', 'U'=>'U', 'u'=>'u', 'U'=>'U', 'ý'=>'y', 'Ý'=>'Y',
		  'ž'=>'z', 'Ž'=>'Z', 'ź'=>'z', 'Ź'=>'Z', ','=>'',  '.'=>'-', '<'=>' ', '>'=>' ',
		  '        '=>' ', '       '=>' ', '      '=>' ', '     '=>' ', '    '=>' ', '   '=>' ', '  '=>' ',   // medzery 8 zž 2 nahradiť 1
	);
	
$vysledkyVystup = "";

// Otestuje či je vložená nejaká hodnota v premennej "search"
if (!isset($_GET['search']) or $_GET['search']=='') {
	$hladanyRetazec = 'Prázdny reťazec';
} else {
	
	//pripojenie k databáze
	include_once $path . "/_vlozene/ConnectMyAdmin.php";

	$link = mysqli_connect($prihlasenieSQL, $loginSQL, $passwordSQL, $databazaSQL) or die('Pripojenie k serveru zlyhalo!');
	$link->set_charset("utf8");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	//čistenie hľadaného textu vo viacerých krokoch
	// O. orginál text
	$hladanyRetazec0 = $_GET['search'];
	//echo "VSTUP\t" . $hladanyRetazec0 . "\n<br>\n";

	// 2. odstránenie diakritiky
	$hladanyRetazec1 =  strtr($hladanyRetazec0, $prevodni_tabulka);
	//echo "ZNAKY&nbsp;>\t" . $hladanyRetazec1 . "\n<br>\n";
	
	// 3. zmenšenie všetkých písmen
	$hladanyRetazec3 = strtolower($hladanyRetazec1);
	//echo "MALE&nbsp;&nbsp;>\t" . $hladanyRetazec3 . "\n<br>\n";
	
	// 4. trim
	$hladanyRetazec4 = trim($hladanyRetazec3);
	//echo "TRIM&nbsp;&nbsp;>" . $hladanyRetazec4 . "\n<br>\n\n";
	
	// 5. odstránenie eskejpovacích znakov pre ochranu SQL
	$hladanyRetazec5 = $link->real_escape_string($hladanyRetazec4);
	//echo "SQL&nbsp;&nbsp;&nbsp;>\t" . $hladanyRetazec5 . "\n<br>\n";

	// 1. odstránenie html znakov
	$hladanyRetazec = htmlentities($hladanyRetazec5);
	//echo "HTML&nbsp;&nbsp;>\t" . $hladanyRetazec . "\n<br>\n<br>\n";
	

	$dotaz1 = "SELECT *, LOCATE(\"" . $hladanyRetazec . "\", obsah_upraveny) as poloha, MATCH(title_upraveny, nadpis_upraveny, obsah_upraveny) AGAINST('";
	$dotaz1 .= $hladanyRetazec . "' IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION) as score, ";
	$dotaz1 .= "((LENGTH(obsah_upraveny) - LENGTH(REPLACE(obsah_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))+";
	$dotaz1 .= "((LENGTH(title_upraveny) - LENGTH(REPLACE(title_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*3 +";
	$dotaz1 .= "((LENGTH(nadpis_upraveny) - LENGTH(REPLACE(nadpis_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*2 AS count ";
	$dotaz1 .= "FROM search_data WHERE MATCH(title_upraveny, nadpis_upraveny, obsah_upraveny) AGAINST('";
	$dotaz1 .= $hladanyRetazec . "' IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION) ORDER BY score DESC";
	
	//WITH QUERY EXPANSION
	
	//echo $dotaz . "\n<br>\n";
	$vysledok = mysqli_query($link, $dotaz1) or die("1. Nepodarilo sa vyhodnotiť dotaz!");
	//echo "Počet nájdených vyhovujúcich výsledkov A: <b>".mysqli_num_rows($vysledok)."</b><br>";
	//echo "\n<br>\n";
	if (mysqli_num_rows($vysledok)==0) {
		$dotaz2 = "SELECT subor, pripona, typ_suboru, score_manualne as count, LOCATE(\"" . $hladanyRetazec0 . "\", obsah) as poloha, link, title, nadpis, obsah, ";
		$dotaz2 .= "(((LENGTH(obsah_upraveny) - LENGTH(REPLACE(obsah_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))+";
		$dotaz2 .= "((LENGTH(title_upraveny) - LENGTH(REPLACE(title_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*3 +";
		$dotaz2 .= "((LENGTH(nadpis_upraveny) - LENGTH(REPLACE(nadpis_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*2 )*score_manualne AS score ";
		$dotaz2 .= "FROM search_data WHERE ";
		$dotaz2 .= "obsah_upraveny LIKE '%" . $hladanyRetazec . "%' or ";
		$dotaz2 .= "title_upraveny LIKE '%" . $hladanyRetazec . "%' or ";
		$dotaz2 .= "nadpis_upraveny LIKE '%" . $hladanyRetazec . "%' ORDER BY score DESC";
		
		//echo $dotaz . "\n<br>\n";
		$vysledok = mysqli_query($link, $dotaz2) or die("2. Nepodarilo sa vyhodnotiť dotaz!");
		//echo "Počet nájdených vyhovujúcich výsledkov B: <b>".mysqli_num_rows($vysledok)."</b><br>";
	}
	

	if (mysqli_num_rows($vysledok)==0) {
		$vysledkyVystup .= "\t\t\t\t". "<p class=\"mx-5 mb-3 mt-n3\">Hľadaný výraz nepriniesol žiadne výsledky ...</p>";
		$vysledkyVystup .= "\n\t\t\t</div>";
		$vysledkyVystup .= "\n\t\t</div>\n";
	} else {

		$pocetCelkovy = mysqli_num_rows($vysledok);
		$vysledkyVystup .= "\t\t\t\t". "<p class=\"mx-5 mb-3 mt-n3\">Počet výsledkov: <span class=\"font-weight-bold\">" . $pocetCelkovy ."</span></p>";
		$vysledkyVystup .= "\n\t\t\t</div>";
		$vysledkyVystup .= "\n\t\t</div>\n";			
		
		$aktivnaStranka = htmlentities($link->real_escape_string($_GET['p']));
		
		//echo $aktivnaStranka;
		$pocetStran = ceil( $pocetCelkovy / $pocetVysledkovHladania);
		//echo mysqli_num_rows($vysledok)."\n<br>";
		//echo $pocetStran;
		$url_zaciatok = "/vyhladavanie/";

		if ($aktivnaStranka > $pocetStran){
			$aktivnaStranka=$pocetStran;
		}
		if ($aktivnaStranka < 1){
			$aktivnaStranka = 1;
		}
		
		$dotaz1 .= " LIMIT " . $pocetVysledkovHladania . " OFFSET " . ($aktivnaStranka-1) * $pocetVysledkovHladania;
		$vysledok = mysqli_query($link, $dotaz1) or die("1. Nepodarilo sa vyhodnotiť dotaz!");

		if (mysqli_num_rows($vysledok)==0) {
			$dotaz2 .= " LIMIT " . $pocetVysledkovHladania . " OFFSET " . ($aktivnaStranka-1) * $pocetVysledkovHladania;
			$vysledok = mysqli_query($link, $dotaz2) or die("2. Nepodarilo sa vyhodnotiť dotaz!");
		}

		while($pole=mysqli_fetch_array($vysledok)){
			if ($pole["pripona"]==NULL){
				$ikona = '';
				$titulok = $pole["title"];
			} else {
				$titulok = urldecode ($pole["obsah"]);
				$ikona = "<i class=\"fa ";
				switch ($pole['pripona']) {
					case "jpg": $ikona .= "fa-file-photo-o";		break;
					case "bmp": 
					case "gif": $ikona .= "fa-file-picture-o";      break;
					case "pdf": $ikona .= "fa-file-pdf-o";          break;
					case "xlsx": 
					case "xls": $ikona .= "fa-file-excel-o";        break;
					case "pptx":
					case "ppt": $ikona .= "fa-file-powerpoint-o";   break;
					case "wav":
					case "mp4":
					case "mp3": $ikona .= "fa-file-sound-o";        break;
					case "csv";
					case "txt": $ikona .= "fa-file-text-o";         break;
					case "mpg";					
					case "mov":					
					case "avi": $ikona .= "fa-file-video-o";        break;
					case "docx":
					case "doc": $ikona .= "fa-file-word-o";         break;
					case "rar":
					case "zip": $ikona .= "fa-file-zip-o";          break;
					default:  $ikona .= "fa-file-o";
				}
				$ikona .= " mr-2\" aria-hidden=\"true\"></i>";
			}
			
			$vysledkyVystup .= "\n\t\t<div class=\"card py-2 px-3 mb-2\">";
			$vysledkyVystup .= "\n\t\t\t<a class=\"h5\" href=\"" . $pole["link"] .  "\"\n\t\t\t\t title=\"" . $titulok . "\" >" . $ikona . urldecode ($pole["nadpis"]) . "</a>";
			$vysledkyVystup .= "\n\t\t\t<a class=\"text-decoration-none text-success\" href=\"" . $pole["link"] .  "\">\n\t\t\t\t" . urldecode (substr($pole["link"], 1)) .  "</a>";
			$vysledkyVystup .= "\n\t\t\t<span class=\"text-break\">" . urldecode (substr($pole["obsah"], 0 , 140 ));
			if (strlen($pole["obsah"]) >= 140 ){ $vysledkyVystup .= "&nbsp;..."; }
			$vysledkyVystup .= "</span>";
			$vysledkyVystup .= "\n\t\t</div>";
		}
		
		// vloží pagination
		include_once $path . "/_vlozene/funkcie-paginations.php";
		$vysledkyVystup .= "\n\n\t\t<div class=\"container-fluid pt-4\">";
		$vysledkyVystup .= pagination_vrto($aktivnaStranka, $pocetStran, $url_zaciatok, '/' . $hladanyRetazec0 , '', false, 0, 3 );
		$vysledkyVystup .= "\t\t</div>\n";
	}

	MySQLi_Close($link);
}
?>
</head>
<body>

	<div class="container"> <!-- START - Hlavný .container -->
	
		<div class="row align-items-center">
			<div class="col-2 col-sm-1">
				<a class="navbar-brand p-0 pl-lg-3 pr-lg-5 m-0" href="/"><img width="58" title="Erb mesta Detva" src="/_data/spolocne/Erb-mesta-Detva.png" alt="Erb mesta Detva. Tri smreky."/></a>
			</div>
			<div class="col">
				<form class="input-group input-group-lg m-auto p-4">
					<input onkeypress="return SearchEnter2(event)" class="form-control "  type="search" name="search" id="PoleSearch_2" aria-label="Search"
						   <?php echo $hladanaHodnota;?>>  <!-- Naposledy hľadaná hodnota -->
					<span class="input-group-append">
					<button onclick="return SearchKlik2()" class="btn btn-warning" type="button" name="submit2" value="send" id="submit2"><i class="fa fa-search" aria-hidden="true"></i></button>
					</span>
				</form>
<?php echo $vysledkyVystup; ?>

	</div> <!-- END - Hlavný .container -->

	<!-- START - Individuálne skripty na konci stranky -->
	<script>
		function SearchKlik2(){
			var input = document.getElementById("PoleSearch_2").value
			var ocistenyInput = input.replace(/\?/g, '');
			if (ocistenyInput==="") {
				window.location.replace('http://detva.fara.new/vyhladavanie');
			} else{
				window.location.replace('http://detva.fara.new/vyhladavanie/1/' + ocistenyInput);
			}
		}
		function SearchEnter2(e) {
			// vykonaj len v prípade stlačenia ENTER
			if (e.keyCode == 13) {
				var input = document.getElementById("PoleSearch_2").value
				var ocistenyInput = input.replace(/\?/g, '');
				if (ocistenyInput==="") {
				window.location.replace('http://detva.fara.new/vyhladavanie');
			} else{
				window.location.replace('http://detva.fara.new/vyhladavanie/1/' + ocistenyInput);
				}
				return false;
			}
		}		
	</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/_javascripty/ie10-viewport-bug-workaround.js"></script>
	<!-- END   - Individuálne skripty na konci stranky -->

</body>
</html>
