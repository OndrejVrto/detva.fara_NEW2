	<!-- START Include - Aktuálne oznamy z txt -->

		<!-- Verzia MODÁlne okno -->
		<div class="bg-white border border-secondary rounded p-3 my-3">
			<!-- Button trigger modal -->
			<div class="text-center">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Aktuálne farské oznamy</button>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">Aktuálne farské oznamy</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
						<ul class="list-unstyled">
<?php	echo nacitatTextak()[0];?>			
						</ul>
						<a target="_blank" href="/_spravy/oznamy-pdf/Liturgicke%20oznamy%2022.02.2016%20-%2028.02.2016.pdf">Kompletné liturgicke oznamy v pdf</a><br>
				  </div>
				</div>
			  </div>
			</div>
		</div>

		<!-- Verzia - Rozbalovacie tlačítko -->
		<div class="bg-white border border-success rounded p-3 my-3">
			<div class="row align-items-center">
				<div class="col-8 col-lg-9 text-center">
					<h2 class="">Aktuálne oznamy</h2>
					<p>Liturgicke oznamy 22.02.2016 - 28.02.2016</p>
				</div>
				<div class="col-4 col-lg-3">
					<button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#rozbalAktualneSpravy" aria-expanded="false" aria-controls="rozbalAktualneSpravy">Rozbaliť ...</button>			
				</div>
			</div>
			<div class="collapse" id="rozbalAktualneSpravy">
				<ul class="list-unstyled">
<?php	echo nacitatTextak()[0];?>			
				</ul>
				<hr>
				<a target="_blank" href="/_spravy/oznamy-pdf/Liturgicke%20oznamy%2022.02.2016%20-%2028.02.2016.pdf">Kompletné liturgicke oznamy v pdf</a><br>
			</div>			
		</div>

		<!-- Verzia pevná -->
		<div class="bg-white border border-info rounded p-3 my-3">
			<h2 class="text-center">Aktuálne farské oznamy</h2>
			<ul class="list-unstyled">
<?php	echo nacitatTextak()[0];?>
			</ul>
			<a target="_blank" href="/_spravy/oznamy-pdf/Liturgicke%20oznamy%2022.02.2016%20-%2028.02.2016.pdf">Kompletné liturgicke oznamy v pdf</a><br>
		</div>
	
	<!-- END Include - Aktuálne oznamy z txt -->

