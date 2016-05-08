
			<div class="col-lg-6 col-lg-offset-3">
				<div class="well col-lg-12 text-center">
					<p>Nilai Anda :</p>
					<p><h4><?=$totalNilai?></h4></p>
					<button class="btn btn-danger" id="back">Kembali</button>
				</div>
			</div>

			<script>
				$('#back').click(function(){
					window.location.href='<?= base_url() ?>';
				});
			</script>