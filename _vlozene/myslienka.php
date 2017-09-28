<?php
	include 'ConnectMyAdmin.php';

	$link = mysql_connect($prihlasenieSQL, $loginSQL, $passwordSQL) or die('Pripojenie k serveru zlyhalo!');
	mysql_set_charset('utf8', $link);
	mysql_select_db($databazaSQL, $link) or die('Nepodarilo sa oznaèi databázu!');

	$id = Date("z");
	//$id = rand(1,366);  //pri kazdom nacitani stranky sa myslienka zmeni - dobre pre kontrolu pri testovaní.
	//$id = 175;  // najdlhší text myšlienky so všetkých
	
	// treba rozdeli autora od samotnej myšlienky v databáze a potom prerobi aj tento script a CSS ktomu.
	
	$dotaz = "SELECT myslienka FROM myslienky WHERE id =" . $id;

	$vysledok = mysql_query($dotaz) or die("Nepodarilo sa vyhodnoti dotaz!");
	$udaje = MySQL_Fetch_Array($vysledok);
	
	MySQL_Close($link);
?>