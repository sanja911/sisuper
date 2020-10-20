<?php error_reporting(0); ?>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('') ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item">
				<a href="<?= base_url('datawarga') ?>">Data Surat</a>
			</li>
			<li class="breadcrumb-item active">Tambah Data Surat</li>
		</ol>
		<div>
			<form method="post" action="<?php echo base_url('datasurat/simpanpengajuan'); ?>">
				<div class="form-group">
					<label for="inputEmail4">No Kartu Keluarga</label>
					<input name="nokk" id="nokk" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="No Kartu Keluarga" required>
				</div>
				<div class="form-group">
					<label for="inputPassword4">NIK</label>
					<input name="nik" id="nik" type="text" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16" class="form-control" placeholder="Nomor Induk Kependudukan" required>
				</div>
				<div class="form-group">
					<label>Jenis Surat</label>
					<select name="idsurat" id="inputState" class="form-control" required>
						<option selected placeholder="c" value="">Pilih Jenis Surat...</option>
						<?php foreach ($sura as $value) { ?>
						<option value="<?php echo $value->idsurat; ?>"><?php echo $value->jenissurat; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="inputPassword4">Tanggal</label>
					<input name="tanggal" id="tanggal" type="date" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea name="keterangan" class="form-control" placeholder="Keterangan Surat" required></textarea>
				</div>
				<div class="form-group">
					<input class="btn btn-primary btn-block" type="submit" value="Simpan">
				</form>
				<div class="text-center">
							<a class="d-block small mt-3"><?php echo $this->session->flashdata('message'); ?></a>
						</div>
			</div>
		</div>
	</div>
</<div>
<script>
		function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		//jika yang di inputkan adalah angka maka akan mengembalikan nilai true pada form
		return false;
		return true;
		}
</script>