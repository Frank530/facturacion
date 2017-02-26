<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function logout()
	{
		$this->session->unset_userdata('data_one');
		$this->session->unset_userdata('data_two');
		$this->session->unset_userdata('data_three');
		$this->session->unset_userdata('data_one');
		$this->session->sess_destroy();
		redirect('Welcome');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */