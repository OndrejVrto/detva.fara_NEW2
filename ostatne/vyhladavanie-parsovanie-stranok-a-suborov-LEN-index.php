<?php
	
	// odchytávanie chýb
	//error_reporting(0);
	//error_reporting(E_ERROR | E_WARNING);
	error_reporting(E_ALL);

	//otvorenie spojenia
	include '../_vlozene/ConnectMyAdmin.php';
	$SQLlink = MySQLi_connect($prihlasenieSQL, $loginSQL, $passwordSQL, $databazaSQL) or die('Pripojenie k serveru zlyhalo!');
	$SQLlink->set_charset("utf8");
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	// vytvorenie FULTEXTového kľúča nad tabuľkou
	$dotaz = "ALTER TABLE `search_data` ADD FULLTEXT `searchINDEX` (`title_upraveny`, `nadpis_upraveny`, `obsah`);";
	MySQLi_query($SQLlink, $dotaz) or die("Nepodarilo sa vyhodnotiť dotaz (VYTVOR FULTEXT) !");

	//uzavretie spojenia
	MySQLi_Close($SQLlink);
	
?>