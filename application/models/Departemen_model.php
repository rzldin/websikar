<?php


class Departemen_model extends CI_Model
{

	public function hitungDepartemen()
	{
		$this->db->select('COUNT(departemen.kd_depart) as jumlah_depart, COUNT(divisi.kd_divisi) as jumlah_divisi, departemen.nama_depart, divisi.nama_divisi');
		$this->db->from('karyawan');
		$this->db->join('departemen', 'karyawan.kd_depart=departemen.kd_depart');
		$this->db->join('divisi', 'karyawan.kd_divisi=divisi.kd_divisi');
		$this->db->group_by('departemen.kd_depart', 'divisi.kd_divisi');
		$query = $this->db->get();
		return $query->result();
	}


	public function hitungAbsensiDepartemen()
	{
		$this->db->select('COUNT(departemen.kd_depart) as jumlah_depart, COUNT(absensi.kd_absensi) as jumlah_absensi, departemen.nama_depart, absensi.label');
		$this->db->from('karyawan');
		$this->db->join('departemen', 'karyawan.kd_depart=departemen.kd_depart');
		$this->db->join('absensi', 'karyawan.kd_absensi=absensi.kd_absensi');
		$this->db->group_by('departemen.kd_depart');
		$this->db->group_by('absensi.kd_absensi');
		$query = $this->db->get();
		return $query->result();	
	}

}