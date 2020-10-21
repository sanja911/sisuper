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
				<div class="card-header" align="center"><b>Pengajuan Surat</b></div>
				<div class="card-body">
					<form method="post" action="<?php echo base_url('/surat/simpanpengajuan'); ?>">
						<div class="form-group">
							<label for="inputEmail4">NISN/NIP</label>
							<input name="nik" id="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="12" maxlength="16" class="form-control" placeholder="Inputkan NISN/NIP yang sudah didaftarkan sebelumnya" required>
						</div>
						<div class="form-group">
						<label for="inputEmail4">Status</label>
						<input type="text" name="status" class="form-control" id="type" onchange="disable(this.value)"required disabled>
						</div>
						<div class="form-group">
							<label>Jenis Surat</label>
							<select name="idsurat"  class="form-control"  required>
								<option selected value="">Pilih Jenis Surat...</option>
								<?php foreach ($namasurat as $value) { ?>
								<option  value="<?php echo $value->idsurat; ?>"><?php echo $value->jenissurat; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="inputPassword4">Tanggal - (Pilih hari ini)</label>
							<input name="tanggal" id="tanggal" type="date" class="form-control">
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea name="keterangan" id="text-two" class="form-control" placeholder="Tuliskan tujuan pengajuan surat" required></textarea>
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
			<script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Core plugin JavaScript-->
			<script src="<?php echo base_url(); ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>
			<script type="text/javascript">
        	  $(document).ready(function(){
             $('#nik').on('input',function(){
                 
                var nik=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('/domisili/get_barang')?>",
                    dataType : "JSON",
                    data : {nik: nik},
                    cache:false,
                    success: function(data){
                        $.each(data,function(pendidikan, jenispekerjaan){
                            $('[name="status"]').val(data.pendidikan);
                        });
                        if(data.pendidikan==="Pengajar/Guru Honorer" || data.pendidikan==="Pengajar/Guru Honorer"){
                        	$('[name="idsurat"]').val("101");
                        }else{
                        	$('[name="idsurat"]').val("110");	
                        }
                        
                        }

                });
                return false;
           });
 
        });
    </script>
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
