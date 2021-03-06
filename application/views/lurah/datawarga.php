<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url(''); ?>">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Warga Domisili</li>
    </ol>
    <div class="row">
        <div class="col">
        </div>
    </div><br>
    <div>
        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr align="center">
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>KELAHIRAN</th>
                    <th>NO KELUARGA</th>
                    <th>STATUS</th>
                    <th>PENGATURAN</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                <tr>
                    <td align="center"><?php echo $row -> nik; ?></td>
                    <td><?php echo $row -> nama; ?></td>
                    <td><?php echo $row -> tempatlahir; ?>, <?php echo $row -> tanggallahir; ?></td>
                    <td align="center"><?php echo $row -> nokk; ?></td>
                    <td align="center"><?php echo $row -> jenispekerjaan; ?></td>
                    <td align="center"><a href="<?= base_url('datawarga/lihatwarga').'/'.$row -> nik; ?>" class="btn btn-sm btn btn-outline-success">Lihat</a>&nbsp;</td>
                </tr>
                <?php } ?>
            </tbody>
            <troot>
                <tr align="center">
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>KELAHIRAN</th>
                    <th>NO KELUARGA</th>
                    <th>STATUS</th>
                    <th>PENGATURAN</th>
                </tr>
            </troot>
        </table>
    </div>
  </div>
</div>
