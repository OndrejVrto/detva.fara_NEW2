<!-- START Include - Bublinkové menu 2 - Automaticky generované-->
<?php
// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Domček') {
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
	

	/*foreach ($path AS $i => $hodnota) {
		echo $hodnota;
		echo "\n<br>\n";
	}
	echo "\n<br>\n";*/
	
    // This will build our "base URL" ... Also accounts for HTTPS :)
	/*if (isset($_SERVER['HTTPS'])) {
		$base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
	} elseif (substr($_SERVER['HTTP_HOST'],0,9)=='localhost') {
		$base = "localhost:8069";
	} else {
		$base = $_SERVER['HTTP_HOST'];
	}*/
	$base = '/';
	/*echo $base;
	echo "\n<br><br>\n";	*/
    
	// Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = "\t\t\t<ol class=\"breadcrumb text-left\">\n";
	$breadcrumbs = $breadcrumbs . "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"" . $base . "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></li>\n";
	
    // Find out the index for the last value in our path array
    $last = end(array_keys($path));
	$cesta='';
    // Build the rest of the breadcrumbs
    foreach ($path AS $x => $crumb) {
		// Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = str_replace(Array('%20'), Array(' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb)));
		$cesta = $cesta . '/' . $crumb;
		//$breadcrumbs = $breadcrumbs . $separator;
        
		// If we are not on the last index, then display an <a> tag
		if ($x != $last){
            $breadcrumbs = $breadcrumbs . "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"$cesta\">$title</a></li>\n";
		// Otherwise, just display the title (minus)
		} else {
			$breadcrumbs = $breadcrumbs . "\t\t\t\t<li class=\"breadcrumb-item active\">" . $title . "</li>\n";
		}
    }
	$breadcrumbs = $breadcrumbs . "\t\t\t</ol>\n";
    // Build our temporary array (pieces of bread) into one big string :)
    //return implode($separator, $breadcrumbs);
	return $breadcrumbs;
}

echo breadcrumbs();
?>
<!-- END Include - Bublinkové menu -->