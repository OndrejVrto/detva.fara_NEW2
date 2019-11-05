<?php
include 'ConnectMyAdmin.php';

$stranka = $_SERVER["REQUEST_URI"];

if(isset($_SERVER["HTTP_USER_AGENT"])) {
	$prehliadac = $_SERVER["HTTP_USER_AGENT"];
} else {
	$prehliadac = 'Chyba v názve prehliadač';
}  // nie keždá stránka má povolené sťahovanie prehliadača

if(isset($_SERVER['HTTP_REFERER'])) {
	$referencia = $_SERVER["HTTP_REFERER"];
} else {
	$referencia = 'bez referencie';
}  // nie keždá stránka má refferer. ak nie dávam tam moju hodnotu

$ignore  = array('Googlebot', 'BLEXBot', 'Yahoo', 'spider', 'bingbot', 'bot.html', 'bot.php', 'robot', 'Sitemaps', 'MegaIndex', 'index', 'Index');

$robot = false;
foreach ($ignore as $i) {
	if (strpos($prehliadac, $i) !== false) {
		$robot = true;
	}
}

// neviem preco nacitava favicon ako zvlast stranku a umelo tým navyšuje počítadlo resp zahlcuje databazu
if ($stranka!="/favicon.ico"){
	$ip = $_SERVER['REMOTE_ADDR'];
	$cas = date("H")*3600 + date("i")*60 + date("s");
	$den = date("Y-m-d");
	
	$link = mysqli_connect($prihlasenieSQL, $loginSQL, $passwordSQL,$databazaSQL);
	$link->set_charset("utf8");
	
	if ($link){
			if ($robot) {
				// kontroluje či stránku neprezerá indexový robot napr. Google. Ak áno počítadlo = 0 alebo nezapíše nič
				// $sql_ins = "INSERT INTO hostia SET ip ='".$ip."', pocet ='0', cas ='".$cas."', datum ='".$den."', prehliadac ='".$prehliadac."', stranka ='".$stranka."';";
				$sql_ins = "INSERT INTO hostia SET ip ='".$ip."', pocet ='0', cas ='".$cas."', datum ='".$den."', prehliadac ='I-Robot -> ".$prehliadac."', stranka ='".$stranka."', referencia ='".$referencia."';";
				// echo 'vraj true';
			} else {
				$sql1 = "SELECT * FROM hostia WHERE ip ='".$ip."' AND datum ='".$den."' AND prehliadac ='".$prehliadac."';";
				$result = mysqli_query($link, $sql1);
				// echo '<br>1: '.$sql1;
				if (mysqli_num_rows($result)>0){
					$row = mysqli_fetch_assoc($result);
					$sql2 = "SELECT MAX(cas) AS posledny_cas FROM hostia WHERE ip ='".$ip."' AND datum ='".$den."' AND pocet ='1';";
					// echo '<br>2: '.$sql2;
					$result = mysqli_query($link, $sql2);
					$row = mysqli_fetch_assoc($result);
					$rozdiel = ($row['posledny_cas']-$cas<0) ? ($cas - $row['posledny_cas']) : ($row['posledny_cas'] - $cas);
					if ($rozdiel>1800){
						// ak záznam existuje a prešlo 30min tak vytvorí nový záznam s počítadlom = 1
						$sql_ins = "INSERT INTO hostia SET ip ='".$ip."', pocet ='1', cas ='".$cas."', datum ='".$den."', prehliadac ='".$prehliadac."', stranka ='".$stranka."', referencia ='".$referencia."';";
						// echo '<br>3: '.$sql_ins;
					} else {
						// ak záznam existuje a najnovší čas je menší ako 30min tak vytvorí nový záznam s počítadlom = 0
						$sql_ins = "INSERT INTO hostia SET ip ='".$ip."', pocet ='0', cas ='".$cas."', datum ='".$den."', prehliadac ='".$prehliadac."', stranka ='".$stranka."', referencia ='".$referencia."';";
						// echo '<br>4: '.$sql_ins;
					}
				} else {
					// ak neexistuje záznam tak vytvorí nový
					$sql_ins = "INSERT INTO hostia SET ip ='".$ip."', pocet ='1', cas ='".$cas."', datum ='".$den."', prehliadac ='".$prehliadac."', stranka ='".$stranka."', referencia ='".$referencia."';";
					//echo '<br>5: '.$sql_ins. '<br><br>';
				}
			}
			$result = mysqli_query($link, $sql_ins);

	$sql_vystup = "SELECT SUM(pocet) AS sumapristupov FROM hostia;";
	$result = mysqli_query($link, $sql_vystup);
	$vysledok = MySQLi_Fetch_Array($result)['sumapristupov'];

	$sql_vystup2 = "SELECT SUM(pocet) AS sumadnes FROM hostia WHERE datum ='".$den."';";
	$result = mysqli_query($link, $sql_vystup2);
	$vysledokDnes = MySQLi_Fetch_Array($result)['sumadnes'];
	}
}
mysqli_close($link);
?>