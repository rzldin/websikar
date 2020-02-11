<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array(
						'title' => 'Halaman Dasboard',
						'isi'   => 'karyawan/dasbor'
					);
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}

	public function karyawan_komposisi()
	{
		$total_karyawan = $this->karyawan_model->hitungJumlahKaryawan();
		$jumlah_divisi = $this->divisi_model->hitungDivisi();
		$jumlah_departemen = $this->departemen_model->hitungDepartemen();
		$jumlah_lulusan = $this->kelulusan_model->hitungLulusan();
		$data = array(
						'title' => 'Komposisi Karyawan',
						'isi' => 'karyawan/list',
						'total_karyawan' => $total_karyawan,
						'jumlah_divisi' => $jumlah_divisi,
						'jumlah_lulusan' => $jumlah_lulusan,
						'jumlah_departemen' => $jumlah_departemen 
			         );
		// var_dump($jumlah_lulusan);
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}

	public function absensi()
	{
		$total_karyawan = $this->karyawan_model->hitungJumlahKaryawan();
		$jumlah_absensi = $this->absensi_model->hitungAbsensi();
		$jumlah_absensi_departemen = $this->departemen_model->hitungAbsensiDepartemen();
		$data = array(
						'isi' => 'karyawan/list_absensi',
						'title' => 'Absensi',
						'total_karyawan' => $total_karyawan,
						'jumlah_absensi' => $jumlah_absensi,
						'jumlah_absensi_departemen' => $jumlah_absensi_departemen 
					 );
		// var_dump($jumlah_absensi_departemen);
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}

	public function payroll()
	{
		$data = array(
						'title' => 'Payroll',
						'isi'	=> 'karyawan/list_payroll' 
					  );
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}
	


}
