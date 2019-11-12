<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'ostatne->vyhladavanie';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- START - Špeciálne HEAD pre túto stránku -->
<!-- END   - Špeciálne HEAD pre túto stránku -->
<?php
	include $path . "/_vlozene/vrch-stranky.php"; echo "\n";

	// predvyplnenie poľa Input naposledy hľadanou hodnotou.
	// poľe sa pre istotu ošetrí na html znaky

	if (isset($_GET['search'])) {
		$prevodni_tabulka_mala = Array('        '=>' ', '       '=>' ', '      '=>' ', '     '=>' ', '    '=>' ', '   '=>' ', '  '=>' ',); // medzery 8 zž 2 nahradiť 1
		$hladanaHodnota = $_GET['search'];
		$hladanaHodnota =  strtr($hladanaHodnota, $prevodni_tabulka_mala);
		$hladanaHodnota = htmlentities($hladanaHodnota);
	} else { $hladanaHodnota = ''; }
	$hladanaHodnota = "value=\"". $hladanaHodnota ."\"";
?>
			<form class="input-group input-group-lg m-auto p-4">
				<input onkeypress="return SearchEnter2(event)" class="form-control"  type="search" name="search" id="PoleSearch_2" aria-label="Search"
						<?php echo $hladanaHodnota;?>>  <!-- Naposledy hľadaná hodnota -->
				<span class="input-group-append">
					<button onclick="return SearchKlik2()" class="btn btn-warning" type="button" name="submit2" value="send" id="submit2"><i class="fa fa-search" aria-hidden="true"></i></button>
				</span>
			</form>
			
<div class="container galeria">
		<!--  Vzor z Google -->
		<div class="card shadow px-4 mx-4">
			<h3 class=""><a href="http://detva.fara.new" target="_blank">Farnosť Detva</a></h3>
			<div class="">
				<div class="" style="white-space:nowrap">
					<cite class="">detva.fara.new</cite>
				</div>
				<span class="">Pôstna duchovná obnova vo farnosti <em>Detva</em>. Plagát - Postna duchovná obnova v <em>Detve</em> 2017. Združenie apoštolov Božieho milosrdenstva Vás srdečne pozýva&nbsp;...</span>
			</div>
		</div>
<!-- 		<div class="card shadow p-4 m-4">
			<h3 class=""><a href="http://detva.fara.new" target="_blank">Farnosť Detva</a></h3>
			<div class="">
				<div class="" style="white-space:nowrap">
					<cite class="">detva.fara.new</cite>
				</div>
				<span class="">Pôstna duchovná obnova vo farnosti <em>Detva</em>. Plagát - Postna duchovná obnova v <em>Detve</em> 2017. Združenie apoštolov Božieho milosrdenstva Vás srdečne pozýva&nbsp;...</span>
			</div>
		</div>	 -->	
<br>

<?php 
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
  'ž'=>'z', 'Ž'=>'Z', 'ź'=>'z', 'Ź'=>'Z', ','=>'',  '.'=>'-' , 
  '        '=>' ', '       '=>' ', '      '=>' ', '     '=>' ', '    '=>' ', '   '=>' ', '  '=>' ',   // medzery 8 zž 2 nahradiť 1
);

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
	
	echo "VSTUP\t\t>" . $hladanyRetazec0 . "\n<br>\n";

	// 1. odstránenie html znakov
	$hladanyRetazec1 = htmlentities($hladanyRetazec0);
	echo "HTML\t\t>" . $hladanyRetazec1 . "\n<br>\n";
	
	// 2. odstránenie diakritiky
	$hladanyRetazec2 =  strtr($hladanyRetazec1, $prevodni_tabulka);
	echo "ZNAKY\t\t>" . $hladanyRetazec2 . "\n<br>\n";
	
	// 3. zmenšenie všetkých písmen
	$hladanyRetazec3 = strtolower($hladanyRetazec2);
	echo "MALE\t\t>" . $hladanyRetazec3 . "\n<br>\n";
	
	// 4. odstránenie eskejpovacích znakov pre ochranu SQL
	$hladanyRetazec4 = trim($hladanyRetazec3);
	echo "TRIM\t\t>" . $hladanyRetazec4 . "\n<br>\n\n";
	
	// 5. odstránenie eskejpovacích znakov pre ochranu SQL
	$hladanyRetazec = $link->real_escape_string($hladanyRetazec4);
	echo "SQL\t\t>" . $hladanyRetazec . "\n<br>\n<br>\n";

	$dotaz = "SELECT *, LOCATE(\"" . $hladanyRetazec . "\", obsah) as poloha, MATCH(title_upraveny, nadpis_upraveny, obsah) AGAINST('";
	$dotaz .= $hladanyRetazec . "' IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION) as score, ";
	$dotaz .= "((LENGTH(obsah) - LENGTH(REPLACE(obsah, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))+";
	$dotaz .= "((LENGTH(title_upraveny) - LENGTH(REPLACE(title_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*3 +";
	$dotaz .= "((LENGTH(nadpis_upraveny) - LENGTH(REPLACE(nadpis_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*2 AS count ";
	$dotaz .= "FROM search_data WHERE MATCH(title_upraveny, nadpis_upraveny, obsah) AGAINST('";
	$dotaz .= $hladanyRetazec . "' IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION) ORDER BY score DESC";
	
	//WITH QUERY EXPANSION
	
	echo $dotaz . "\n<br>\n";
	$vysledok = mysqli_query($link, $dotaz) or die("1. Nepodarilo sa vyhodnotiť dotaz!");
	echo "Počet nájdených vyhovujúcich výsledkov A: <b>".mysqli_num_rows($vysledok)."</b><br>";
	echo "\n<br>\n";
	if (mysqli_num_rows($vysledok)==0) {
		$dotaz = "SELECT score_manualne as count, LOCATE(\"" . $hladanyRetazec . "\", obsah) as poloha, link, title, nadpis, obsah, ";
		$dotaz .= "(((LENGTH(obsah) - LENGTH(REPLACE(obsah, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))+";
		$dotaz .= "((LENGTH(title_upraveny) - LENGTH(REPLACE(title_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*3 +";
		$dotaz .= "((LENGTH(nadpis_upraveny) - LENGTH(REPLACE(nadpis_upraveny, '" . $hladanyRetazec . "', '')))/LENGTH('" . $hladanyRetazec . "'))*2 )*score_manualne AS score ";
		$dotaz .= "FROM search_data WHERE ";
		$dotaz .= "obsah LIKE '%" . $hladanyRetazec . "%' or ";
		$dotaz .= "title_upraveny LIKE '%" . $hladanyRetazec . "%' or ";
		$dotaz .= "nadpis_upraveny LIKE '%" . $hladanyRetazec . "%' ORDER BY score DESC;";
		
		//echo $dotaz . "\n<br>\n";
		$vysledok = mysqli_query($link, $dotaz) or die("2. Nepodarilo sa vyhodnotiť dotaz!");
		echo "Počet nájdených vyhovujúcich výsledkov B: <b>".mysqli_num_rows($vysledok)."</b><br>";
	}
?>

<?php
    // výpis výsledku
    echo "\t\t<br><br>\n\t\t\t<table width=\"100%\" border=\"5\">
          <thead>
            <tr>
 				<th>SCORE</th>
				<th>BODY</th>
				<th>POLOHA</th>				
				<th>LINK</th>
				<th>TITULOK</th>
				<th>NADPIS</th>
				<th>TEXT</th>
            </tr>
          </thead>
          <tbody>";
		 while($pole=mysqli_fetch_array($vysledok))
		 {
			  echo "\n\t\t\t<tr>
				<td>" .$pole["score"]. "</td>
				<td>" .$pole["count"]. "</td>
				<td>" .$pole["poloha"]."</td>
				<td>" .$pole["link"].  "</td>
				<td>" .$pole["title"]. "</td>
				<td>" .$pole["nadpis"]."</td>
				<td>" .$pole["obsah"]. "</td>";
			 echo "\n\t\t\t</tr>";
		 }
    echo "\n\t\t</tbody>\n\t</table>";

	
	MySQLi_Close($link);
}
?>
		</div>
<?php include $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - Individuálne skripty na konci stranky -->
<!-- END   - Individuálne skripty na konci stranky -->
</body>
</html>
