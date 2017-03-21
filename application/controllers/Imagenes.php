
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagenes extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); 
		$this->load->view('sitio/header');
		$this->load->model('Producto');
		//$data1['filtros'] = $this->Producto->filtros('ESCOLAR');
		$this->load->view('Adm/imagenes');
	}


}
