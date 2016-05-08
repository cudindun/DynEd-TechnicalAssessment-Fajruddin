
<div class="container">
	<div class="row">
		<h1>Welcome to CodeIgniter!</h1>

		<?php if(isset($_SESSION['flash_data'])) { 
	        echo '<div class="alert alert-danger">';
	        	echo $this->session->flashdata('flash_data'); 
	        echo '</div>';
	    } ?>

		<div class="col-lg-5">
			<div style="margin-top:20px;padding:15px" class="well">
				<form action="<?= site_url('home/login') ?>" method="post" class="form-horizontal">
					<div class="form-group">
						<div class="col-lg-4">
							<label class="control-label">Nama Member</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="member" name="member">
						</div>
					</div>

					<p><i>*Note Login Menggunakan Nama member : A1/B1/C1</i></p>

					<div style="clear:both"></div>

					<button type="submit" class="btn btn-primary pull-right" style="margin-top:12px">Login</button>
				</form>

			<div style="clear:both"></div>

			</div>

		</div>

		<div style="min-height:500px;margin-top:20px"></div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>
</div>
