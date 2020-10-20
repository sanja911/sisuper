<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class datawarga didalam controller datawarga
class Cetaksurat extends CI_Controller {
	//fungsi tampilan pada dashboard
	public function index()
	{
		$jabatan = $this->session->userdata('jabatan');
		$cek = $this->uri->segment(2);
		$this->db->set('statusdesa','Y');
		$this->db->where('idpengajuan', $cek);
		$query = $this->db->update('mengajukan');
		if($query){
			echo 'sukses';
			if ($cek != ""){
				redirect(base_url('datasurat'),'refresh');
			}else{
				redirect(base_url('home'),'refresh');
			}
		}
		else{
			echo 'Menyetujui gagal';
			redirect(base_url('home'),'refresh');
		}
		
		$data['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.idpengajuan FROM datawarga, suratpengantar, mengajukan
			WHERE datawarga.nik = mengajukan.nik
			AND mengajukan.idsurat = suratpengantar.idsurat")->row_array();
		//jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view('lurah/cetaksurat',$data);
	}
}
?>