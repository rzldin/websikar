<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inputdata extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function add()
	{
		$data = array(
						'isi' => 'data/list_input' 
					 );
		$this->load->view('layout/wrapper', $data, FALSE, TRUE);
	}


}
