<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procesos extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->load->model('Producto_model');
		
	}
	public function inicio(){
		$id = $this->session->userdata('id');
		$fila = $this->Usuario_model->getUsuarioById($id);
		if ($this->session->userdata('login')) {
			$data['nombre'] = $fila->nombre_cliente;
			$data['apellido'] = $fila->apellidos_cliente;	
			$this->load->view('masterpage/head');
			$this->load->view('masterpage/nav',$data);
			$this->load->view('procesos/inicio');
			$this->load->view('masterpage/footer');
		}else{
			echo "De que forma quieres ingresar?";
		}
	}

	public function producto(){
		$id = $this->session->userdata('id');
		$fila = $this->Usuario_model->getUsuarioById($id);
		$data['categoria'] = $this->Producto_model->getNombre();
		$data['productos']=$this->Producto_model->getProductos(10);
		$data['numPaginas']=ceil($this->Producto_model->numPost()/10);
		if (isset($mensaje)) {
			$data['mensaje']=$mensaje;
		}
		if ($this->session->userdata('login')) {
			$data['nombre'] = $fila->nombre_cliente;
			$data['apellido'] = $fila->apellidos_cliente;
			$this->load->view('masterpage/head');
			$this->load->view('masterpage/nav',$data);
			$this->load->view('procesos/producto',$data);
			$this->load->view('masterpage/footer');
		}else{
			echo "De que forma quieres ingresar?";
		}
	}

}

/* End of file Procesos.php */
/* Location: ./application/controllers/Procesos.php */