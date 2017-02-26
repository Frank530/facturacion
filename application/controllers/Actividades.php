<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividades extends CI_Controller {

	public function add()
	{
		$this->load->view('masterpage/head');
		$this->load->view('masterpage/nav');
		$this->load->view('actividades/add_view');
		$this->load->view('masterpage/footer');
	}

	public function record()
	{
		$titulo =$this->input->post('titulo');
		$data = array('titulo' => $titulo,'descripcion'=>$this->input->post('descripcion'));

		$this->load->model('Actividades_model');
		$this->Actividades_model->saveActividades($data);

		$data['mensaje']="Contacto registrado";
		$data['tabla']="Contactos";
		$this->load->view('mensajes/mensaje_view',$data);
	}

	public function listar(){
		$this->load->model('Actividades_model');
		$data['actividades']=$this->Actividades_model->getActividades();
		$this->load->view('actividades/list_view',$data);	
	}

}

/* End of file Actividades */
/* Location: ./application/controllers/Actividades */