<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda2 extends CI_Controller {

	public function index()
	{
		//$this->load->view('sitio/header');
		$this->load->model('Producto');
		$this->load->view('tiendas2');
	}
}
