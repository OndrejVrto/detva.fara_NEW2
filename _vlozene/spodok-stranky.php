
<!-- ============================================================================================================================== -->
<?php
	switch ($nazovVolajucejStranky) {
		case "Hlavná Stránka": break;
		default: echo "\t\t</div>\n";
	}
?>
<!-- END MAIN - Hlavný obsah stránky -->

		</div>
		<!-- END - container "ExportSearch" na vyhľadávanie -->
<?php if ($otazkyOFF !== false) {echo PHP_EOL; include "casto-kladene-otazky.php"; echo PHP_EOL;}; ?>

		</main>
		<!-- END - hlavný stĺpec -->
		
<?php include "rightPanel.php"; echo "\n"; ?>

	</div>
	<!-- END - Hlavný .row -->
	
	<!-- START - Kotva na návrat na začiatok stránky -->
	<div class="row">
		<a href="#top" class="mx-auto"><i class="fas fa-chevron-up fa-2x" aria-hidden="true"></i></a>
	</div>
	<!-- END - Kotva na návrat na začiatok stránky -->

</div>
<!-- END - Hlavný .container -->

<!-- START Include - Footer -->
<?php include "footer.php"; echo "\n"; ?>
<!-- END Include - Footer -->

<!-- START - JavaSkripty spoločné -->
	<!-- jQuery a Bootstrap sú dôležité pre fungovanie menu Bootstrap
    ============================================================================= -->
    <script type="text/javascript" src="/_javascripty/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="/_javascripty/jquery-slim.min.js"><\/script>')</script>
    <script type="text/javascript" src="/_javascripty/popper.min.js"></script>
    <script type="text/javascript" src="/_javascripty/bootstrap.js"></script>
	<!-- <script type="text/javascript" src="/_javascripty/styleswitcher.js"></script> -->
<?php
	if ($caruselOFF === 'JedenNahodnyObrazok' or $caruselOFF === false){
	} else{
	echo"\t<script> $('.carousel').carousel({
				wrap: true
				})
	</script>\n";
	}
?>
	<script>
		$(function () {
			var nua = navigator.userAgent
			var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
			if (isAndroid) {
				$('select.form-control').removeClass('form-control').css('width', '100%')
			}
		})

		// funkcie na presmerovanie stránky s vyhľadávačom
		function SearchKlik(){
			var input = document.getElementById("PoleSearch_1").value
			var ocistenyInput = input.replace(/\?/g, '');
			if (ocistenyInput==="") {
				window.location.replace('http://detva.fara.new/vyhladavanie');
			} else{
				window.location.replace('http://detva.fara.new/vyhladavanie/1/' + ocistenyInput);
			}
		}
		function SearchEnter(e) {
			// vykonaj len v prípade stlačenia ENTER
			if (e.keyCode == 13) {
				var input = document.getElementById("PoleSearch_1").value
				var ocistenyInput = input.replace(/\?/g, '');
				if (ocistenyInput==="") {
					window.location.replace('http://detva.fara.new/vyhladavanie');
				} else{
					window.location.replace('http://detva.fara.new/vyhladavanie/1/' + ocistenyInput);
				}
				return false;
			}
		}
	</script>	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="/_javascripty/ie10-viewport-bug-workaround.js"></script>
<!-- END - JavaSkripty spoločné -->
