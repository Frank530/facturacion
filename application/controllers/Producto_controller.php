<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Producto_model');
	}

	public function guardar(){

		$nombre = $this->input->post('nom');
		$cantidad = $this->input->post('cant');
		$precio = $this->input->post('pre');
		$categoria = $this->input->post('cat');
		
		$data = array(
			'nombre_producto' => $nombre,
			'precio_producto'=> $precio,
			'stock_producto'=> $cantidad,
			'id_categoria'=> $categoria
		);
		$this->Producto_model->guardarProducto($data);	
		echo "Datos insertados Correctamente";


	}

	public function listar(){
		
		$numeroPro=10;
		$lote=$this->input->post('lote');
		$nuevoInicio=($lote-1)*$numeroPro;
		$data=$this->Producto_model->getPagination($nuevoInicio,$numeroPro);
		$total=$this->Producto_model->numPost();
		echo json_encode($data);

	}

}

/* End of file Producto_controller.php */
/* Location: ./application/controllers/Producto_controller.php */