<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class beranda didalam controller
class Beranda extends CI_Controller {
	public function index(){
		//fungsi untuk mengambil data username
		$user = $this->session->userdata('username');
		//fungsi untuk mengambil data jabatan
		$jabatan = $this->session->userdata('jabatan');
		//jika jabatan sama dengan admin maka load file
		if($jabatan == 'admin'){
			$this->load->view('admin/header');
			$this->load->view('admin/beranda');
			$this->load->view('admin/footer');
		//jika jabatan sama dengan lurah maka load file
		}else if($jabatan == 'lurah'){
			$this->load->view('lurah/header');
			$this->load->view('lurah/beranda');
			$this->load->view('lurah/footer');
		//jika jabatan sama dengan rw maka tampil file
		}else if($jabatan == 'rw'){
			$this->load->view('rw/header');
			$this->load->view('rw/beranda');
			$this->load->view('rw/footer');
		//jika jabatan sama dengan rt maka tampil file
		}else if($jabatan == 'rt'){
			$this->load->view('rt/header');
			$this->load->view('rt/beranda');
			$this->load->view('rt/footer');
		}
		//jika tidak semua maka tampil file home
		else{
			$this->load->view('home/home');
		}
	}
}