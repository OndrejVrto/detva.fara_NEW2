<!DOCTYPE html>
<html lang="sk">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="/images/ikony/favicon-32x32.ico" sizes="32x32"/>
		<title>Stránka nenájdená</title>
	</head>

	<body style="background-color:   background: red; /* For browsers that do not support gradients */
				 background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(255,0,0,1)); /*Safari 5.1-6*/
				 background: -o-linear-gradient(right,rgba(255,0,0,0),rgba(255,0,0,1)); /*Opera 11.1-12*/
				 background: -moz-linear-gradient(right,rgba(255,0,0,0),rgba(255,0,0,1)); /*Fx 3.6-15*/
				 background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /*Standard*/;">

		<h2 style="font-size: 32px;">Stránka nenájdená</h2>
		<p>
		Súbor, o ktorý ste požiadali, nebol na serveri nájdený. 
		<br>
		<br>
		Skúste ho nájsť z <strong><a style="font-size: 24px;" href="/index.php">hlavnej stránky</a></strong>
		<br>
		<br>
		Kód chyby: <strong>404</strong><br>
		Požadovaná stránka: <strong><script type="text/javascript">document.write(document.location)</script></strong><br><br>
		Kontakt na správcu: <strong>ondej.vrto(zavináč)google.com</strong>
		</p>

		<?php $chybovka=true; include "pocitadlo.php"; echo "\n";?>
	</body>
</html>