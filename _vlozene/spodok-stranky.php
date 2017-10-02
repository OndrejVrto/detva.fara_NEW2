<!-- END MAIN - Hlavný obsah stránky
=============================================================================================================================== -->

<?php if ($otazkyOFF !== false) {include "casto-kladene-otazky.php"; echo "\n";}; ?>
		</main>
<!-- START Include - Right Panel -->
<?php include "rightPanel.php"; echo "\n"; ?>
<!-- END Include - Right Panel -->
	</div> <!-- .row -->
</div> <!-- .container -->
<?php include "footer.php"; echo "\n"; ?>
	<!-- javaSkripty jQuery a Bootstrap sú dôležité pre fungovanie menu Bootstrap
    ============================================================================= -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/_javascripty/jquery-slim.min.js"><\/script>')</script>
    <script src="/_javascripty/popper.min.js"></script>
    <script src="/_javascripty/bootstrap.min.js"></script>
	<script $('.carousel').carousel({
				wrap: false
			})
	</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/_javascripty/ie10-viewport-bug-workaround.js"></script>