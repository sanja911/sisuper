<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tentang extends CI_Controller {
	public function index()
	{
		//$this->load->view('surat/header');
		$jabatan = $this->session->userdata('jabatan');
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/tentang');
		$this->load->view($jabatan.'/footer');
	}
}