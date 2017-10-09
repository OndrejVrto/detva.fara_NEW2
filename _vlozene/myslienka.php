<?php
	include 'ConnectMyAdmin.php';

	$link = mysqli_connect($prihlasenieSQL, $loginSQL, $passwordSQL, $databazaSQL) or die('Pripojenie k serveru zlyhalo!');
	$link->set_charset("utf8");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$id = Date("z");
	//$id = rand(1,366);  //pri kazdom nacitani stranky sa myslienka zmeni - dobre pre kontrolu pri testovaní.
	//$id = 365;  // najdlhší text myšlienky so všetkých
	//$id = 143;  // najkratší text myšlienky so všetkých
	
	$dotaz = "SELECT autor, citat FROM citaty WHERE id =" . $id;

	$vysledok = mysqli_query($link, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz!");
	$udaje = MySQLi_Fetch_Array($vysledok);
	
	MySQLi_Close($link);
?>