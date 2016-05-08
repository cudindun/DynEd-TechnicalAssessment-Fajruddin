<div class="container">
	<div class="row">
		<h1>Welcome to CodeIgniter!</h1>
		<h4 class="text-right"> Anda Login Sebagai : <?= $this->session->userdata('nama_member') ?> | <a href="<?= site_url('home/logout') ?>">Log Out</a></h4>
		<div style="margin:15px 0"></div>
		<table class="table table-hover">
		  	<thead>
		  		<tr>
			  		<th>id member</th>
			  		<th>Nama Member</th>
			  		<th>Institusi</th>
		  		</tr>
		  	</thead>
		  	<tbody>
		  		<?php foreach($member as $A): ?>
		  		<tr>
		  			<td><?= $A->id_member ?></td>
		  			<td><?= $A->nama_member ?></td>
		  			<td><?= $A->nama ?></td>
		  		</tr>
		  		<?php endforeach; ?>
		  	</tbody>
		</table>
	</div>
</div>