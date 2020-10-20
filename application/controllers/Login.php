<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function aksilogin()
	{
		error_reporting(0);
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$query=$this->db->query("SELECT * FROM tblogin
			WHERE username='$username' AND password='$password' ")->result()[0];

		error_reporting(0);
		$hitung=count($query);
		// var_dump($query);
		if($hitung>0){
			//session_start();
			$newdata = array(
		'username'  => $username,
		'jabatan'   => $query->jabatan,
			'wilayah'	=> $query->wilayah,
		'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('','refresh');
		}else{
			$this->session->set_flashdata('message', 'Proses Login Gagal - (data tidak benar)');
			redirect(base_url('login'),'refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
	redirect(base_url('/login'));
	}
}