<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class datawarga didalam controller datawarga
class Pengaturan extends CI_Controller {
	//fungsi tampilan pada dashboard
	public function index()
	{
		//mengambil data jabatan
		$jabatan = $this->session->userdata('jabatan');
		//mengambil data wilayah
		$wilayah = $this->session->userdata('wilayah');
		//jika jabatan lurah maka tampil datawarga
		$data['data'] = $this->db->get('tblogin')->result();
		//jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/pengaturan',$data);
			$this->load->view($jabatan.'/footer');
	}
	public function ubahpengguna()
	{
		$cek = $this->uri->segment(3);
		$where = array('username'=>$cek);
		$data['data'] = $this->db->get_where('tblogin',$where)->result();
		$jabatan = $this->session->userdata('jabatan');
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/ubahpengguna',$data);
		$this->load->view($jabatan.'/footer');
	}
	// public function aksiubah()
	// {
		// 	$this->db->where('username', $this->input->post('username'));
		// 	$query = $this->db->update('tblogin', $data);
		// 	if($query){
			// 		echo 'sukses';
			// 		if ($cek != ""){
				// 			redirect(base_url('datawarga'),'refresh');
			// 		}else{
				// 			redirect(base_url('home'),'refresh');
			// 		}
		// 	}
		// 	else{
			// 		echo 'tambah data gagal';
			// 		redirect(base_url('tambahdatawarga'),'refresh');
		// 	}
	// }
	public function aksiubah()
	{
		$aksi = $this->input->post('aksi');
		$data = [
						'password'	=> $this->input->post('password')
		];
		
		$this->db->where('username', $this->input->post('username'));
		$query = $this->db->update('tblogin', $data);
		
		redirect(base_url('pengaturan'),'refresh');
		// if($query){
			// 	echo 'sukses';
			// 	if ($cek != ""){
				// 		redirect(base_url('pengaturan'),'refresh');
			// 	}else{
				// 		redirect(base_url('home'),'refresh');
			// 	}
		// }
		// else{
			// 	echo 'ubah data gagal';
			// 	redirect(base_url('pengaturan/ubahpengguna'),'refresh');
		// }
	}
}