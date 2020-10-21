<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Domisili extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('m_pos');
    }
	public function index()
			{
		//$this->load->view('domisili/header');
		$this->load->view('domisili/tambahdata');
		//$this->load->view('domisili/footer');
	}
	public function get_barang(){
        $nik=$this->input->post('nik');
        $data=$this->m_pos->get_data_barang_bykode($nik);
        echo json_encode($data);
    }
}