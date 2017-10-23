<!-- END MAIN - Hlavný obsah stránky
=============================================================================================================================== -->
		</div> <!-- END container na export -->
<?php if ($otazkyOFF !== false) {include "casto-kladene-otazky.php"; echo "\n";}; ?>

		</main> <!-- END hlavný stĺpec -->
		
<?php include "rightPanel.php"; echo "\n"; ?>

	</div> <!-- .row -->
	<div class="row"><!-- kotva na návrat k Menu -->
		<a href="#top" class="mx-auto"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>
	</div>
</div> <!-- .container -->

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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/_javascripty/ie10-viewport-bug-workaround.js"></script>
<!-- END - JavaSkripty spoločné -->
