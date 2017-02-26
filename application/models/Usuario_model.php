<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
 
	public function __construct(){

		parent::__construct();
	}


	public function login($username,$password){
		$this->db->where('email_cliente',$username);
		$this->db->where('password_cliente',$password);
		$q = $this->db->get('usuario');
		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function getUsuario($email){
		$this->db->where('email_cliente',$email);
		$query = $this->db->get('usuario');
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return null;
		}
	}

	public function getUsuarioById($id){
		$this->db->where('id_cliente',$id);
		$query = $this->db->get('usuario');
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return null;
		}	
	}
}

/* End of file Usuario_model.php */
/* Location: ./application/models/Usuario_model.php */