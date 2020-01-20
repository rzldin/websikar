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


}