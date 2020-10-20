<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url(''); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Status Surat</li>
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
	    			<th>Rukun Tetangga</th>
                    <th>Rukun Warga</th>
                    <th>Kantor Desa</th>
                    <th>NIK</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal</th>
	    		</tr>
    		</thead>
    		<tbody>
	    		<?php foreach ($data as $row) { ?>
	    		<tr>
	    			<td><?php echo $row -> nama; ?></td>
	    			<td align="center"><?php if($row -> statusrt == 'Y'){ ?><a class="btn btn-sm btn btn-success">Selesai</a> <?php }else{ ?> <a  class="btn btn-sm btn btn-warning">Proses</a><?php } ?></td>
                    <td align="center"><?php if($row -> statusrw == 'Y'){ ?><a class="btn btn-sm btn btn-success">Selesai</a> <?php }else if($row -> statusrw == 'N' && $row -> statusrt == 'Y'){ ?> <a  class="btn btn-sm btn btn-warning">Proses</a><?php }else if($row -> statusrw == 'N' && $row -> statusdesa == 'N'){ ?> <a  class="btn btn-sm btn btn-danger">Kosong</a><?php } ?></td>
                    <td align="center"><?php if($row -> statusdesa == 'Y'){ ?><a class="btn btn-sm btn btn-success">Selesai</a> <?php }else if($row -> statusrw == 'Y' && $row -> statusrt == 'Y'){ ?> <a  class="btn btn-sm btn btn-warning">Proses</a><?php }else if($row -> statusrw == 'N' && $row -> statusdesa == 'N'){ ?> <a  class="btn btn-sm btn btn-danger">Kosong</a><?php } ?></td>
                    <td><?php echo $row -> nik; ?></td>
                    <td><?php echo $row -> jenissurat; ?></td>
                    <td><?php echo $row -> tanggal; ?></td>
	    		</tr>
	    		<?php } ?>
    		</tbody>
    		<troot>
    			<tr>
	    			<th>Nama</th>
                    <th>Rukun Tetangga</th>
                    <th>Rukun Warga</th>
                    <th>Kantor Desa</th>
                    <th>NIK</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal</th>
	    		</tr>
    		</troot>
    	</table>
    </div>
  </div>
</div>