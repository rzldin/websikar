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


	public function listing()
	{
		$this->db->select('*');
		$this->db->from('divisi');
		$this->db->order_by('kd_divisi');
		$query = $this->db->get();
		return $query->result();
		// die($this->db->last_query());
	}


	public function tambah_data($data)
	{
		$this->db->insert('divisi', $data);
	}

}