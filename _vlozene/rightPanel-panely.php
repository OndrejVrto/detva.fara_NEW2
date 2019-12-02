<?php switch ($PanelID['NazovPanelu']) {
			case "Meniny":
?>
				<!-- START PHP - Meniny --><?php $path = $_SERVER['DOCUMENT_ROOT']; include_once $path . "/_vlozene/meniny.php"; echo "\n"; ?>
				<p class="meniny"><strong>Dnes je</strong><br><?php  echo $dneska; ?></p>
				<p class="meniny"><strong>Meniny má</strong><br><?php  echo $meniny_dnes; ?></p>
				<p class="meniny"><strong>Zajtra má meniny</strong><br><?php  echo $meniny_zajtra; ?></p>
				<!-- END PHP - Meniny -->
<?php
break; case "OsobneUdaje":
?>				
				<h3>Ochrana osobných údajov</h3>
				<a target="_blank" href="https://gdpr.kbs.sk/"><img width="200" title="Kniha s kľúčom" src="/_data/spolocne/gdpr.jpg" alt="GDPR, Ochrana osobných údajov"/></a>
<?php
break; case "PochodZaZivot":
?>
				<a href="http://www.pochodzazivot.sk/"><img src="/_data/spolocne/pochod-za-zivot.png" width="150" alt="Pochod za život" /></a>
<?php
break; case "Myslienka":
include "myslienka.php";
?>
				<h3>Myšlienka dňa</h3>
				<!-- START PHP - Myslienka -->
				<blockquote class="lead myslienka">
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