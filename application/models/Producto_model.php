<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function guardarProducto($data){
		$this->db->insert('producto', $data);

	}

	public function getNombre(){
		
		$this->db->select('id_categoria,nombre_categoria');
	    $this->db->from('categoria');
	    $query = $this->db->get();
	    
        if($query->num_rows() > 0 ){
            return $query->result();
        }
	}

}

/* End of file Producto_model.php */
/* Location: ./application/models/Producto_model.php */