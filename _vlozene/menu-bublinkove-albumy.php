<!-- START Include - Bublinkové menu 3 - Automaticky generované pre FotoAlbumy -->
<?php
function breadcrumbs3() {
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
	$base = '/';
	
    $breadcrumbs = "\t\t\t<ol class=\"breadcrumb text-left\">\n";
	$breadcrumbs = $breadcrumbs . "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"" . $base . "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></li>\n";
	
    $last = end(array_keys($path));
	$cesta='';

    foreach ($path AS $x => $crumb) {

        $title = str_replace(Array('%20'), Array(' '),ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb)));
		$title = str_replace(Array('Fotogaleria', 'Detvianske', 'vyrezavane', 'krize'), Array('Fotogaléria', 'Detvianske', 'vyrezávané', 'kríže'), $title);	
		
		$cesta = $cesta . '/' . $crumb;
		
		if ($x != $last){
			if ($x == $last-1){            		
				//echo " predposledny ";
				$breadcrumbs = $breadcrumbs . "\t\t\t\t<li class=\"breadcrumb-item active\"><a href=\"";
				$titlePred = $title;
			} else {
				//echo " ostatne ";
				$breadcrumbs = $breadcrumbs . "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"" . $cesta . "/\">" . $title . "</a></li>\n";
			}
		} else {
			//echo " posledny ";
			$breadcrumbs = $breadcrumbs . $cesta . "/\">" . $titlePred . "</a></li>\n";
		}
    }
	$breadcrumbs = $breadcrumbs . "\t\t\t</ol>\n";

	return $breadcrumbs;
}

echo breadcrumbs3();
?>
<!-- END Include - Bublinkové menu 3 - Automaticky generované pre FotoAlbumy -->