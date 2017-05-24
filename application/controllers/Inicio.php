<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		//librerias
		$this->load->library('cart');
		//models
			//producto
			$this->load->model('Producto');
			$this->load->model('Categorias');
			$this->config->load('variables');
			$data1['productosL'] = $this->Producto->listaProductos();
			$data2['productosO'] = $this->Producto->listaOfertas();
			$data3['productosN'] = $this->Producto->listaNovedades();
			//TODO crear template con las views, incluyendo categorias
			$data4['categorias'] = $this->Categorias->catArray();
		//falta si $local no esta setiado volver a aleguir tienda o definir si va a exitir una por default

		$this->load->view('sitio/header');
		$this->load->view('menu/top');
		$this->load->view('menu/cat',$data4);
		$this->load->view('sitio/banner');
		$this->load->view('listas/listaProductos',$data1);
		$this->load->view('listas/listaOfertas',$data2);
		$this->load->view('listas/listaNovedades',$data3);

		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');
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

}
