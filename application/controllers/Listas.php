<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Listas extends CI_Controller {

	public function index()
	{


	}

public function verPorCat(){

	//librerias
	$this->load->library('cart');
	$this->load->library('pagination');
	//mdoelo
	$this->load->model('Producto');

	//paginacion
	$p = $_GET["cat"];
	$str = str_replace('%20',' ',$p);
	$config = array();
	$config["base_url"] = base_url() . "index.php/Listas/verPorCat?cat=$str";
	$total_row = $this->Producto->record_count($p);
	$config["total_rows"] = $total_row;
	$config["per_page"] = 5;
	$config['use_page_numbers'] = TRUE;
	$config['num_links'] = $total_row;
	$config['cur_tag_open'] = '&nbsp;<a class="current">';
	$config['cur_tag_close'] = '</a>';
	$config['next_link'] = 'Next';
	$config['prev_link'] = 'Previous';

	$this->pagination->initialize($config);
	if($this->uri->segment(3)){
	$page = ($this->uri->segment(3)) ;
	}
	else{
	$page = 1;
	}

		//query a db
		$data1['pXcat'] = $this->Producto->listaPorCat($p);
		$str_links = $this->pagination->create_links();
		$data1["links"] = explode('&nbsp;',$str_links );

	//vistas
		//maqueta top
	$this->load->view('sitio/header');
	$this->load->view('menu/top');
	$this->load->view('menu/cat');
		//contenido
	$this->load->view('listas/listaPorCat',$data1);
		//maqueta btm
	$this->load->view('sitio/redesSociales');
	$this->load->view('sitio/sucursales');
	$this->load->view('sitio/footer');
}

		function agregar() {
			$p = $_GET["cat"];
		// $this->load->model('Producto');

		// $producto = $this->Producto->producto($this->input->post('id'));
		if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }

		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $this->input->post('price'),
			'name' => $this->input->post('name')
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
