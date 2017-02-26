<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividades_model extends CI_Model {

	public function saveActividades($datos){
		$this->db->insert('actividades',$datos);
	}

	public function getActividades(){
		$query=$this->db->get('actividades');
		
		return $query->result();
	}
	
}

/* End of file Actividades_model.php */
/* Location: ./application/models/Actividades_model.php */

