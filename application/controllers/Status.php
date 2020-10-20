<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends CI_Controller {
	public function index()
	{
		//$this->load->view('surat/header');
		$jabatan = $this->session->userdata('jabatan');
		$statussurat['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.statusrt, mengajukan.statusrw, mengajukan.statusdesa FROM datawarga, suratpengantar, mengajukan
		 	WHERE datawarga.nik = mengajukan.nik 
		 	AND mengajukan.idsurat = suratpengantar.idsurat")->result();
		//$this->load->view('surat/footer');
				// //$this->load->view('surat/footer');
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/status',$statussurat);
		$this->load->view($jabatan.'/footer');
	}
}
