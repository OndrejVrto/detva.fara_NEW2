<?php

	$path = $_SERVER['DOCUMENT_ROOT'];	
    $tempDir = "/_data/svgQRcode/";

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	// Remove anything which isn't a word, whitespace, number
	// or any of the following caracters -_~,;[]().
	// If you don't need to handle multi-byte characters
	// you can use preg_replace rather than mb_ereg_replace
	$file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '-', $actual_link);
	// Remove any runs of periods
	$file = mb_ereg_replace("([\.]{2,})", '-', $file);
	$file = "QR_".$file.".svg";
	
	// Hľadá súbor SVG a ak ho nenájde tak vytvorí nový súbor SVG s QR kódom URL adresy
	if (!file_exists($path.$tempDir.$file)) {
		// Zdroj class: http://phpqrcode.sourceforge.net
		// PHP QR Code is open source (LGPL) library for generating QR Code
		include_once $path . "/_vlozene/QR/qrlib.php";
		//$svgCode = QRcode::svg($text, $elemId = false, $outFile = false, $level = QR_ECLEVEL_L, $width = false, $size = false, $margin = 4, $compress = false) 
		QRcode::svg($actual_link, $actual_link, $path.$tempDir.$file, QR_ECLEVEL_L, $width = 110, false , $margin = 0);
	}

    echo "<img width=\"110\" title=\"QR kód tejto stránky.\" src=\"".$tempDir.$file."\" alt=\"QR kód tejto stránky.\"/>";	