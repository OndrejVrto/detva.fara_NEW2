<?php
	// názov stránky v súbore: inicializacne-konstanty-stranok.php
	$nazovVolajucejStranky = 'farnost->kontakt-farsky-urad';
	
	$path = $_SERVER['DOCUMENT_ROOT'];
	include_once $path . "/_vlozene/header.php"; echo "\n";
?>
<!-- Start HEAD special -->
<!-- End HEAD special -->
<?php include_once $path . "/_vlozene/vrch-stranky.php"; echo "\n"; ?>

			<div class="well text-center">
				<h1>Kontakt na Farský úrad</h1>
				<div>
					<address>
						<i class="fas fa-map-marker-alt" aria-hidden="true"></i><br>
						<strong>Rímsko-katolícky farský úrad sv. Františka Assiského</strong><br>
						Partizánska ul. 64<br>
						962 12&nbsp;&nbsp;&nbsp;Detva<br>
						<i class="fas fa-phone-alt" aria-hidden="true"></i><br>
						(045) 54 55 243<br>
						<i class="fas fa-envelope" aria-hidden="true"></i><br>
						detva&#64;fara.sk<br>
						rkfudt&#64;stonline.sk<br>
						<i class="fas fa-globe" aria-hidden="true"></i><br>
						<a href="/">detva.fara.sk</a>
					</address>
					<iframe rel="nofollow" class="embed-responsive rounded mapyGoogle mx-auto" 
							  src="http://maps.google.sk/maps?q=48.559215,19.418877&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=48.559215,19.418877&amp;spn=0.002473,0.00456&amp;z=18&amp;output=embed"></iframe>
				</div>
			</div>
			<div class="well text-center">
				<h1>Kontakt do kláštora</h1>
				<div>
					<address>
						<i class="fas fa-map-marker-alt" aria-hidden="true"></i><br>
						<strong>Kláštor Bosých Karmelitánok</strong><br>
						ul. Jána Pavla II č.1<br>
						962 12&nbsp;&nbsp;&nbsp;Detva<br>
						<i class="fas fa-phone-alt" aria-hidden="true"></i><br>
						(045) 29 01 501<br>
						<i class="fas fa-envelope" aria-hidden="true"></i><br>
						karmel.detva&#64;gmail.com<br>
						<i class="fas fa-globe" aria-hidden="true"></i><br>
						<a rel="external" target="_blank" href="http://www.sestrydetva.bosikarmelitani.sk">sestrydetva.bosikarmelitani.sk</a>
					</address>
					<iframe rel="nofollow" class="embed-responsive mapyGoogle" 
							  src="http://maps.google.sk/maps?q=48.547789,19.401817&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=48.547789,19.401817&amp;spn=0.002473,0.00456&amp;z=18&amp;output=embed"></iframe>
				</div>
			</div>

<?php include_once $path . "/_vlozene/spodok-stranky.php"; echo "\n";?>
<!-- START - skripty na konci stranky -->
<!-- END - skripty na konci stranky -->
</body>
</html>