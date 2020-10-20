<?php error_reporting(0); ?>
<div class="content-wrapper">
  <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
	  <li class="breadcrumb-item">
		<a href="<?= base_url('') ?>">Dashboard</a>
	  </li>
	  <li class="breadcrumb-item">
	  <a href="<?= base_url('datawarga') ?>">Data Warga</a>
	  </li>
	  <li class="breadcrumb-item active">Tambah Data Warga</li>
	</ol>
		<div>
			<form action="<?= base_url('datawarga/aksitambah'); ?>" method="POST">
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">No Kartu Keluarga</label>
				  <input type="hidden" name="aksi" value="<?php if ($data != ''){ echo "update"; } ?>">
				  <input name="nokk" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="No Kartu Keluarga" value="<?php echo $data[0]->nokk; ?>" required>
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">NIK</label>
				  <input name="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" value="<?php echo $data[0]->nik; ?>" required>
				</div>
			  </div>
			  <div class="form-row">			    
				<div class="form-group col-md-6">
				  <label>Nama Lengkap</label>
				  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data[0]->nama; ?>" required>
				</div>
				<div class="form-group col-md-6">
				  <label>Jenis Kelamin</label>
				  <select name="jeniskelamin" id="inputState" class="form-control" required>
				  	<?php if ($data[0]->jeniskelamin == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->jeniskelamin; ?></option>
					<?php } ?>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label>Tempat Lahir</label>
				  <input name="tempatlahir" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data[0]->tempatlahir; ?>" required>
				</div>
				<div class="form-group col-md-6">
				  <label>Tanggal Lahir</label>
				  <input name="tanggallahir" type="date" class="form-control" placeholder="Nomor Induk Kependudukan" value="<?php echo $data[0]->tanggallahir; ?>" required>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label>Agama</label>
				  <select name="agama" id="inputState" class="form-control" required>
				  	<?php if ($data[0]->agama == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->agama; ?></option>
					<?php } ?>
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
				  	<?php if ($data[0]->pendidikan == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->pendidikan; ?></option>
					<?php } ?>
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
				  <input name="jenispekerjaan" type="text" class="form-control" placeholder="Jenis Pekerjaan" value="<?php echo $data[0]->jenispekerjaan; ?>" required>
				</div>
				<div class="form-group col-md-6">
				  <label>Status Perkawaninan</label>
				  <select name="statusperkawinan" id="inputState" class="form-control" required>
				  	<?php if ($data[0]->statusperkawinan == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->statusperkawinan; ?></option>
					<?php } ?>
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
					<?php if ($data[0]->statusdalamkeluarga == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->statusdalamkeluarga; ?></option>
					<?php } ?>
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
					<?php if ($data[0]->kepalakeluarga == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->kepalakeluarga; ?></option>
					<?php } ?>
					<option value="Ya">Ya</option>
					<option value="Bukan">Bukan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-row">			    
				<div class="form-group col-md-6">
				  <label>Nama Ayah</label>
				  <input name="ayah" type="text" class="form-control" placeholder="Nama Ayah" value="<?php echo $data[0]->ayah; ?>" required>
				</div>
				<div class="form-group col-md-6">
				  <label>Nama Ibu</label>
				  <input name="ibu" type="text" class="form-control" placeholder="Nama Ibu" value="<?php echo $data[0]->ibu; ?>" required>
				</div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
					  <label>RT</label>
					  <select name="rt" id="inputState" name="rt" class="form-control" required>
						<?php if ($data[0]->rt == ''){ ?>
						<option selected>Pilih...</option>
						<?php }else{ ?>
						<option selected><?php echo $data[0]->rt; ?></option>
						<?php } ?>
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
						<?php if ($data[0]->rw == ''){ ?>
						<option selected>Pilih...</option>
						<?php }else{ ?>
						<option selected><?php echo $data[0]->rw; ?></option>
						<?php } ?>
						<option value="01">01</option>
						<option value="02">02</option>
					  </select>
					</div>
				</div>
				<div class="form-row">
				  <div class="form-group col-md-6">
						<label>Status Tinggal</label>
						<select name="statustinggal" id="inputState" name="statusperkawainan" class="form-control" required>
							<?php if ($data[0]->statustinggal == ''){ ?>
							<option selected>Pilih...</option>
							<?php }else{ ?>
							<option selected><?php echo $data[0]->statustinggal; ?></option>
							<?php } ?>
							<option value="Tetap">Tetap</option>
							<option value="Tidak Tetap">Tidak Tetap</option>
						</select>
				  </div>
				  <div class="form-group col-md-6">
				  		<label>Keterangan</label>
						<textarea name="keterangan" class="form-control" placeholder="Asal Wilayah Domisili" required><?php echo $data[0]->keterangan; ?></textarea>
				  </div>
				</div>
				<div class="row">
			  		<button type="submit" class="btn btn-primary" style="margin: 1px auto;">Simpan</button>
			  	</div>
			</form>
		</div>
	</div>
</div>
<script>
		function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		//jika yang di inputkan adalah angka maka akan mengembalikan nilai true pada form
		return false;
		return true;
		}
</script>