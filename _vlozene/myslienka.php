<?php
	include 'ConnectMyAdmin.php';

	$link = mysqli_connect($prihlasenieSQL, $loginSQL, $passwordSQL, $databazaSQL) or die('Pripojenie k serveru zlyhalo!');
	$link->set_charset("utf8");

	$id = Date("z");
	//$id = rand(1,366);  //pri kazdom nacitani stranky sa myslienka zmeni - dobre pre kontrolu pri testovaní.
	//$id = 175;  // najdlhší text myšlienky so všetkých
	
	// treba rozdeli autora od samotnej myšlienky v databáze a potom prerobi aj tento script a CSS ktomu.
	$dotaz = "SELECT myslienka FROM myslienky WHERE id =" . $id;

	$vysledok = mysqli_query($link, $dotaz) or die("Nepodarilo sa vyhodnoti dotaz!");
	$udaje = MySQLi_Fetch_Array($vysledok);
	
	MySQLi_Close($link);
?>