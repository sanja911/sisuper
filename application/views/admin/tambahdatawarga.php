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
				  <input name="nokk" type="text" class="form-control" placeholder="No Kartu Keluarga">
				</div>
				<div class="form-group col-md-6">
				  <label for="inputPassword4">NIK</label>
				  <input name="nik" type="text" class="form-control" placeholder="Nomor Induk Kependudukan">
				</div>
			  </div>
			  <div class="form-row">			    
				<div class="form-group col-md-6">
				  <label>Nama Lengkap</label>
				  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
				</div>
				<div class="form-group col-md-6">
				  <label>Jenis Kelamin</label>
				  <select name="jeniskelamin" id="inputState" class="form-control">
					<option selected>Pilih...</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label>Tempat Lahir</label>
				  <input name="tempatlahir" type="text" class="form-control" placeholder="Tempat Lahir">
				</div>
				<div class="form-group col-md-6">
				  <label>Tanggal Lahir</label>
				  <input name="tanggallahir" type="date" class="form-control" placeholder="Nomor Induk Kependudukan">
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label>Agama</label>
				  <select name="agama" id="inputState" class="form-control">
					<option selected>Pilih...</option>
					<option value="Islam">Islam</option>
					<option>Kristen</option>
					<option>Katholik</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Konghuchu</option>
					<option>Kepercayaan</option>
				  </select>
				</div>
				<div class="form-group col-md-6">
				  <label>Pendidikan</label>
				  <input name="pendidikan" type="text" class="form-control" placeholder="Pendidikan">
				</div>
			  </div>
			  <div class="form-row">			    
				<div class="form-group col-md-6">
				  <label>Jenis Pekerjaan</label>
				  <input name="jenispekerjaan" type="text" class="form-control" placeholder="Jenis Pekerjaan">
				</div>
				<div class="form-group col-md-6">
				  <label>Status Perkawaninan</label>
				  <select name="statusperkawinan" id="inputState" class="form-control">
					<option selected>Pilih...</option>
					<option value="Islam">Kawin</option>
					<option value="Belum Kawin">Belum Kawin</option>
					<option value="Cerai Hidup">Cerai Hidup</option>
					<option value="Cerai Mati">Cerai Mati</option>
				  </select>
				</div>
			  </div>
			  <div class="form-row">			    
				<div class="form-group col-md-6">
				  <label>Status Dalam Keluarga</label>
				  <select name="statusdalamkeluarga" id="inputState" class="form-control">
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
				  <select id="inputState" name="kepalakeluarga" class="form-control">
					<option selected>Pilih...</option>
					<option value="Ya">Ya</option>
					<option value="Bukan">Bukan</option>
				  </select>
				</div>
			  </div>
			  <div class="form-row">			    
				<div class="form-group col-md-6">
				  <label>Nama Ayah</label>
				  <input name="ayah" type="text" class="form-control" placeholder="Nama Ayah">
				</div>
				<div class="form-group col-md-6">
				  <label>Nama Ibu</label>
				  <input name="ibu" type="text" class="form-control" placeholder="Nama Ibu">
				</div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-md-6">
					  <label>RT</label>
					  <select name="rt" id="inputState" name="rt" class="form-control">
						<option selected>Pilih...</option>
						<option value="01">001</option>
						<option value="02">002</option>
						<option value="03">003</option>
						<option value="04">004</option>
						<option value="05">005</option>
						<option value="06">006</option>
						<option value="07">007</option>
						<option value="08">008</option>
						<option value="09">009</option>
						<option value="010">010</option>
						<option value="011">011</option>
						<option value="012">012</option>
					  </select>
					</div>		    
					<div class="form-group col-md-6">
					  <label>RW</label>
					  <select name="rw" id="inputState" name="rt" class="form-control">
						<option selected>Pilih...</option>
						<option value="01">001</option>
						<option value="02">002</option>
						<option value="03">003</option>
					  </select>
					</div>
				</div>
				<div class="form-row">
				  <div class="form-group col-md-6">
						<label>Status Tinggal</label>
						<select name="statustinggal" id="inputState" name="statusperkawainan" class="form-control">
							<option selected>Pilih...</option>
							<option value="Tetap">Tetap</option>
							<option value="Kontrak">Kontrak</option>
						</select>
				  </div>
				</div>
				<div class="row">
			  		<button type="submit" class="btn btn-primary" style="margin: 1px auto;">Simpan</button>
			  	</div>
			</form>
		</div>
	</div>
</div>