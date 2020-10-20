<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url(''); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Data Keluarga</li>
    </ol>
    <div class="row">
    	<div class="col">
    	</div>
    </div><br>
    <div>
    	<table class="table table-bordered" id="dataTable">
    		<thead>
    			<tr>
	    			<th>NIK</th>
	    			<th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Status di Keluarga</th>
                    <th>Opsi</th>
	    		</tr>
    		</thead>
    		<tbody>
	    		<?php foreach ($data as $row) { ?>
	    		<tr>
	    			<td><?php echo $row -> nik; ?></td>
	    			<td><?php echo $row -> nama; ?></td>
                    <td><?php echo $row -> jeniskelamin; ?></td>
                    <td><?php echo $row -> jenispekerjaan; ?></td>
                    <td><?php echo $row -> statusdalamkeluarga; ?></td>
                    <td class="pull-left"><a href="<?= base_url('datawarga/lihatwarga').'/'.$row -> nik; ?>" class="btn btn-sm btn btn-outline-success">Lihat Detail</a> </td>
	    		</tr>
	    		<?php } ?>
    		</tbody>
    		<troot>
    			<tr>
	    			<th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Status di Keluarga</th>
                    <th>Opsi</th>
	    		</tr>
    		</troot>
    	</table>
    </div>
  </div>
</div>