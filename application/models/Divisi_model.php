<?php


class Divisi_model extends CI_Model
{


	public function hitungDivisi()
	{
		$this->db->select('COUNT(divisi.kd_divisi) as jumlah, divisi.nama_divisi');
		$this->db->from('divisi');
		$this->db->join('karyawan', 'karyawan.kd_divisi=divisi.kd_divisi');
		$this->db->group_by('divisi.kd_divisi');
		$query = $this->db->get();
		return $query->result();
	}




}