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

	$config = array();
	$config['enable_query_strings'] = True;
	$config['page_query_string'] =true;

	$limite = 40;
	$config["per_page"] = $limite;


	$pagina = $_GET['per_page'];
	if(intval($pagina) == 1){
		$offset = 0 * $limite;
	}else{
		$offset = intval($pagina) * $limite;
	}

	$grupo = $_GET["cat"];
	if(isset($_GET["subcat"])){
		$subGrupo = $_GET["subcat"];
		$data1['pXcat'] = $this->Producto->listaPorCat($limite,$offset,$grupo,$subGrupo);
		$total_row = $this->Producto->record_count($subGrupo,'subgrupo');
		$config["base_url"] = base_url() . "index.php/Listas/verPorCat";
		$config['first_url'] = "?cat=$grupo&subcat=$subGrupo&per_page=1";
	}else{
		$data1['pXcat'] = $this->Producto->listaPorCat($limite,$offset,$grupo);
			$total_row = $this->Producto->record_count($grupo,'grupo');
			$config["base_url"] = base_url() . "index.php/Listas/verPorCat";
			$config['first_url'] = "?cat=$grupo&per_page=1";
	}
	$config['last_link'] = FALSE;
	$config["total_rows"] = $total_row;
	$config['num_links'] = $total_row;
	$config['use_page_numbers'] = TRUE;
	$config['reuse_query_string'] = True;
	$config['cur_tag_open'] = '&nbsp;<a class="current">';
	$config['cur_tag_close'] = '</a>';
	$config['next_link'] = 'Next';
	$config['prev_link'] = 'Previous';
	$config['$first_url'] = '';

	$this->pagination->initialize($config);
	if($this->uri->segment(3)){
	$page = ($this->uri->segment(3)) ;
	}
	else{
	$page = 1;
	}

		// //query a db
		// if(isset($_GET["subcat"])){
		// 	$subGrupo = $_GET["subcat"];
		// 	$data1['pXcat'] = $this->Producto->listaPorCat($grupo,$subGrupo);
		// }else{
		// 	$data1['pXcat'] = $this->Producto->listaPorCat($grupo);
		//
		// }

		$str_links = $this->pagination->create_links();
		$data1["links"] = explode('&nbsp;',$str_links );

	//vistas
		//maqueta top
	$this->load->view('sitio/header');
	$this->load->view('menu/top');
	$this->load->model('Categorias');
$data4['categorias'] = $this->Categorias->catArray();
$this->load->view('menu/cat',$data4);
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
