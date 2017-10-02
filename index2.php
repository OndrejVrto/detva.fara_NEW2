<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>File_get_contents/cURL timeout</title>
</head>
<body>
	

<h1>File_get_contents/cURL timeout</h1>	

<?php 
/**
 * cURL
 * @param  [type] $url [description]
 * @return [type]      [description]
 */
function curlContent($url, $timeout = 20) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($c, CURLOPT_URL, $url);
	$result = curl_exec($c);
	curl_close($c);
	return $result;
}

/**
 * file_get_contents
 * @param  [type] $url     [description]
 * @param  float  $timeout [description]
 * @return [type]          [description]
 */
function fgcContent($url, $timeout = 6) {
	$context = stream_context_create(
		array('http' =>
			array(
				'timeout' => $timeout
			)
		)
	);
	return @file_get_contents($url, false, $context);
}

$time_start = microtime(true);

//$testFile = "http://$_SERVER[SERVER_NAME]" . substr($_SERVER["PHP_SELF"], 0, strrpos($_SERVER["PHP_SELF"], "/")) . "/sleep.php";
//$testFile = "http://detva.fara.sk/test/sleep.php";
$testFile = "http://www.zivotopisysvatych.sk/litcal.py?format=xml&dopredu=20&pamdni=1";
echo $testFile;
echo '<br><br>';
//$file = curlContent($testFile);
$file = fgcContent($testFile);


$time_end = microtime(true);

if (!$file) {
	echo "<p>Status: <b>Timeout</b></p>";
}
else { 
	echo $file;
}

echo "<p>Execution time: " . round($time_end - $time_start, 2) . " s</p>";

?>

</body>
</html>