<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url(''); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Lihat Surat</li>
    </ol>
    <div class="row">
    	<div class="col">
    	</div>
    </div><br>
    <div>
    	<table class="table table-bordered" id="dataTable">
    		<thead>
    			<tr>
	    			<th>Nama</th>
	    			<th>Jenis Kelamin</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>NIK</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal</th>
                    <th>OPSI</th>
	    		</tr>
    		</thead>
    		<tbody>
	    		<?php foreach ($data as $row) { ?>
	    		<tr>
	    			<td><?php echo $row -> nama; ?></td>
	    			<td><?php echo $row -> jeniskelamin; ?></td>
                    <td><?php echo $row -> tempatlahir; ?>, <?php echo $row -> tanggallahir; ?></td>
                    <td><?php echo $row -> agama; ?></td>
                    <td><?php echo $row -> nik; ?></td>
                    <td><?php echo $row -> jenissurat; ?></td>
                    <td><?php echo $row -> tanggal; ?></td>
                    <td class="pull-left"><a href="<?= base_url('datawarga/lihatwarga').'/'.$row -> nik; ?>" class="btn btn-sm btn btn-outline-warning">Detail</a>&nbsp;<a href="<?= base_url('datasurat/setuju').'/'.$row -> idpengajuan; ?>" class="btn btn-sm btn btn-outline-success">Setujui</a> </td>
	    		</tr>
	    		<?php } ?>
    		</tbody>
    		<troot>
    			<tr>
	    			<th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>NIK</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal</th>
                    <th>OPSI</th>
	    		</tr>
    		</troot>
    	</table>
    </div>
  </div>
</div>