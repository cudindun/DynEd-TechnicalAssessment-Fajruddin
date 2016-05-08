			<div class="col-lg-8">
				<div class="well col-lg-12">
					<form method="post">
						<?php $i=0; foreach($soal as $soal): ?>
						  <div class="form-group">
						    <label class="col-lg-12" for="exampleInputEmail1"><?=$i+1 . ". " . $soal->nama_soal ?></label>
						    <div class="col-lg-4">
							    <div class="radio">
								  <label>
								    <input type="radio" name="soal-<?= $i ?>" id="optionsRadios1" value="A">
								    A
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="soal-<?= $i ?>" id="optionsRadios2" value="B">
								    B
								  </label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="radio" name="optionsRadios" id="optionsRadios2" value="option2">
								  <label>
								    <input type="radio" name="soal-<?= $i ?>" id="optionsRadios3" value="C">
								    C
								  </label>
								</div>
								<div class="radio" name="optionsRadios" id="optionsRadios2" value="option2">
								  <label>
								    <input type="radio" name="soal-<?= $i ?>" id="optionsRadios3" value="D">
								    D
								  </label>
								</div>
							</div>
							<div class="clear:both"></div>
						  </div>
						<?php $i++; endforeach; ?>
					</form>
					<div class="clear:both"></div>
					<button class="btn btn-primary" id="submit">Submit</button>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="well text-center">
					<p>Kode Soal :</p>
					<p><h4 id="quiz_code"><?= $this->session->userdata('code') ?></h4></p>
					<button class="btn btn-danger" id="out"> Keluar </button>
				</div>
			</div>

	<script type="text/javascript">
		$('button#submit').click(function(){
	        r = confirm("Are You Sure Want to Submit?");

	        if (r == true) {

	        	answer = <?= $i ?>
	        	//answerPI = parseInt(answer)
	        	newAnswer = [];

	        	for(i=0;i<answer;i++){
	        		newAnswer[i] = $('input[name=soal-'+i+']:checked').val();
	        	}


	        	var jsonString = JSON.stringify(newAnswer);

	            //ajax here
	            $.ajax({
					type: 'POST',
					url	: '<?= site_url()?>/home/submit',
					data: ({'newAnswer' : jsonString, 'code' : $('#quiz_code').text()}),
					cache: false,
					success: function(data) {
						//alert(data);
						$('#content').html(data);
	        		}
				});
	        }

	    });

      	$('button#out').click(function(){
	        r = confirm("Are You Sure Want to Exit?");

	        if (r == true) {
	           window.location.href='<?= base_url() ?>';
	        }

	    });
	</script>