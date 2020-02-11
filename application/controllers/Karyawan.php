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
		$data = array(
						'isi' 	=> 'karyawan/tambah_karyawan',
						'title' => 'Tambah Karyawan'
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
		}) {
			# code...
		}
	}


}