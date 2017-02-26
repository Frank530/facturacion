<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function login()
	{
		$password = md5($this->input->post('password'));
		$email = $this->input->post('email');
		if(isset($password)){
			$this->load->model('Usuario_model');
			
			$fila=$this->Usuario_model->getUsuario($email,$password);
			
			if ($fila != null) {
				if ($fila->password_cliente == $password) {
					$data = array(
						'email' => $email,
						'id'=> $fila->id_cliente,
						'login'=>true 
					);	
					$this->session->set_userdata($data);
					redirect('Procesos/inicio');
				}else{
					redirect('Welcome');
				}
			}else{
				redirect('Welcome');
			}
		}else{
		redirect('Welcome');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */