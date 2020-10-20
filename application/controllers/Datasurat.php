<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class datawarga didalam controller datawarga
class Datasurat extends CI_Controller {
	//fungsi tampilan pada dashboard
	public function index()
	{
		//mengambil data jabatan
		$jabatan = $this->session->userdata('jabatan');
		//mengambil data wilayah
		$wilayah = $this->session->userdata('wilayah');
		//jika jabatan lurah maka tampil datawarga
		if ($jabatan == 'lurah'){
			$data['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.idpengajuan FROM datawarga, suratpengantar, mengajukan
			WHERE datawarga.nik = mengajukan.nik
			AND mengajukan.idsurat = suratpengantar.idsurat
			AND mengajukan.statusdesa = 'N'
			AND mengajukan.statusrt = 'Y'
			AND mengajukan.statusrw = 'Y'")->result();
			//$data['data'] = $this->db->get('mengajukan')->result();
		}else if ($jabatan == 'rt'){
			$data['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.idpengajuan FROM datawarga, suratpengantar, mengajukan
			WHERE datawarga.nik = mengajukan.nik
			AND mengajukan.idsurat = suratpengantar.idsurat
			AND mengajukan.statusrt = 'N'
			AND mengajukan.statusrw = 'N'
			AND mengajukan.statusdesa = 'N'")->result();
			//$data['data'] = $this->db->get_where('mengajukan')->result();
		}else if ($jabatan == 'rw'){
			$data['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.idpengajuan FROM datawarga, suratpengantar, mengajukan
			WHERE datawarga.nik = mengajukan.nik
			AND mengajukan.idsurat = suratpengantar.idsurat
			AND mengajukan.statusrw = 'N'
			AND mengajukan.statusdesa = 'N'
			AND mengajukan.statusrt = 'Y'")->result();
		}else{
			//jika tidak semuanya, maka akan diarahkan ke halaman login
			redirect(base_url('login'));
		}
		//jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/lihatsurat',$data);
		$this->load->view($jabatan.'/footer');
	}
	public function cetakulang()
	{
		//mengambil data jabatan
		$jabatan = $this->session->userdata('jabatan');
		//mengambil data wilayah
		$wilayah = $this->session->userdata('wilayah');
		//jika jabatan lurah maka tampil datawarga
		if ($jabatan == 'lurah'){
			$data['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.idpengajuan FROM datawarga, suratpengantar, mengajukan
			WHERE datawarga.nik = mengajukan.nik
			AND mengajukan.idsurat = suratpengantar.idsurat")->result();
			//$data['data'] = $this->db->get('mengajukan')->result();
		}else{
			//jika tidak semuanya, maka akan diarahkan ke halaman login
			redirect(base_url('login'));
		}
		//jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view($jabatan.'/header');
		$this->load->view($jabatan.'/cetakulang',$data);
		$this->load->view($jabatan.'/footer');
	}
	//fungsi tambah data surat
	public function tambah()
	{
		$query['sura'] = $this->db->get('suratpengantar')->result();
		$this->load->view('rt/header');
		$this->load->view('rt/tambahsurat',$query);
		$this->load->view('rt/footer');
	}
	public function setuju()
	{
		$jabatan = $this->session->userdata('jabatan');
		$cek = $this->uri->segment(3);
		if ($jabatan == 'rt'){
			$this->db->set('statusrt','Y');
			$this->db->where('idpengajuan', $cek);
			$query = $this->db->update('mengajukan');
		}else if($jabatan == 'rw'){
			$this->db->set('statusrw','Y');
			$this->db->where('idpengajuan', $cek);
			$query = $this->db->update('mengajukan');
		}else if($jabatan == 'lurah'){
			$this->db->set('statusdesa','Y');
			$this->db->where('idpengajuan', $cek);
			$query = $this->db->update('mengajukan');
		}
		if($query){
			echo 'sukses';
			if ($cek != ""){
				redirect(base_url('datasurat'),'refresh');
			}else{
				redirect(base_url('home'),'refresh');
			}
		}
		else{
			echo 'Menyetujui gagal';
			redirect(base_url('home'),'refresh');
		}
	}
	public function cetak()
	{
		// jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$cek = $this->uri->segment(3);
		//jika jabatan lurah maka tampil datawarga
		$data['data'] =$this->db->query("SELECT datawarga.nama, datawarga.jeniskelamin, datawarga.tempatlahir, datawarga.tanggallahir, datawarga.statusperkawinan, datawarga.agama, datawarga.jenispekerjaan, datawarga.nik, datawarga.rt, datawarga.rw, datawarga.statustinggal, suratpengantar.jenissurat, mengajukan.tanggal, mengajukan.idpengajuan FROM datawarga, suratpengantar, mengajukan
				WHERE datawarga.nik = mengajukan.nik
				AND mengajukan.idsurat = suratpengantar.idsurat
				AND mengajukan.idpengajuan = $cek")->row_array();
		// //jika kondisi diatas berhasil maka akan tampil halaman dashboard sesuai dengan $jabatan
		$this->load->view('lurah/cetaksurat',$data);
	}
	public function simpanpengajuan(){
		$nokk=$this->input->post('nokk');
		$nik=$this->input->post('nik');
		$query=$this->db->query("SELECT * FROM datawarga
			WHERE nokk='$nokk' AND nik='$nik' ")->num_rows();
		// error_reporting(0);
		// // var_dump($query);
		
		if($query>0){
			$aksi = $this->input->post('aksi');
			$data = [
						'nik'	=> $this->input->post('nik'),
						'idsurat'	=> $this->input->post('idsurat'),
						'tanggal'	=> $this->input->post('tanggal')
			];
			$query = $this->db->insert('mengajukan',$data);
			$this->session->set_flashdata('message', 'Tambah Surat Berhasil');
			redirect(base_url('/datasurat/tambah'),'refresh');
		}else{
			$this->session->set_flashdata('message', 'Tambah Surat Gagal - (data tidak benar)');
			redirect(base_url('/datasurat/tambah'),'refresh');
		}
	}
		/*	public function aksitambah()
	{
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
				redirect(base_url('home'),'refresh');
			}
			
		}
		else{
			echo 'gagal';
			redirect(base_url('tambahdatawarga'),'refresh');
		}
	}*/
}