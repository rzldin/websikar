<?php


class Karyawan_model extends CI_Model
{


	public function hitungJumlahKaryawan()
	{   
    	$query = $this->db->get('karyawan');
    	if($query->num_rows()>0)
    	{
      		return $query->num_rows();
    	} else
    		{
      			return 0;
    		}
	}

  public function listing()
  {
    $this->db->select('karyawan.*,departemen.nama_depart, divisi.nama_divisi');
    $this->db->from('karyawan');
    $this->db->join('departemen','departemen.kd_depart = karyawan.kd_depart');
    $this->db->join('divisi','divisi.kd_divisi = karyawan.kd_divisi');
    $this->db->order_by('id_karyawan');
    $query = $this->db->get();
    return $query->result();
  }


  public function tambah_data($data)
  {
    $this->db->insert('karyawan', $data);
  }

  public function hapus($data)
  {
    $this->db->where($data);
    $this->db->delete('karyawan', $data);
  }

}