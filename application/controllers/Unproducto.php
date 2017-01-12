Producto.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unproducto extends CI_Controller {

	public function index()
	{
		//modelos

		//traer producto seleccionado

		//funciones

		//view
		$this->load->view('sitio/header');
		$this->load->view('menu/top');
		$this->load->view('menu/cat');

		$this->load->model('Producto');
		$data['producto'] = $this->Producto->listaProductos('01001009');

		$this->load->view('producto/unProducto',$data);

		$this->load->view('sitio/redesSociales');
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');


	}
}
