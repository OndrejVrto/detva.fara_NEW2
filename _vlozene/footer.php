<!-- START Include - Footer -->
<footer class="container" role="contentinfo">
	<div class="row">
		<section class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<h1>Kontakt</h1>
			<address>
				<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i><br>
				<strong>Rímsko-katolícky farský úrad sv. Františka Assiského</strong><br>
				Partizánska ul. 64<br>
				962 12&nbsp;&nbsp;&nbsp;Detva<br>
				<i class="fa fa-phone fa-lg" aria-hidden="true"></i><br>
				(045) 54 55 243<br>
				<i class="fa fa-envelope fa-lg" aria-hidden="true"></i><br>
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
     	<section class="footerHIGH col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mx-0">
			<h1>Myšlienka dňa</h1>
			<!-- START PHP - Myslienka --><?php include "myslienka.php"; ?>
			<blockquote class="lead myslienka">
				<p class="mb-0"><?php echo $udaje["citat"]; ?></p>
				<footer class="blockquote-footer"><strong><?php echo $udaje["autor"]; ?></strong></footer>
			</blockquote>
			<!-- END PHP - Myslienka -->
			<div class="text-center">
				<div class="pociadlo">
					<!-- START PHP - Počítadlo -->
					<i class="fa fa-line-chart fa-lg" aria-hidden="true">&nbsp;&nbsp;</i>
					<?php include "pocitadlo.php"; ?><span title="Dnešný dátum: <?php echo $den; ?>"><strong>Návštevnosť dnes:&nbsp;&nbsp;</strong><?php echo $vysledokDnes; ?></span>
					<br>
					<span title="Počítadlo spustené 23.03.2016 o 12:00"><strong>Celková návštevnosť:&nbsp;&nbsp;</strong><?php echo $vysledok; ?></span>
					<!-- END PHP - Počítadlo -->
					<p class="text-center" id="copyright">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Farský úrad Detva</p>
				</div>
			</div>
		</section>
	</div>
</footer>
<!-- END Include - Footer -->