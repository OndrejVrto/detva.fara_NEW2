<?php
	function vytvorMENU ($vstup, $menuHlavne, $konstantyStranok) {

		if (!array_key_exists($vstup, $menuHlavne)) {
			return false;
		}
		
		$pracovny = '';
		$titulok = '';
		
		foreach($menuHlavne[$vstup] as $polozkaMenu) {
			$pracovny .= "\t\t\t\t\t\t\t";
			if (!is_array($polozkaMenu)){
				$pracovny .= '<div class="dropdown-divider" role="separator"></div>';
			} else {
				if (array_key_exists($polozkaMenu[0], $konstantyStranok["Popis Stránky"])) { 
					if ($konstantyStranok["Popis Stránky"][$polozkaMenu[0]]!==''){
						$titulok = "title=\"" . $konstantyStranok["Popis Stránky"][$polozkaMenu[0]] . "\" ";
					} else { $titulok = ''; }
				}
				$pracovny .= "<a class=\"dropdown-item " . $polozkaMenu[1]. "\" href=\"" . str_replace(" ", '%20', $polozkaMenu[2]) . "\" " . $titulok . ">". $polozkaMenu[3] . "</a>";
			}
			$pracovny .= "\n";
		}
		return $pracovny;
	}


	function vytvorMENU_index ($vstup, $menuHlavne, $konstantyStranok) {

		if (!array_key_exists($vstup, $menuHlavne)) {
			return false;
		}
		
		$pracovny = '';
		$titulok = '';
		$trieda = '';
		foreach($menuHlavne[$vstup] as $polozkaMenu) {
			$pracovny .= "\t\t\t\t\t";
			if (!is_array($polozkaMenu)){
				$pracovny .= "\t<hr>";
			} else {
				
				if ($polozkaMenu[1]!==''){ 
					$trieda = "class=\"" . $polozkaMenu[1] . "\" ";
				}
				if (array_key_exists($polozkaMenu[0], $konstantyStranok["Popis Stránky"])) { 
					$titulok = "title=\"" . $konstantyStranok["Popis Stránky"][$polozkaMenu[0]] . "\" ";
				}
				
				$pracovny .= "<li " . $titulok . "class=\"list-group-item\"><a " . $trieda . "href=\"" . str_replace(" ", '%20', $polozkaMenu[2]) . "\" >". $polozkaMenu[3] . "</a></li>";
				$trieda = '';
				$titulok = '';
			}
		$pracovny .= "\n";
		}
		
		return $pracovny;
	}

?>
<!-- START Include - Menu -->
<div class="d-print-none static-top pt-3">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded" aria-label="Menu stránky">
			<button 
				class="navbar-toggler" 
				type="button" 
				data-toggle="collapse" 
				data-target="#navbarNavDropdown" 
				aria-controls="navbarNavDropdown" 
				aria-expanded="false" 
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon align-middle"></span>
				<span class="h4 align-middle">&nbsp;&nbsp;Menu</span>
			</button>
			<!-- <a class="navbar-brand my-2 py-0 ml-2 mr-4 mr-xl-5" href="/">Farnosť Detva</a> -->
			<a class="navbar-brand p-0 ml-lg-3 mr-lg-5 m-0" href="/"><img width="40" title="Erb mesta Detva. Tri zelené smreky." src="/_data/spolocne/Erb-mesta-Detva.png" alt=""/></a>
			<div id="navbarNavDropdown" class="collapse navbar-collapse" >
				<ul class="navbar-nav">
					<li class="nav-item dropdown mr-lg-1">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" 
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">Farnosť</a>
						<div class="dropdown-menu" role="menu">
<?php	echo vytvorMENU ("Farnosť", $menuHlavne, $konstantyStranok); ?>
						</div>
					</li>
				
					<li class="nav-item dropdown mr-lg-1">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" 
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">Spoločenstvá</a>
						<div class="dropdown-menu" role="menu">
<?php	echo vytvorMENU ("Spoločenstvá", $menuHlavne, $konstantyStranok); ?>
						</div>
					</li>
					<li class="nav-item dropdown mr-lg-1">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" 
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">Liturgia</a>
						<div class="dropdown-menu" role="menu">
<?php	echo vytvorMENU ("Liturgia", $menuHlavne, $konstantyStranok); ?>
						</div>
					</li>
					<li class="nav-item dropdown mr-lg-1">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" 
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">Fotogaléria</a>
						<div class="dropdown-menu" role="menu">
<?php	echo vytvorMENU ("Fotogaléria", $menuHlavne, $konstantyStranok); ?>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item dropdown mr-lg-3">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" 
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">Dekanát</a>
						<div class="dropdown-menu dropdown-menu-right" role="menu">
<?php	echo vytvorMENU ("Dekanát", $menuHlavne, $konstantyStranok); ?>
						</div>
					</li>
					<li>
						<form class="input-group mt-2 mt-lg-0">
							<input onkeypress="return SearchEnter(event)" class="form-control" type="search" name="search" id="PoleSearch_1" aria-label="Search">
							<span class="input-group-append">
								<button onclick="return SearchKlik()" class="btn btn-warning" type="button" name="submit1" value="send" id="submit1"><i class="fa fa-search" aria-hidden="true"></i></button>
							</span>
						</form>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- END Include - Menu -->