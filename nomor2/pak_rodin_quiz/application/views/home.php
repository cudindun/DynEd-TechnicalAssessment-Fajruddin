<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<script src="<?= base_url(); ?>assets/js/jQuery-2.1.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
	<div class="container">
		<div class="text-center">
		  	<h1>Welcome to Pak Rodin Quiz</h1>
		  	<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	  	</div>
  	</div>
</div>

<div class="container">
	<div class="row">
		<div id="content">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="well col-lg-12">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="form-label col-lg-4">Kode Soal :</label>
							<div class="col-lg-8">
								<input class="form-control" type="text" name="kode">
							</div>
						</div>
					</form>
					<button class="btn btn-primary pull-right" id="enter" disabled>Masuk</button>
					<p><i>*Note Kode Soal : XYZSTU</i></p>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('input[name=kode]').on("keyup", function(){
		if($('input[name=kode]').val() == ""){
			$('input[name=kode]').parent().parent().addClass("has-error");
			$("#enter").prop("disabled", true);
		}else{
			$('input[name=kode]').parent().parent().removeClass("has-error");
			$("#enter").prop("disabled", false);
		}
	});

	$('#enter').click(function(){
		//alert('yo')
		$.ajax({
			type: 'POST',
			url	: '<?= site_url()?>/home/enter_with_code',
			data: ({'code' 	: $('input[name=kode]').val()}),
			success: function(data) {
				//alert(data);
				if(data == 0){
					alert('kode soal tidak ditemukan')
				}else{
					$('#content').html(data);
				}
			},
			error: function(data){
				alert('error')
			}
		});
	});
</script>

</body>
</html>