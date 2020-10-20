<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class datawarga didalam controller datawarga
class Datawarga extends CI_Controller {
	//fungsi tampilan pada dashboard
	public function index()
	{
		//mengambil data jabatan
		$jabatan = $this->session->userdata('jabatan');
		//mengambil data wilayah
		$wilayah = $this->session->userdata('wilayah');
		//jika jabatan lurah maka tampil datawarga
		if ($jabatan == 'lurah'){
			$data['data'] = $this->db->get('datawarga')->result();
		}else if ($jabatan != ''){
			$where = array($jabatan => $wilayah, 'statustinggal'=>'Tetap');
			$data['data'] = $this->db->get_where('datawarga',$where)->result();
		}else{
			//jika tidak semuanya, maka akan diarahkan ke halaman login
			redirect(base_url('login'));
		}
		//jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/datawarga',$data);
		$this->load->view($jabatan.'/footer');
	}
	//fungsi tambah data warga
	public function tambah()
	{
		$jabatan = $this->session->userdata('jabatan');
		$nik = $this->uri->segment(3);
		$this->load->view($jabatan.'/header');
		if ($nik != ''){
			$data['data'] = $this->db->get_where('datawarga', array('nik' => $nik))->result();
			$this->load->view($jabatan.'/tambahdatawarga',$data);
		}else{
			$this->load->view($jabatan.'/tambahdatawarga');
		}
		$this->load->view($jabatan.'/footer');
		if ($jabatan == ''){
			redirect(base_url('login'));
		}
	}
	//fungsi tambah data warga
	public function lihatwarga()
	{
		$jabatan = $this->session->userdata('jabatan');
		$nik = $this->uri->segment(3);
		$this->load->view($jabatan.'/header');
		if ($nik != ''){
			$data['data'] = $this->db->get_where('datawarga', array('nik' => $nik))->result();
			$this->load->view($jabatan.'/lihatdatawarga',$data);
		}
		$this->load->view($jabatan.'/footer');
		if ($jabatan == ''){
			redirect(base_url('login'));
		}
	}

	public function aksitambah()
	{
		$nokk=$this->input->post('nokk');
		$kepalakeluarga=$this->input->post('kepalakeluarga');
		$sdk=$this->input->post('statusdalamkeluarga');

		// $cekdata1=$this->db->query("SELECT * FROM datawarga
		// 	WHERE nokk='$nokk'
		// 	AND kepalakeluarga='$kepalakeluarga'
		// 	AND statusdalamkeluarga='$sdk' ")->num_rows();

		// $cekdata2=$this->db->query("SELECT * FROM datawarga
		// 	WHERE nokk='$nokk'
		// 	AND statusdalamkeluarga='Suami' ")->num_rows();

		if($kepalakeluarga=='Ya' or $sdk=='Suami'){
			$cekdata1=$this->db->query("SELECT * FROM datawarga
				WHERE nokk='$nokk'
				AND kepalakeluarga='Ya'
				AND statusdalamkeluarga='Suami' ")->num_rows();
			if($cekdata1>0){
				$this->session->set_flashdata('message', 'Kepala Keluarga atau Suami Sudah ada !');
				redirect(base_url('/domisili'),'refresh');
			}
		}else{
			$status = 0;
			$cek = $this->session->userdata('jabatan');
			if ($cek != ""){
				$status = 1;
			}
			$aksi = $this->input->post('aksi');
			$data = [
							'nama'	=> $this->input->post('nama'),
							'jeniskelamin'	=> $this->input->post('jeniskelamin'),
							'tempatlahir'	=> $this->input->post('tempatlahir'),
							'tanggallahir'	=> $this->input->post('tanggallahir'),
							'agama'	=> $this->input->post('agama'),
							'pendidikan'	=> $this->input->post('pendidikan'),
							'jenispekerjaan'	=> $this->input->post('jenispekerjaan'),
							'statusperkawinan'	=> $this->input->post('statusperkawinan'),
							'statusdalamkeluarga'	=> $this->input->post('statusdalamkeluarga'),
							'ayah'	=> $this->input->post('ayah'),
							'ibu'	=> $this->input->post('ibu'),
							'kepalakeluarga'	=> $this->input->post('kepalakeluarga'),
							'nokk'	=> $this->input->post('nokk'),
							'statustinggal'	=> $this->input->post('statustinggal'),
							'rt'	=> $this->input->post('rt'),
							'rw'	=> $this->input->post('rw'),
							'keterangan'	=> $this->input->post('keterangan'),
							'status'	=> $status
			];
			if ($aksi != 'update')
			{
				//$data = array_push($data, 'nik', $this->input->post('nik'));
				$data += [ 'nik' => $this->input->post('nik') ];
				$query = $this->db->insert('datawarga',$data);
			}else{
				$this->db->where('nik', $this->input->post('nik'));
				$query = $this->db->update('datawarga', $data);
			}
			if($query){
				echo 'sukses';
				if ($cek != ""){
					redirect(base_url('datawarga'),'refresh');
				}else{
					$this->session->set_flashdata('message', 'Lapor Warga Pendatang Berhasil - (Anda Harus Datang Ke Rumah Ketua RT Untuk Konfirmasi)');
					redirect(base_url('domisili'),'refresh');
				}
			}
			else{
				echo 'tambah data gagal';
				redirect(base_url('tambahdatawarga'),'refresh');
			}
		}
	}
}