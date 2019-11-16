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
	<!-- po vložení stránky na server zaregistruj stránku na Googliv v Bing-u
	Návod je tu: https://kinsta.com/blog/google-site-verification/ -->
	<!-- <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/> -->
	<meta name="google" content="noimageindex, notranslate">
	<meta name="robots" content="<?php if($nastavenieRobotsIndex===true){ echo'index'; } else { echo 'noindex'; }
								       if($nastavenieRobotsFolow===true){ echo', follow'; } else { echo ', nofollow'; }?>">
	<meta name="author" content="<?php echo $autor; ?>">
	
	<title><?php echo $titulokStranky; ?></title>
	
	<meta name="description" content="<?php echo $popisStranky; ?>">
	
	<!--  Ikony stránky generované cez realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!--  Štýly stránky - hlavné-->
	<link rel="stylesheet" type="text/css" href="/_fonty/FontAwesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/_css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/_css/common.css">
	
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	 <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
