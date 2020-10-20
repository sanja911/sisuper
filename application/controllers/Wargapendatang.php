<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class datawarga didalam controller datawarga
class Wargapendatang extends CI_Controller {
	//fungsi tampilan pada dashboard
	public function index()
	{
		//mengambil data jabatan
		$jabatan = $this->session->userdata('jabatan');
		//mengambil data wilayah
		$wilayah = $this->session->userdata('wilayah');
		//jika jabatan lurah maka tampil datawarga
		if ($jabatan == 'lurah'){
			$where = array('statustinggal'=>'Tidak Tetap');
			$data['data'] = $this->db->get_where('datawarga',$where)->result();
		}else if ($jabatan != ''){
			$where = array($jabatan => $wilayah, 'statustinggal'=>'Tidak Tetap');
			$data['data'] = $this->db->get_where('datawarga',$where)->result();
		}else{
			//jika tidak semuanya, maka akan diarahkan ke halaman login
			redirect(base_url('login'));
		}
		//jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/wargapendatang',$data);
		$this->load->view($jabatan.'/footer');
	}
	
	//lihat kartu keluarga
	public function detailkeluarga()
	{
		$jabatan = $this->session->userdata('jabatan');
		$wilayah = $this->session->userdata('wilayah');
			if ($kk != ''){
				$where = array($jabatan => $wilayah, 'statustinggal'=>'Tidak Tetap');
				$data['data'] = $this->db->get_where('datawarga',$where)->result();
			}
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/wargapendatang',$data);
		$this->load->view($jabatan.'/footer');
	}
}