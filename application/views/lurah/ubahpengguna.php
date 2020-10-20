<?php error_reporting(0); ?>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('') ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item">
				<a href="<?= base_url('pengaturan') ?>">Pengaturan</a>
			</li>
			<li class="breadcrumb-item active">Ubah Data Pengguna</li>
		</ol>
		<div>
			<form action="<?= base_url('pengaturan/aksiubah'); ?>" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Jabatan</label>
						<input name="jabatan" type="text" class="form-control" value="<?php echo $data[0]->jabatan; ?>" readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Wilayah</label>
						<input name="wilayah" type="text" class="form-control" value="<?php echo $data[0]->wilayah; ?>" readonly>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Username</label>
						<input name="username" type="text" class="form-control" value="<?php echo $data[0]->username; ?>" readonly>
					</div>
					<div class="form-group col-md-6">
						<label for="inputEmail4">Password</label>
						<input name="password" type="text" class="form-control" value="<?php echo $data[0]->password; ?>">
					</div>
				</div>
				<div class="row">
					<button type="submit" class="btn btn-primary" style="margin: 1px auto;">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>