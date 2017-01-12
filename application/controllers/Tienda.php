<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function index()
	{	

		$this->load->view('sitio/header');
		$this->load->model('Producto');
		$this->load->view('tiendas');
		$local = $this->input->post('local');
		$this->Producto->setLocal($local);
	}
}
