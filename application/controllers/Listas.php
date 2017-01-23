<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Listas extends CI_Controller {

	public function index()
	{


	}

public function verPorCat($cat){
	//librerias
	$this->load->library('cart');
	//models
		//producto
		$this->load->model('Producto');
		$data3['productosN'] = $this->Producto->listaPorCat($cat);
	//falta si $local no esta setiado volver a aleguir tienda o definir si va a exitir una por default

	$this->load->view('sitio/header');
	$this->load->view('menu/top');
	$this->load->view('menu/cat');
	$this->load->view('sitio/banner');
	$this->load->view('listas/listaProductos',$data1);
	$this->load->view('listas/listaOfertas',$data2);
	$this->load->view('listas/listaNovedades',$data3);
	$this->load->view('sitio/redesSociales');
	$this->load->view('sitio/sucursales');
	$this->load->view('sitio/footer');
}

		function agregar() {

		// $this->load->model('Producto');

		// $producto = $this->Producto->producto($this->input->post('id'));

		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $this->input->post('price'),
			'name' => $this->input->post('name')
		);

			$this->cart->insert($insert);

			redirect('index.php/Listas');
		}


		function remove($rowid) {

		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
			redirect('index.php/Listas');
		}



}
