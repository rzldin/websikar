<?php


class Login_model extends CI_Model{


	public function get_data_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('login');
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$sess  = array(
								'username' => $row->$username,
								'password' => $row->$password );
			}
			
		}
	}


}