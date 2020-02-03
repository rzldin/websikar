<?php


class Kelulusan_model extends CI_Model
{

	public function hitungLulusan()
	{
		$this->db->select('COUNT(divisi.kd_divisi) jumlah_divisi, COUNT(lulusan.kd_tamat) jumlah_lulusan, divisi.nama_divisi, lulusan.tamatan');
		$this->db->from('karyawan');
		$this->db->join('divisi', 'karyawan.kd_divisi=divisi.kd_divisi');
		$this->db->join('lulusan', 'karyawan.kd_tamat=lulusan.kd_tamat');
		$this->db->group_by('divisi.kd_divisi');
		$this->db->group_by('lulusan.kd_tamat');
		$query = $this->db->get();
		return $query->result();
	}


}