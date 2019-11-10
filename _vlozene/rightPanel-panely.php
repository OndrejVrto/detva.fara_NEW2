<?php switch ($PanelID['NazovPanelu']) {
			case "Meniny":
?>
				<!-- START PHP - Meniny --><?php include "meniny.php"; echo "\n"; ?>
				<p class="meniny"><strong>Dnes je</strong><br><?php  echo $dneska; ?></p>
				<p class="meniny"><strong>Meniny má</strong><br><?php  echo $meniny_dnes; ?></p>
				<p class="meniny"><strong>Zajtra má meniny</strong><br><?php  echo $meniny_zajtra; ?></p>
				<!-- END PHP - Meniny -->
<?php
break; case "PochodZaZivot":
?>
				<a href="http://www.pochodzazivot.sk/"><img src="/_data/spolocne/pochod-za-zivot.png" width="150" alt="Pochod za život" /></a>
<?php
break; case "LinkBreviarBiblia": 
?>
				<h2>Odkazy</h2>
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
				<h2>Výveska - oznamy</h2>
				<!-- <iframe rel="nofollow" width="230" height="250" src="http://spravy.vyveska.sk/js?format=square&amp;numberOfPosts=8&amp;title=Spr%C3%A1vy&amp;speed=3&amp;mode=normal&amp;width=230"></iframe> -->
<?php
break; case "VyveskaAkcie":
?>
				<h2>Výveska - akcie</h2>
				<!-- <iframe rel="nofollow" class="noScrolling" name="widget" src="http://widget.vyveska.sk/show-widget/?widgetId=203Poj"></iframe> -->
<?php
break; case "CitanieNaDnes":
?>
				<h2>Čítanie na dnes</h2>
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