
<!-- END MAIN - Hlavný obsah stránky
=============================================================================================================================== -->

		</div>
		<!-- END - container "ExportSearch" na vyhľadávanie -->

<?php if ($otazkyOFF !== false) {include "casto-kladene-otazky.php"; echo "\n";}; ?>

		</main> <!-- END - hlavný stĺpec -->
		
<?php include "rightPanel.php"; echo "\n"; ?>

	</div> <!-- END - Hlavný .row -->
	
	<!-- Kotva na návrat na začiatok stránky -->
	<div class="row">
		<a href="#top" class="mx-auto"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>
	</div>
	
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
    <script src="/_javascripty/bootstrap.min.js"></script>
	<script> $('.carousel').carousel({
				wrap: false
			})
	</script>
	<script>
		$(function () {
			var nua = navigator.userAgent
			var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
			if (isAndroid) {
				$('select.form-control').removeClass('form-control').css('width', '100%')
			}
		})
	</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/_javascripty/ie10-viewport-bug-workaround.js"></script>
<!-- END - JavaSkripty spoločné -->
