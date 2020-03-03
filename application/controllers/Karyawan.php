<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan_model');
	}


	public function data_karyawan()
	{
		//validasi, jika url memanggil nama controller karyawan/data_karyawan, maka akan diredirect ke dashboard
		if (ucwords($this->uri->segment(1)) == 'Karyawan') {
			redirect('welcome','refresh');
		}

		$data_karyawan = $this->karyawan_model->listing();
		// var_dump($data_karyawan);
		$data = array(
						'isi' => 'karyawan/list_data_karyawan',
						'title' => 'Data Karyawan ('.count($data_karyawan).')',
						'data_karyawan' => $data_karyawan 
					 );
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}

	public function tambah_karyawan()
	{
		if (ucwords($this->uri->segment(1)) == 'Karyawan') {
			redirect('welcome','refresh');
		}

		$data = array(
						'isi' 		=> 'karyawan/tambah_karyawan',
						'title' 	=> 'Tambah Karyawan'
					 );

		$data['departemen'] = $this->departemen_model->listing();
		$data['divisi'] 	= $this->divisi_model->listing();
		$data['lulusan']	= $this->kelulusan_model->listing();
		// var_dump($data['departemen']);
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}

	public function do_upload()
	{
		$config['upload_path'] 		= './assets/img';;
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['encrypt_name']		= TRUE;

		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		} {
			# code...
		}
	}

	public function tambah_aksi()
	{

		$nama_karyawan 	= $this->input->post('nama_karyawan');
		$alamat		= $this->input->post('alamat');
		$no_telp	= $this->input->post('no_telp');
		$kd_depart	= $this->input->post('kd_depart');
		$kd_divisi	= $this->input->post('kd_divisi');
		$kd_tamat 	= $this->input->post('kd_tamat');
		$status		= $this->input->post('status');


		$data = array (
						'nama_karyawan' => $nama_karyawan,
						'alamat'		=> $alamat,
						'no_telp'		=> $no_telp,
						'kd_depart'		=> $kd_depart,
						'kd_divisi'		=> $kd_divisi,
						'kd_tamat'		=> $kd_tamat,
						'status'		=> $status,
						'kd_absensi'	=> 'c',
						'tempat_lahir'  => 'solo',
						'tanggal_lahir' => '1994-05-06',
						'no_ktp'		=> '1234400090'
					);		

		$this->karyawan_model->tambah_data($data, 'karyawan');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan Berhasil Ditambahkan!
				<button type="button" class="close" data-dismiss="alert">

				</button>
				</div>');
		redirect('datakaryawan','refresh');

	}

	public function delete($id_karyawan)
	{
		$data = array(
						'id_karyawan' => $id_karyawan  
					);
		$this->karyawan_model->hapus($data, 'karyawan');
		redirect('datakaryawan','refresh');
	}



}