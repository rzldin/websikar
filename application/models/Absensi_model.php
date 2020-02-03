<?php


class Absensi_model extends CI_Model
{


	public function hitungAbsensi()
	{
		$this->db->select('COUNT(absensi.kd_absensi) as jumlah, absensi.label');
		$this->db->from('absensi');
		$this->db->join('karyawan', 'karyawan.kd_absensi=absensi.kd_absensi');
		$this->db->group_by('absensi.kd_absensi');
		$query = $this->db->get();
		return $query->result();
	}

	




}