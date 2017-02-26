<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Producto_model');
	}

	public function guardar(){

		$nombre = $this->input->post('nombre');
		$cantidad = $this->input->post('cantidad');
		$precio = $this->input->post('precio');
		$categoria = $this->input->post('categoria');
		echo "estas aqui".$precio;
		$data = array(
			'nombre_producto' => $nombre,
			'precio_producto'=> $precio,
			'stock_producto'=> $cantidad,
			'id_categoria'=> $categoria
		);
		$this->Producto_model->guardarProducto($data);	
		

	}

}

/* End of file Producto_controller.php */
/* Location: ./application/controllers/Producto_controller.php */