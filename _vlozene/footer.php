<footer class="container px-4" >
	<div class="row">
		<section class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
			<h2 class="pt-3">Kontakt</h2>
			<address>
				<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i><br>
				<strong>Rímsko-katolícky farský úrad sv. Františka Assiského</strong><br>
				Partizánska ul. 64<br>
				962 12&nbsp;&nbsp;&nbsp;Detva<br>
				<i class="fa fa-phone fa-lg" aria-hidden="true"></i><br>
				(045) 54 55 243<br>
				<i class="fa fa-envelope fa-lg" aria-hidden="true"></i><br>
				<a href="mailto:">detva&#64;fara.sk</a><br>
				<a href="mailto:">rkfudt&#64;stonline.sk</a><br>
			</address>
		</section>
		<section class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
			<h2 class="pt-3">Bohoslužby</h2>
			<dl class="">
				<dt><strong>Pondelok - Sobota</strong></dt>
				<dd>Farský kostol - 6:30, 17:30</dd>
				<dd>Kláštor - 7:00</dd>	
				<dt><strong>Nedeľa</strong></dt>
				<dd>Farský kostol - 7:45, 9:00, 10:30, 17:30</dd>
				<dd>Kláštor - 7:30</dd>
			</dl>
			Viac nájdete v <a href="/farnost/liturgicke-oznamy-farnosti-detva" >liturgických oznamoch</a> na daný týždeň.
		</section>
     	<section class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<h2 class="pt-3">Myšlienka dňa</h2>
			<!-- START PHP - Myslienka --><?php include "myslienka.php"; echo "\n"; ?>
			<blockquote class="lead myslienka">
				<p class="mb-0"><?php echo $udaje["citat"]; ?></p>
				<div class="blockquote-footer"><strong><?php echo $udaje["autor"]; ?></strong></div>
			</blockquote>
			<!-- END PHP - Myslienka -->
			<div class="text-center">
				<!-- START PHP - QR -->
				<?php include $path . "/_vlozene/QR.php"; echo "\n"; ?>
				<!-- END PHP - QR -->
			</div>
			<div class="text-center">
				<!-- START PHP - Počítadlo -->
				<i class="fa fa-line-chart fa-lg" aria-hidden="true">&nbsp;&nbsp;</i>
				<?php include "pocitadlo.php"; ?><span title="Dnešný dátum: <?php echo $den; ?>"><strong>Návštevnosť dnes:&nbsp;&nbsp;</strong><?php echo $vysledokDnes; ?></span>
				<br>
				<span title="Počítadlo spustené 23.03.2016 o 12:00"><strong>Celková návštevnosť:&nbsp;&nbsp;</strong><?php echo $vysledok; ?></span>
				<p class="text-center" id="copyright">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017-<?php echo date("Y"); ?> Farský úrad Detva</p>
				<!-- END PHP - Počítadlo -->
			</div>
		</section>
	</div>
</footer>