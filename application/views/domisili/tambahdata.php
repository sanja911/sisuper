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
		<title>Register User | SISUKE</title>
		<!-- Bootstrap core CSS-->
		<link href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template-->
		<link href="<?php echo base_url(); ?>asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom styles for this template-->
		<link href="<?php echo base_url(); ?>asset/css/sb-admin.css" rel="stylesheet">
		<script>
  function disable(val)
  {
      if(val=="Pengajar/Guru Tetap" || val=="Pengajar/Guru Honorer" ){
           document.getElementById("text-one").disabled=true;
           document.getElementById("text-two").disabled=false;
           // document.getElementById("text-three").disabled=true;
           document.getElementById("text-one").value="-";
           // document.getElementById("text-three").value="";
      }else{
           document.getElementById("text-two").disabled=true;
           document.getElementById("text-one").disabled=false;
           // document.getElementById("text-three").disabled=false;
      	   document.getElementById("text-two").value="-";
           }

  }
</script>
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="card mx-auto mt-5">
				<div class="card-header" align="center"><b>Register User</b></div>
				<div class="text-center">
				<a class="d-block small mt-3"><?php echo $this->session->flashdata('message'); ?></a></div>
				<div class="card-body">
					<form action="<?= base_url('datawarga/aksitambah'); ?>" method="POST">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">NISN/NIP</label>
								<input type="hidden" name="aksi">
								<input name="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="5" maxlength="16" class="form-control" placeholder="No NISN/NIP" required>
							</div>

								<input name="nokk" value="-" type="hidden" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" required>
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
							<div class="form-group col-md-3">
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
							<div class="form-group col-md-3">
								<label>Status</label>
								<select name="pendidikan" class="form-control" id="type" onchange="disable(this.value)" required>
									<option selected>Pilih...</option>
									<option value="Pelajar" selected>Pelajar</option>
									<option value="Pengajar/Guru Tetap">Pengajar/Guru Tetap</option>
									<option value="Pengajar/Guru Honorer">Pengajar/Guru Honorer</option>

							</select>
							</div>
							<div class="form-group col-md-3">

								<label>Mata Pelajaran</label>
								<select name="jenispekerjaan" id="text-two" name="rt" class="form-control" disabled >
									<option value="Matematika" selected>Matematika</option>
									<option value="Bahasa Indonesia">Bahasa Indonesia</option>
									<option value="Bahasa Inggris">Bahasa Inggris</option>
									<option value="IPA">IPA</option>
									<option value="IPS">IPS</option>
									<option value="PAI">PAI</option>
								</select>
							</div>
							<div class="form-group col-md-3">

								<label>Kelas</label>
								<select name="rw" id="text-one" name="rt" class="form-control" disabled>
									<option value="10" selected>10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
								
						</div>
								<input name="statusdalamkeluarga" type="hidden" id="inputState" class="form-control" value="-"required>

								<input id="inputState" name="kepalakeluarga" class="form-control" type="hidden" value="-" required>

						<div class="form-row">

								<input name="ayah" type="hidden" value="-" class="form-control" placeholder="Nama Ayah" required>
							<input name="ibu" type="hidden" value="-" class="form-control" placeholder="Nama Ibu" required>

						</div>
						<div class="form-row">

						</div>
						<div class="form-row">
								<input name="statustinggal" type="hidden" class="form-control" value="-" readonly>
							<div class="form-group col-md-12">
								<label>Keterangan</label>
								<textarea name="keterangan" id="text-three" class="form-control" placeholder="Keterangan Tambahan"></textarea>
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

<script>
		function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		//jika yang di inputkan adalah angka maka akan mengembalikan nilai true pada form
		return false;
		return true;
		}
</script>

		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	</body>
</html>
