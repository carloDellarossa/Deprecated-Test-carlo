Producto.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unproducto extends CI_Controller {

	public function index()
	{
		//modelos
		$this->load->library('cart');
		$this->load->model('Producto');
		//traer producto seleccionado
		$codigo = $_GET['codigo'];
		$producto['producto'] = $this->Producto->producto($codigo);
		$rango['rango']= $this->Producto->rangos($codigo);
		//funciones
		$data= $producto + $rango;
		//view
		$this->load->view('sitio/header');
		$this->load->view('menu/top');
		$this->load->view('menu/cat');

		$this->load->view('producto/unProducto',$data);

		$this->load->view('sitio/redesSociales');
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');


	}

	function agregar() {

	$insert = array(
		'id' => $this->input->post('id'),
		'qty' => 1,
		'price' => $this->input->post('price'),
		'name' => $this->input->post('name')
	);

		if($this->cart->insert($insert)){
			if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }
			redirect($previous);
		}else{
			$error = site_url();
			redirect($error);
		}

	}


	function remove($rowid) {

	$this->cart->update(array(
		'rowid' => $rowid,
		'qty' => 0
	));
		if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }
		redirect($previous);
	}
}
