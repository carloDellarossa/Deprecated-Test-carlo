<?php
class Cot extends CI_Controller {

	function index() {
		//librerias
		$this->load->library('cart');
		//models
    $this->load->model('Cotisacion');
		//falta si $local no esta setiado volver a aleguir tienda o definir si va a exitir una por default

		$this->load->view('sitio/header');
		$this->load->view('menu/top');
		$this->load->model('Categorias');
		$data4['categorias'] = $this->Categorias->catArray();
		$this->load->view('menu/cat',$data4);

		// resumen de la orden
		$this->load->view('orden/cotisacion');

		
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');
	}

  function agregar (){
    $carro = $this->cart->contents();
    $datos = $this->input->post(NULL,TRUE);
    $cot = array_merge($datos , $carro);
    //$this->Cot->crear($cot);
    // echo "<pre>";
    // echo print_r($cot);
    // echo "<scrit> alert ('cot creada'); </script>";
    redirect('index.php/Cot');
  }
}
