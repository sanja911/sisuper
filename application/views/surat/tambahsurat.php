<!-- <form method="post" action="<?php //echo base_url('login/aksilogin/'); ?>">
	<input type="text" name="username">
	<input type="text" name="password">
	<input type="submit" value="submit">
</form> -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Pengajuan Surat Pengantar | SISUPER</title>
		<!-- Bootstrap core CSS-->
		<link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template-->
		<link href="<?php echo base_url(); ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom styles for this template-->
		<link href="<?php echo base_url(); ?>asset/css/sb-admin.css" rel="stylesheet">
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="card card-login mx-auto mt-5">
				<div class="card-header" align="center"><b>Pengajuan Surat Pengantar</b></div>
				<div class="card-body">
					<form method="post" action="<?php echo base_url('/surat/simpanpengajuan'); ?>">
						<div class="form-group">
							<label for="inputEmail4">No Kartu Keluarga</label>
							<input name="nokk" id="nokk" type="text" onkeypress="return hanyaAngka(event)" minlength="16" minlength="16" maxlength="16" class="form-control" placeholder="No Kartu Keluarga" required>
						</div>
						<div class="form-group">
							<label for="inputPassword4">NIK</label>
							<input name="nik" id="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" required>
						</div>
						<div class="form-group">
							<label>Jenis Surat</label>
							<select name="idsurat" id="inputState" class="form-control" required>
								<option selected value="">Pilih Jenis Surat...</option>
								<?php foreach ($namasurat as $value) { ?>
								<option value="<?php echo $value->idsurat; ?>"><?php echo $value->jenissurat; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="inputPassword4">Tanggal - (Pilih hari ini)</label>
							<input name="tanggal" id="tanggal" type="date" class="form-control">
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea name="keterangan" class="form-control" placeholder="Keterangan Surat" required></textarea>
						</div>
						<div class="form-group">
							<input class="btn btn-primary btn-block" type="submit" value="Kirim">
						</form>
						<div class="text-center">
							<a class="d-block small mt-3" href="<?= base_url('') ?>">Home</a>
						</div>
						<div class="text-center">
							<a class="d-block small mt-3"><?php echo $this->session->flashdata('message'); ?></a>
						</div>
			
					</div>
				</div>
			</div>
			<!-- Bootstrap core JavaScript-->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Core plugin JavaScript-->
			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		</body>
	</html>
	<script>
		function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		//jika yang di inputkan adalah angka maka akan mengembalikan nilai true pada form
		return false;
		return true;
		}
</script>