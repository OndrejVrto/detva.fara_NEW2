<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/inicializacne-konstanty-stranok.php";
?>
<!DOCTYPE html>
<html lang="sk">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="language" content="Slovak">
	<!-- po vložení stránky na server zaregistruj stránku na Googli a v Bing-u
	Návod je tu: https://kinsta.com/blog/google-site-verification/ -->
	<!-- <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/> -->
	<meta name="google" content="noimageindex, notranslate">
	<meta name="robots" content="<?php if($nastavenieRobotsIndex===true){ echo'index'; } else { echo 'noindex'; }
								       if($nastavenieRobotsFolow===true){ echo', follow'; } else { echo ', nofollow'; }?>">
	<meta name="author" content="<?php echo $autor; ?>">
	
	<title><?php echo $titulokStranky; ?></title>
	
	<meta name="description" content="<?php echo $popisStranky; ?>">
	
	<!--  Ikony stránky generované cez realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="/_ikony/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/_ikony/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/_ikony/favicon-16x16.png">
	<link rel="manifest" href="/_ikony/site.webmanifest">
	<link rel="mask-icon" href="/_ikony/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/_ikony/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-config" content="/_ikony/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
	<!--  Štýly stránky - hlavné-->
	<!--  Ikony -->
	<link rel="stylesheet" type="text/css" href="/_css/FontAwesome/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="/_css/FontAwesome/css/solid.css">	
	<link rel="stylesheet" type="text/css" href="/_css/FontAwesome/css/regular.css">	
	<!--  Vzhľady -->
	<link href="/_css/detva-fara-custom.css" rel="stylesheet" type="text/css" title="Základný štýl">
	<link href="/_css/detva-fara-flatly.css" rel="alternate stylesheet" type="text/css" title="Flatly">
	<link href="/_css/detva-fara-sandstone.css" rel="alternate stylesheet" type="text/css" title="Sandstone">
	<!--  Animácie -->
	<link rel="stylesheet" type="text/css" href="/_css/animate.min.css">
		
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	 <!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
