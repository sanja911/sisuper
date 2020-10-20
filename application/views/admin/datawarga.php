<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <div class="row">
    	<div class="col">
    	</div>
    	<div class="col"><a href="<?= base_url('datawarga/tambah'); ?>" class="btn btn-primary pull-right btn-sm">Tambah Data</a></div>
    </div><br>
    <div>
    	<table class="table table-bordered" id="dataTable">
    		<thead>
    			<tr>
	    			<th>NIK</th>
	    			<th>Nama</th>
                    <th>No Kartu Keluarga</th>
                    <th>Pekerjaan</th>
	    		</tr>
    		</thead>
    		<tbody>
	    		<?php foreach ($data as $row) { ?>
	    		<tr>
	    			<td><?php echo $row -> nik; ?></td>
	    			<td><?php echo $row -> nama; ?></td>
                    <td><?php echo $row -> nokk; ?></td>
                    <td><?php echo $row -> jenispekerjaan; ?></td>
	    		</tr>
	    		<?php } ?>
    		</tbody>
    		<troot>
    			<tr>
	    			<th>NIK</th>
	    			<th>Nama</th>
                    <th>No Kartu Keluarga</th>
                    <th>Pekerjaan</th>
	    		</tr>
    		</troot>
    	</table>
    </div>
  </div>
</div>