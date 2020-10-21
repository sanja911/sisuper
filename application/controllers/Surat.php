<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Surat extends CI_Controller {
	public function index()
	{
		//$this->load->view('surat/header');
		$nama['namasurat'] = $this->db->get('suratpengantar')->result();
		$this->load->view('surat/tambahsurat',$nama);
		//$this->load->view('surat/footer');
				// //$this->load->view('surat/footer');
	}
	public function simpanpengajuan(){
		$nokk=$this->input->post('nik');
		$nik=$this->input->post('nik');
		$idsurat=$this->input->post('idsurat');
		$tanggal=$this->input->post('tanggal');
		$keterangan=$this->input->post('keterangan');
		$cekriwayat1=$this->db->query("SELECT * FROM mengajukan
			WHERE nik='$nik'
			AND idsurat='$idsurat'
			AND tanggal='$tanggal' ")->num_rows();
		$cekriwayat2=$this->db->query("SELECT * FROM mengajukan
			WHERE nik='$nik'
			AND idsurat='$idsurat'
			AND statusrt='N' ")->num_rows();
		if($cekriwayat1>0){
			$this->session->set_flashdata('message', 'Anda Sudah Mengajukan Surat Yang Sama Pada Hari Ini, silahkan hubungi TU untuk mencetak ulang !');
			redirect(base_url('/surat'),'refresh');
		}else if($cekriwayat2>0){
			$this->session->set_flashdata('message', 'Anda Sedang Mengajukan Surat Yang Sama,silahkan hubungi TU untuk mencetak ulang!');
			redirect(base_url('/surat'),'refresh');
  	}else{
			$query=$this->db->query("SELECT * FROM datawarga WHERE nokk='$nokk' AND nik='$nik' ")->num_rows();
			if($query>0){
			$aksi = $this->input->post('aksi');
						$data = [
										'nik'	=> $this->input->post('nik'),
										'idsurat'	=> $this->input->post('idsurat'),
										'tanggal'	=> $this->input->post('tanggal'),
										'keterangan' => $this->input->post('keterangan'),
										'statusrt' => "Y",
										'statusrw' => "Y",
										'statusdesa' => "N"
						];
			$query = $this->db->insert('mengajukan',$data);
			$this->session->set_flashdata('message', 'Tambah Surat Berhasil');
			redirect(base_url('/surat'),'refresh');
		}else{
				$this->session->set_flashdata('message', 'Tambah Surat Gagal - (data tidak benar)');
				redirect(base_url('/surat'),'refresh');
					}
				}
			}
		}
