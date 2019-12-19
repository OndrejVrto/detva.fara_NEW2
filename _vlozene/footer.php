<footer class="container px-4 rounded-top" >
	<div class="row">
		<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 py-2">
			<h2 class="pt-2">Kontakt</h2>
			<address class="mb-0">
				<i class="far fa-address-card fa-lg" aria-hidden="true"></i><br>
				<strong>Rímsko-katolícky farský úrad sv. Františka Assiského</strong><br>
				Partizánska ul. 64<br>
				962 12&nbsp;&nbsp;&nbsp;Detva<br>
				<i class="fas fa-phone-alt fa-lg" aria-hidden="true"></i><br>
				(045) 54 55 243<br>
				<i class="far fa-envelope fa-lg" aria-hidden="true"></i><br>
				<a href="mailto:">detva&#64;fara.sk</a><br>
				<a href="mailto:">rkfudt&#64;stonline.sk</a><br>
			</address>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 py-2">
			<h2 class="pt-2">Bohoslužby</h2>
			<dl>
				<dt><strong>Pondelok - Sobota</strong></dt>
				<dd class="ml-3">Farský kostol - 6:30, 17:30</dd>
				<dd class="ml-3">Kláštor - 7:00</dd>	
				<dt><strong>Nedeľa</strong></dt>
				<dd class="ml-3">Farský kostol - 7:45, 9:00, 10:30, 17:30</dd>
				<dd class="ml-3">Kláštor - 7:30</dd>
			</dl>
			Viac nájdete v <a href="/farnost/liturgicke-oznamy-farnosti-detva" >liturgických oznamoch</a> na daný týždeň.
		</div>
     	<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 py-2 lign-self-end">
			<div class="text-center py-4">
				<!-- START PHP - QR -->
				<?php include $path . "/_vlozene/QR.php"; echo "\n"; ?>
				<!-- END PHP - QR -->
			</div>
			<div class="text-center pt-2">
				<!-- START PHP - Počítadlo -->
				<i class="far fa-line-chart fa-lg" aria-hidden="true">&nbsp;&nbsp;</i>
				<?php include "pocitadlo.php"; ?><span title="Dnešný dátum: <?php echo $den; ?>"><strong>Návštevnosť dnes:&nbsp;&nbsp;</strong><?php echo $vysledokDnes; ?></span>
				<br>
				<span title="Počítadlo spustené 23.03.2016 o 12:00"><strong>Celková návštevnosť:&nbsp;&nbsp;</strong><?php echo $vysledok; ?></span>
				<p class="text-center mb-0" id="copyright">Copyright <i class="far fa-copyright fa-sm" aria-hidden="true"></i> 2017-<?php echo date("Y"); ?> Farský úrad Detva</p>
				<!-- END PHP - Počítadlo -->
			</div>
		</div>
	</div>
</footer>