<!-- START Include - Footer -->
<footer class="container" role="contentinfo">
	<div class="row">
		<section class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<h1>Kontakt</h1>
			<address>
				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><br>
				<strong>Rímsko-katolícky farský úrad sv. Františka Assiského</strong><br>
				Partizánska ul. 64<br>
				962 12&nbsp;&nbsp;&nbsp;Detva<br>
				<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><br>
				(045) 54 55 243<br>
				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><br>
				<a href="mailto:#">detva@fara.sk</a><br>
				<a href="mailto:#">rkfudt@stonline.sk</a><br>
			</address>
		</section>
		<section class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
			<h1>Bohoslužby</h1>
			<dl class="">
				<dt><strong>Pondelok - Sobota</strong></dt>
				<dd>Farský kostol - 6:30, 17:30</dd>
				<dd>Kláštor - 7:00</dd>	
				<dt><strong>Nedeľa</strong></dt>
				<dd>Farský kostol - 7:45, 9:00, 10:30, 17:30</dd>
				<dd>Kláštor - 7:30</dd>
			</dl>
			Viac nájdete v <a href="/farnost/liturgicke-oznamy-detva" >liturgických oznamoch</a> na daný týždeň.
		</section>
     	<section class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
			<div class="row mx-0">
			<h1>Myšlienka dňa</h1>
				<!-- START PHP - Myslienka -->
				<?php include "myslienka.php"; ?><p class="myslienka"><?php echo $udaje[0]; ?></p>
				<!-- END PHP - Myslienka -->
			</div>
			<div class="row pl-5 text-center">
				<div class="pociadlo">
					<!-- START PHP - Počítadlo -->
					<?php include "pocitadlo.php"; ?><span title="Dnešný dátum: <?php echo $den; ?>"><strong>Návštevnosť dnes:&nbsp;&nbsp;</strong><?php echo $vysledokDnes; ?></span>
					<br>
					<span title="Počítadlo spustené 23.03.2016 o 12:00"><strong>Celková návštevnosť:&nbsp;&nbsp;</strong><?php echo $vysledok; ?></span>
					<!-- END PHP - Počítadlo -->
					<p class="text-center" id="copyright">Copyright <sup>&copy;</sup> 2017 Farský úrad Detva</p>
				</div>
			</div>
		</section>
	</div>
</footer>
<!-- END Include - Footer -->