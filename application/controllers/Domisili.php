<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Domisili extends CI_Controller {
	public function index()
			{
		//$this->load->view('domisili/header');
		$this->load->view('domisili/tambahdata');
		//$this->load->view('domisili/footer');
	}
}