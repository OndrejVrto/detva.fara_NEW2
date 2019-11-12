
<!-- END MAIN - Hlavný obsah stránky
=============================================================================================================================== -->

		</div>  <!-- END - container "ExportSearch" na vyhľadávanie -->

<?php if ($otazkyOFF !== false) {include "casto-kladene-otazky.php"; echo "\n";}; ?>

		</main>  <!-- END - hlavný stĺpec -->
		
<?php include "rightPanel.php"; echo "\n"; ?>

	</div> <!-- END - Hlavný .row -->
	
	<div class="row">  <!-- START - Kotva na návrat na začiatok stránky -->
		<a href="#top" class="mx-auto"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>
	</div>             <!-- END - Kotva na návrat na začiatok stránky -->

</div> <!-- END - Hlavný .container -->

<!-- START Include - Footer -->
<?php include "footer.php"; echo "\n"; ?>
<!-- END Include - Footer -->

<!-- START - JavaSkripty spoločné -->
	<!-- jQuery a Bootstrap sú dôležité pre fungovanie menu Bootstrap
    ============================================================================= -->
    <script src="/_javascripty/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="/_javascripty/jquery-slim.min.js"><\/script>')</script>
    <script src="/_javascripty/popper.min.js"></script>
    <script src="/_javascripty/bootstrap.js"></script>
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
	</script>
	
	
	
	
	<script>
		// funkcie na presmerovanie stránky s vyhľadávačom
		function SearchKlik(){
			var input = document.getElementById("PoleSearch_1").value
			var ocistenyInput = input.replace(/\?/g, '');
			if (ocistenyInput==="") {
				window.location.replace('https://detva.fara.new:4433/vyhladavanie');
			} else{
				window.location.replace('https://detva.fara.new:4433/vyhladavanie/' + ocistenyInput);
			}
		}
		function SearchEnter(e) {
			// vykonaj len v prípade stlačenia ENTER
			if (e.keyCode == 13) {
				var input = document.getElementById("PoleSearch_1").value
				var ocistenyInput = input.replace(/\?/g, '');
				if (ocistenyInput==="") {
					window.location.replace('https://detva.fara.new:4433/vyhladavanie');
				} else{
					window.location.replace('https://detva.fara.new:4433/vyhladavanie/' + ocistenyInput);
				}
				return false;
			}
		}
		function SearchKlik2(){
			var input = document.getElementById("PoleSearch_2").value
			var ocistenyInput = input.replace(/\?/g, '');
			if (ocistenyInput==="") {
				window.location.replace('https://detva.fara.new:4433/vyhladavanie');
			} else{
				window.location.replace('https://detva.fara.new:4433/vyhladavanie/' + ocistenyInput);
			}
		}
		function SearchEnter2(e) {
			// vykonaj len v prípade stlačenia ENTER
			if (e.keyCode == 13) {
				var input = document.getElementById("PoleSearch_2").value
				var ocistenyInput = input.replace(/\?/g, '');
				if (ocistenyInput==="") {
					window.location.replace('https://detva.fara.new:4433/vyhladavanie');
				} else{
					window.location.replace('https://detva.fara.new:4433/vyhladavanie/' + ocistenyInput);
				}
				return false;
			}
		}		
	</script>	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/_javascripty/ie10-viewport-bug-workaround.js"></script>
<!-- END - JavaSkripty spoločné -->
