<head>
  <title>Surat Keterangan</title>
  <style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
   .small { font-variant:   small-caps; }
</style>
</head>
<body bgcolor="white">
  <form>
    <table align="center" border="0">
      <tr>
        <td rowspan="5"><img src="<?php echo base_url(); ?>asset/images/logosurat.png" alt="Logo Surat" width="110" height="110"></td>
      </tr>
      <tr>
        <td><font face="Times New Roman" size="5"><center>PEMERINTAH KABUPATEN TEGAL</center></font></td>
      </tr>
      <tr>
        <td><font face="Times New Roman" size="5"><center>KECAMATAN DUKUHTURI</center></font></td>
      </tr>
      <tr>
        <td><font face="Times New Roman" size="5.5"><center><b>KANTOR KEPALA DESA BANDASARI</b></center></font></td>
      </tr>
      <tr>
        <td><font face="Times New Roman" size="3"><center>Alamat : JL. Cokroyudan Desa Bandasari Kec. Dukuhturi Kabupaten Tegal Pos : 52192</center></font></td>
      </tr>
    </table>
  </form>
  <hr size="3" noshade="8">
  <font face="Arial" size="5"> <p align="center"> <u> <b>SURAT KETERANGAN PENGANTAR</b></u></font><br>
  <font face="Arial" size="4"> Nomor: 8021/DES/2018 </p></font>
  <form>
    <table align="center" border="0">
      <tr>
        <td align="left" colspan="3">Yang bertanda tangan di bawah ini :</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" width="250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
        <td>:</td>
        <td align="left">MOH. SYIHABUDIN, S.Ag</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
        <td>:</td>
        <td align="left">Kepala Desa Bandasari</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
        <td>:</td>
        <td align="left">Desa Bandasari RT.04/01 Kec. Dukuhturi</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" colspan="3">Dengan ini menerangkan bahwa :</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap</td>
        <td>:</td>
        <td align="left"><?php echo $data['nama']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis kelamin</td>
        <td>:</td>
        <td align="left"><?php echo $data['jeniskelamin']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama</td>
        <td>:</td>
        <td align="left"><?php echo $data['agama']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</td>
        <td>:</td>
        <td align="left"><?php echo $data['statusperkawinan']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No NIK</td>
        <td>:</td>
        <td align="left"><?php echo $data['nik']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat/Tanggal lahir</td>
        <td>:</td>
        <td align="left"><?php echo $data['tempatlahir']; ?>, <?php echo $data['tanggallahir']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
        <td>:</td>
        <td align="left"><?php echo $data['jenispekerjaan']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
        <td>:</td>
        <td align="left">Desa Bandasari RT <?php echo $data['rt']; ?>/<?php echo $data['rw']; ?> Kec. Dukuhturi Kabupaten Tegal</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keperluan</td>
        <td>:</td>
        <td align="left"><?php echo $data['jenissurat']; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterangan</td>
        <td>:</td>
        <td align="left">orang tersebut benar-benar warga Desa Bandasari berkelakuan baik dan belum pernah terkena tindak pidana apapun.</td>
      </tr>
      <tr>
        <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berlaku tanggal</td>
        <td>:</td>
        <td align="left">Dimulai tanggal <?php echo $data['tanggal']; ?> sampai 30 Hari kedepan.</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" colspan="3">Orang tersebut di atas adalah benar penduduk Desa kami yang berdomisili <b><?php echo $data['statustinggal']; ?></b>, Demikian surat keterangan ini di buat untuk digunakan seperlunya.</td>
      </tr>
    </table>
    <BR>
    <table align="center" border="0">
      <tr>
        <td>
          Tanda tangan pemegang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Bandasari
        </td>
      </tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <font class="upper"><b><i>(<?php echo $data['nama']; ?>)</i></b></font>
      </td>
      <td align="right">
        <font class="upper"><b><i>(Moh. Syihabudin, S.Ag)</i></b></font>
      </td>
    </tr>
    <tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          Mengetahui :
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          Camat Dukuhturi
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <font class="upper"><b><i>(Ahmad Hartono, S.IP.,MM)</i></b></font>
          </td>
        </tr>
      </table>
    </form>
  </body>
