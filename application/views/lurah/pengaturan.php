<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url(''); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Pengaturan Pengguna</li>
        </ol>
        <div class="row">
            <div class="col">
            </div>
        </div><br>
        <div>
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr align="center">
                        <th>JABATAN</th>
                        <th>WILAYAH</th>
                        <th>NAMA PENGGUNA</th>
                        <th>KATA KUNCI</th>
                        <th>PENGATURAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) { ?>
                    <tr>
                        <td align="center"><?php if($row-> jabatan == 'rt') { echo 'Ketua Rukun Tetangga'; } elseif ($row-> jabatan == 'rw') {
                            echo 'Ketua Rukun Warga';
                        } else {echo 'Pegawai Kantor Desa';} ?> </td>
                        <td align="center"><?php if($row-> jabatan == 'rt') { echo 'Rukun Tetangga '; echo  $row-> wilayah; } elseif ($row-> jabatan == 'rw') {
                            echo 'Rukun Warga '; echo  $row-> wilayah;
                        } else{ echo "Desa Bandasari"; } ?></td>
                        <td align="center"><?php echo $row -> username; ?></td>
                        <td align="center"><?php echo $row -> password; ?></td>
                        <td align="center"><a href="<?= base_url('pengaturan/ubahpengguna').'/'.$row -> username; ?>" class="btn btn-sm btn btn-outline-warning">Ubah</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <troot>
                    <tr align="center">
                        <th>JABATAN</th>
                        <th>WILAYAH</th>
                        <th>NAMA PENGGUNA</th>
                        <th>KATA KUNCI</th>
                        <th>PENGATURAN</th>
                    </tr>
                </troot>
            </table>
        </div>
    </div>
</div>