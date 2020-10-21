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
	  <li class="breadcrumb-item active">Lihat Data Warga</li>
	</ol>
		<div>
			<form action="<?= base_url('datawarga/aksitambah'); ?>" method="POST">
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputEmail4">NISN</label>
				  <input type="hidden" name="aksi" value="<?php if ($data != ''){ echo "update"; } ?>">
				  <input name="nokk" type="text" class="form-control" placeholder="No Kartu Keluarga" value="<?php echo $data[0]->nokk; ?>" disabled>
				</div>
        <div class="form-group col-md-6">
          <label>Jenis Pekerjaan</label>
          <input name="jenispekerjaan" type="text" class="form-control" placeholder="Jenis Pekerjaan" value="<?php echo $data[0]->jenispekerjaan; ?>" disabled>
        </div>

				<!-- <div class="form-group col-md-6">
				  <label for="inputPassword4">NIK</label>
				  <input name="nik" type="text" class="form-control" placeholder="Nomor Induk Kependudukan" value="<?php echo $data[0]->nik; ?>" disabled>
				</div> -->
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label>Nama Lengkap</label>
				  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data[0]->nama; ?>" disabled>
				</div>
				<div class="form-group col-md-3">
				  <label>Jenis Kelamin</label>
				  <select name="jeniskelamin" id="inputState" class="form-control" disabled>
				  	<?php if ($data[0]->jeniskelamin == ''){ ?>
					<option selected>Pilih...</option>
					<?php }else{ ?>
					<option selected><?php echo $data[0]->jeniskelamin; ?></option>
					<?php } ?>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				  </select>
				</div>
        <div class="form-group col-md-3">
          <label>Kelas</label>
          <select name="rw" id="inputState" name="rt" class="form-control" disabled>
          <?php if ($data[0]->rw == ''){ ?>
          <option selected>Pilih...</option>
          <?php }else{ ?>
          <option selected><?php echo $data[0]->rw; ?></option>
          <?php } ?>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          </select>
        </div>
			  </div>
			  <div class="form-row">
          <div class="form-group col-md-3">
            <label>Agama</label>
            <select name="agama" id="inputState" class="form-control" disabled>
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
        <div class="form-group col-md-3">
				  <label>Tempat Lahir</label>
				  <input name="tempatlahir" type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data[0]->tempatlahir; ?>" disabled>
				</div>
				<div class="form-group col-md-6">
				  <label>Tanggal Lahir</label>
				  <input name="tanggallahir" type="date" class="form-control" placeholder="Nomor Induk Kependudukan" value="<?php echo $data[0]->tanggallahir; ?>" disabled>
				</div>
			  </div>

				<div class="form-row">

				  <div class="form-group col-md-12">
				  		<label>Keterangan</label>
						<textarea name="keterangan" class="form-control" placeholder="Asal Wilayah Domisili" disabled><?php echo $data[0]->keterangan; ?></textarea>
				  </div>
				</div>
			</form>
		</div>
	</div>
</div>
