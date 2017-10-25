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
  'ž'=>'z', 'Ž'=>'Z', 'ź'=>'z', 'Ź'=>'Z', ','=>'',  '.'=>'',
);

// Otestuje či je vložená nejaká hodnota v premennej "search"
if (!isset($_POST['search']) or $_POST['search']=='') {
	$hladanyRetazec = 'Prázdny reťazec';
} else {
	
	//pripojenie k databáz
	include '../_vlozene/ConnectMyAdmin.php';

	$link = mysqli_connect($prihlasenieSQL, $loginSQL, $passwordSQL, $databazaSQL) or die('Pripojenie k serveru zlyhalo!');
	$link->set_charset("utf8");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	//čistenie hľadaného textu vo viacerých krokoch
	// O. orginál text
	$hladanyRetazec0 = $_POST['search'];
	echo $hladanyRetazec0 . "\n<br>\n<br>\n";
	
	// 1. odstránenie diakritiky
	$hladanyRetazec1 =  strtr($hladanyRetazec0, $prevodni_tabulka);
	echo $hladanyRetazec1 . "\n<br>\n<br>\n";
	
	// 2. zmenšenie všetkých písmen
	$hladanyRetazec2 = strtolower($hladanyRetazec1);
	echo $hladanyRetazec2 . "\n<br>\n<br>\n";

	// 3. odstránenie html znakov
	$hladanyRetazec3 = htmlentities($hladanyRetazec2);
	echo $hladanyRetazec3 . "\n<br>\n<br>\n";
	
	// 4. odstránenie eskejpovacích znakov pre ochranu SQL
	$hladanyRetazec = $link->real_escape_string($hladanyRetazec3);
	echo $hladanyRetazec . "\n<br>\n<br>\n";

	$dotaz = "SELECT *,MATCH(title, nadpis, obsah) AGAINST('";
	$dotaz .= $hladanyRetazec . "' IN BOOLEAN MODE) as score FROM search_data WHERE MATCH(title, nadpis, obsah) AGAINST('";
	$dotaz .= $hladanyRetazec . "' IN BOOLEAN MODE) ORDER BY score DESC";
	
	echo $dotaz . "\n<br>\n";
	$vysledok = mysqli_query($link, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz!");
	echo "Počet nájdených vyhovujúcich výsledkov A: <b>".mysqli_num_rows($vysledok)."</b><br>";
	echo "\n<br>\n";
	if (mysqli_num_rows($vysledok)==0) {
		$dotaz =	"SELECT link, title, nadpis, obsah FROM search_data WHERE obsah LIKE '%" . $hladanyRetazec . "%'";
		echo $dotaz . "\n<br>\n";
		$vysledok = mysqli_query($link, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz!");
		echo "Počet nájdených vyhovujúcich výsledkov B: <b>".mysqli_num_rows($vysledok)."</b><br>";
	}
	
    // výpis výsledku
    echo "<table width=\"100%\" border=\"1\">
          <caption>Výsledky vyhľadávania</caption>
          <thead>
            <tr>
				<th>LINK</th>
				<th>TITULOK</th>
                <th>NADPIS</th>
                <th>TEXT</th>
            </tr>
          </thead>
          <tbody>";
		 while($pole=mysqli_fetch_array($vysledok))
		 {
			  echo "<tr>
							<td>".$pole["link"]."</td>
							<td>".$pole["title"]."</td>
							<td>".$pole["nadpis"]."</td>
							<td>".$pole["obsah"]."</td>";
			 echo "</tr>";
		 }
    echo "</tbody>
          </table>";

	
	MySQLi_Close($link);
}
?>

<div class="g">
	<h3 class="r"><a href="http://detva.fara.sk/" target="_blank">Farnosť Detva</a></h3>
	<div class="s">
		<div class="f kv _SWb" style="white-space:nowrap">
			<cite class="_Rm">detva.fara.sk/</cite>
		</div>
		<span class="st">Pôstna duchovná obnova vo farnosti <em>Detva</em>. Plagát - Postna duchovná obnova v <em>Detve</em> 2017. Združenie apoštolov Božieho milosrdenstva Vás 	srdečne pozýva&nbsp;...</span>
	</div>
</div>