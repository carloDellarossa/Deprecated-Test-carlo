<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	public function index()
	{
		//TODO array de fotos
		//modelos
		$this->load->library('cart');
		$this->load->model('Producto');
		//traer producto seleccionado
		// $codigo = $_GET['codigo'];
		// $producto['producto'] = $this->Producto->producto($codigo);
		// $rango['rango']= $this->Producto->rangos($codigo);
		// //funciones
		// $data= $producto + $rango;
		// //view
		// $this->load->view('sitio/header');
		// $this->load->view('menu/top');
		// $this->load->model('Categorias');
		// $data4['categorias'] = $this->Categorias->catArray();
		// $this->load->view('menu/cat',$data4);
		//
		// $this->load->view('producto/busqueda',$data);
		//
		// 
		// $this->load->view('sitio/sucursales');
		// $this->load->view('sitio/footer');


	}
//TODO sacar estas funciones de aqui y dejar solo las que estan en carro
	function agregar() {
		$p = $_GET["cat"];
	// $this->load->model('Producto');

	// $producto = $this->Producto->producto($this->input->post('id'));
	if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }
	$desc = $this->input->post('name');
	$aRemplasar = array('/','(',')','*','#','%');
	$d = str_replace($aRemplasar,'-',$desc);
	$insert = array(
		'id' => $this->input->post('id'),
		'qty' => 1,
		'price' => $this->input->post('price'),
		'name' => $d
	);
		$this->cart->insert($insert);
				redirect($previous);
	}


	function remove($rowid) {

	$this->cart->update(array(
		'rowid' => $rowid,
		'qty' => 0
	));
		if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }
		redirect($previous);
	}

	function buscar() {
		$this->load->model('Producto');
		$keyword = $this->input->post('keyword');
		$productos['producto'] = $this->Producto->buscar($keyword);
		$data = $productos;
		$this->load->view('listas/test',$data);
	}
}
