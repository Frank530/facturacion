<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saludo extends CI_Controller {

	public function index()
	{
		$data['saludo']="Saludos desde codeigniter";
		$this->load->view('saludo_view',$data);
	}

	public function presentacion()
	{
		$this->load->view('operaciones/presentacion_view.php');
	}

	public function operacion()
	{
		$this->load->view('operaciones/operaciones_view');
	}
	

	public function calcular()
	{
		$numero1 =$this->input->post('valor1');
		$numero2 =$this->input->post('valor2');
		$operacion =$this->input->post('operacion');

		switch ($operacion) {
			case 1:
				$data['resultado']=$numero1+$numero2;
				break;
			case 2:
				$data['resultado']=$numero1-$numero2;
				break;
			case 3:
				$data['resultado']=$numero1/$numero2;
				break;
			case 4:
				$data['resultado']=$numero1*$numero2;
				break;
			default:
				$data['resultado']="Valor no valido";
				break;
		}

		
		$this->load->view('operaciones/operaciones_view',$data);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
