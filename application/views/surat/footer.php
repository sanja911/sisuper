<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Sistem Informasi Surat Pengantar Bandasari</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logout" Jika kamu ingin akhiri sesi ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>asset/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>asset/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>asset/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>asset/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/sb-admin-charts.min.js"></script>
    <script>
       $(document).ready(function () {
           $('#nokk').change(function () { alert('Anda belum terdaftar !'); });
           $('#nik').change(function () { alert('Anda belum terdaftar !'); });

          public function getAll($nokk = null) {
          if ($id == null)
              $id = $this->input->post('id');
          $id = intval( $id );
          // print_r($sg_id);

          //  var_dump($sg_id);


          $query = $this->db->where('id',$id)->limit( 100 )->get( 'table_name' );



          if( $query->num_rows() > 0 ) {
              return $query->result();
          } else {
              return array();
          }
}
       });
    </script>
  </div>
</body>

</html>