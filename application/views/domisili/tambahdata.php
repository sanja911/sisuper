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
		<title>Lapor Warga Pendatang | SISUPER</title>
		<!-- Bootstrap core CSS-->
		<link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template-->
		<link href="<?php echo base_url(); ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom styles for this template-->
		<link href="<?php echo base_url(); ?>asset/css/sb-admin.css" rel="stylesheet">
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="card mx-auto mt-5">
				<div class="card-header" align="center"><b>Lapor Warga Pendatang</b></div>
				<div class="text-center">
				<a class="d-block small mt-3"><?php echo $this->session->flashdata('message'); ?></a></div>
				<div class="card-body">
					<form action="<?= base_url('datawarga/aksitambah'); ?>" method="POST">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">No Kartu Keluarga</label>
								<input type="hidden" name="aksi">
								<input name="nokk" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="No Kartu Keluarga" required>
							</div>
							<div class="form-group col-md-6">
								<label for="inputPassword4">NIK</label>
								<input name="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Nama Lengkap</label>
								<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group col-md-6">
								<label>Jenis Kelamin</label>
								<select name="jeniskelamin" id="inputState" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Tempat Lahir</label>
								<input name="tempatlahir" type="text" class="form-control" placeholder="Tempat Lahir" required>
							</div>
							<div class="form-group col-md-6">
								<label>Tanggal Lahir</label>
								<input name="tanggallahir" type="date" class="form-control" placeholder="Nomor Induk Kependudukan" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Agama</label>
								<select name="agama" id="inputState" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Katholik">Katholik</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Konghuchu">Konghuchu</option>
									<option value="Kepercayaan">Kepercayaan</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>Pendidikan</label>
								<select name="pendidikan" id="inputState" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
									<option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
									<option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
									<option value="SLTP/Sederajat">SLTP/Sederajat</option>
									<option value="SLTA/Sederajat">SLTA/Sederajat</option>
									<option value="Diploma I/II">Diploma I/II</option>
									<option value="Akademi/Diploma III">Akademi/Diploma III</option>
									<option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
									<option value="Strata II">Strata II</option>
									<option value="Strata III">Strata III</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Jenis Pekerjaan</label>
								<input name="jenispekerjaan" type="text" class="form-control" placeholder="Jenis Pekerjaan" required>
							</div>
							<div class="form-group col-md-6">
								<label>Status Perkawaninan</label>
								<select name="statusperkawinan" id="inputState" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="Kawin">Kawin</option>
									<option value="Belum Kawin">Belum Kawin</option>
									<option value="Cerai Hidup">Cerai Hidup</option>
									<option value="Cerai Mati">Cerai Mati</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Status Dalam Keluarga</label>
								<select name="statusdalamkeluarga" id="inputState" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="Suami">Suami</option>
									<option value="Istri">Istri</option>
									<option value="Anak">Anak</option>
									<option value="Menantu">Menantu</option>
									<option value="Cucu">Cucu</option>
									<option value="Orangtua">Orangtua</option>
									<option value="Mertua">Mertua</option>
									<option value="Famili Lain">Famili Lain</option>
									<option value="Pembantu">Pembantu</option>
									<option value="Lainya">Lainya</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>Apakah Kepala Keluarga ?</label>
								<select id="inputState" name="kepalakeluarga" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="Ya">Ya</option>
									<option value="Bukan">Bukan</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Nama Ayah</label>
								<input name="ayah" type="text" class="form-control" placeholder="Nama Ayah" required>
							</div>
							<div class="form-group col-md-6">
								<label>Nama Ibu</label>
								<input name="ibu" type="text" class="form-control" placeholder="Nama Ibu" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>RT</label>
								<select name="rt" id="inputState" name="rt" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="010">10</option>
									<option value="011">11</option>
									<option value="012">12</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>RW</label>
								<select name="rw" id="inputState" name="rt" class="form-control" required>
									<option selected>Pilih...</option>
									<option value="01">01</option>
									<option value="02">02</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Status Tinggal</label>
								<input name="statustinggal" type="text" class="form-control" value="Tidak Tetap" readonly>
							</div>
							<div class="form-group col-md-6">
								<label>Keterangan</label>
								<textarea name="keterangan" class="form-control" placeholder="Asal Wilayah Domisili" required></textarea>
							</div>
						</div>
						<div class="row">
							<button type="submit" class="btn btn-primary" style="margin: 1px auto;">Kirim</button>
						</div>
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