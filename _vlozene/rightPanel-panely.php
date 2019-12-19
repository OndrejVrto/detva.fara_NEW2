<?php switch ($PanelID['NazovPanelu']) {
			case "Oznamy-TXT":
?>				 <div class="position-static">
					<h3>Aktuálne oznamy</h3>
					<p>Liturgicke oznamy 22.02.2016 - 28.02.2016</p>
					<!-- Button trigger modal -->
					<div class="text-center">
						<button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#exampleModal">Rozbaliť ...</button>
					</div>
					<!-- Modal -->
					<div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h3 class="modal-title" id="exampleModalLabel">Aktuálne farské oznamy</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
								<ul class="list-unstyled">
<?php	
	// vloží triedu funkcií správ
	include_once $path . "/spravy-a-aktuality/spravy-funkcie.php";
	echo nacitatTextak()[0];
?>
								</ul>
								<a target="_blank" href="/_spravy/oznamy-pdf/Liturgicke%20oznamy%2022.02.2016%20-%2028.02.2016.pdf">Kompletné liturgicke oznamy v pdf</a><br>
						  </div>
						</div>
					  </div>
					</div>
				</div>
<?php	
break; case "Meniny":
?>
				<!-- START PHP - Meniny --><?php $path = $_SERVER['DOCUMENT_ROOT']; include_once $path . "/_vlozene/meniny.php"; echo "\n"; ?>
				<p class="mx-2"><strong>Dnes je</strong><br><?php  echo $dneska; ?></p>
				<p class="mx-2"><strong>Meniny má</strong><br><?php  echo $meniny_dnes; ?></p>
				<p class="mx-2"><strong>Zajtra má meniny</strong><br><?php  echo $meniny_zajtra; ?></p>
				<!-- END PHP - Meniny -->
<?php
break; case "Vyvoj":
	// kod pre potreby vyvoja
	$vlozka = "<span class=\"text-info font-weight-bold\">";
	echo "\t\t\t\t";
	echo '<h3>Pre potreby vývoja</h3>';
	echo '<div class="mx-2 my-0 text-left text-monospace">';
	echo $vlozka. "PHP_SELF:</span> " . $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $vlozka. "REQUEST_URI:</span> " . $_SERVER['REQUEST_URI'];
	echo "<br>";
	echo "<br>";
	echo $vlozka. "SERVER_NAME:</span> " . $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $vlozka. "HTTP_HOST:</span> " . $_SERVER['HTTP_HOST'];
	echo "<br><br>";
	echo $vlozka. "SCRIPT_NAME:</span> " . $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	echo $vlozka. "SCRIPT_FILENAME:</span> " . $_SERVER['SCRIPT_FILENAME'];
	echo "<br><br>";
	echo $vlozka. "QUERY_STRING:</span> " . $_SERVER['QUERY_STRING'];
	echo "<br>";
	echo $vlozka. "\$_GET p=</span> ";
	if (isset($_GET["p"])){
		echo $_GET["p"];
	} else {
		echo 'neexistuje';
	}
	echo "</div>\n";
break; case "OsobneUdaje":
?>				
				<h3>Ochrana osobných údajov</h3>
				<a target="_blank" href="https://gdpr.kbs.sk/"><img height="100" title="GDPR, Ochrana osobných údajov" src="/_data/spolocne/gdpr.svg" alt="GDPR, Ochrana osobných údajov"/></a>
<?php
break; case "PochodZaZivot":
?>
				<a href="http://www.pochodzazivot.sk/"><img src="/_data/spolocne/pochod-za-zivot-2019.svg" height="150" title="Pochod za život 2019" alt="Pochod za život" /></a>
<?php
break; case "Myslienka":
include "myslienka.php";
?>
				<h3>Myšlienka dňa</h3>
				<!-- START PHP - Myslienka -->
				<blockquote class="blockquote m-0">
					<p class="mx-2 my-0 text-left"><?php echo $udaje["citat"]; ?></p>
					<div class="text-right mx-2 my-0 blockquote-footer"><strong><?php echo $udaje["autor"]; ?></strong></div>
				</blockquote>
				<!-- END PHP - Myslienka -->
<?php
break; case "LinkBreviarBiblia": 
?>
				<h3>Odkazy</h3>
				<p class="text-left">
					<a target="_blank" title="Liturgia hodín – denná modlitba rímskokatolíckej Cirkvi; modlia sa ju kňazi, rehoľníci a aj laici" href="http://breviar.sk/">
					<img title="Liturgia hodín" alt="Liturgia hodín" src="/_data/spolocne/breviar.png">
					Liturgia hodín
					</a>
					<br>
					Denná modlitba rímskokatolíckej Cirkvi; modlia sa ju kňazi, rehoľníci a aj laici
				</p>
				<p class="text-left">
					<a target="_blank" title="Sväté písmo - biblia on-line; vyhľadávanie; generovanie súradníc; konkordancie" href="http://www.svatepismo.sk/">
					<img title="Sväté písmo" alt="Sväté písmo" src="/_data/spolocne/biblia.png">
					Sväté písmo
					</a>
					<br>
					Biblia on-line; vyhľadávanie; generovanie súradníc; konkordancie
				</p>
<?php
break; case "VyveskaOznamy":
?>
				<h3>Výveska - oznamy</h3>
				<!-- <iframe rel="nofollow" width="230" height="250" src="http://spravy.vyveska.sk/js?format=square&amp;numberOfPosts=8&amp;title=Spr%C3%A1vy&amp;speed=3&amp;mode=normal&amp;width=230"></iframe> -->
<?php
break; case "VyveskaAkcie":
?>
				<h3>Výveska - akcie</h3>
				<!-- <iframe rel="nofollow" class="noScrolling" name="widget" src="http://widget.vyveska.sk/show-widget/?widgetId=203Poj"></iframe> -->
<?php
break; case "CitanieNaDnes":
?>
				<h3>Čítanie na dnes</h3>
				<!-- <a href="http://lc.christ-net.sk/"><img src="http://lc.christ-net.sk/?banner=2&colors=eeeeee;323232;323232;eeeeee" alt='Liturgické čítania na dnes'/></a> -->
<?php
break; case "Menu":
?>
				<p>Rozparsované čítania z lc.kbs.sk</p>			
<?php
break; case "Linky":
?>
				<p>Linky na rôzne čítania.</p>				
<?php
break; default:
?>
				<!-- !!! POZOR !!! Položka neexistuje. Možná chyba v názve položky -->
				<p>Na tejto časti stránky sa pracuje.</p>
<?php
}
?>