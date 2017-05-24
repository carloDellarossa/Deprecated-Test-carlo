<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	public function index()
	{


	}

public function buscar(){

	//librerias
	$this->load->library('cart');
	// $this->load->library('pagination');
	//mdoelo
	$this->load->model('Producto');

	//paginacion

	// $config = array();
	// $config['enable_query_strings'] = True;
	// $config['page_query_string'] =true;
	//
	// $limite = 40;
	// $config["per_page"] = $limite;
	//
	//
	// $pagina = $_GET['per_page'];
	// if(intval($pagina) == 1){
	// 	$offset = 0 * $limite;
	// }else{
	// 	$offset = intval($pagina) * $limite;
	// }

	// $filtro = FALSE;
	// if(isset($_GET["f"])){
	// 	$filtro = $_GET["f"];
	// }else{
	// 	$filtro = FALSE;
	// }

//TODO limpiar esto para no repetir tanto el codigo
	// $grupo = $_GET["cat"];
	$keyword = $this->input->post('keyword');
	$data1['productosB'] = $this->Producto->buscar($keyword);
// 	if(isset($_GET["subcat"])){
// 		$subGrupo = $_GET["subcat"];
// 		$data1['pXcat'] = $this->Producto->listaPorCat($limite,$offset,$grupo,$subGrupo,$filtro);
// 		$total_row = $this->Producto->record_count($subGrupo,'subgrupo',$filtro);
// 		$config["base_url"] = base_url() . "index.php/Listas/verPorCat";
// 		$config['first_url'] = "?cat=$grupo&subcat=$subGrupo&per_page=1";
// 		$data1['filtros'] = $this->Producto->filtros($grupo,$subGrupo,$filtro);
// 	}else{
// 			$subGrupo = 0;
// 			$data1['pXcat'] = $this->Producto->listaPorCat($limite,$offset,$grupo,$subGrupo,$filtro);
// 			$total_row = $this->Producto->record_count($grupo,'grupo',$filtro);
// 			$config["base_url"] = base_url() . "index.php/Listas/verPorCat";
// 			$config['first_url'] = "?cat=$grupo&per_page=1";
// 			$data1['filtros'] = $this->Producto->filtros($grupo,$subGrupo,$filtro);
// 	}
// 	$config['num_links'] = 2;
// //	$config['last_link'] = TRUE;
// 	$config['last_link'] = 'Ultima';
// 	$config['first_link'] = 'Primera';
// 	$config["total_rows"] = $total_row;
// 	$config['use_page_numbers'] = TRUE;
// 	$config['reuse_query_string'] = TRUE;
// 	$config['cur_tag_open'] = '&nbsp;<a class="current">';
// 	$config['cur_tag_close'] = '</a>';
// 	$config['next_link'] = 'Siguiente';
// 	$config['prev_link'] = 'Anterior';
// 	$config['$first_url'] = '';
//
// 	$this->pagination->initialize($config);
// 	if($this->uri->segment(3)){
// 	$page = ($this->uri->segment(3)) ;
// 	}
// 	else{
// 	$page = 1;
// 	}
// 		$str_links = $this->pagination->create_links();
// 		$data1["links"] = explode('&nbsp;',$str_links );

	//vistas
		//maqueta top
	$this->load->view('sitio/header');
	$this->load->view('menu/top');
	$this->load->model('Categorias');
	$data4['categorias'] = $this->Categorias->catArray();
	$this->load->view('menu/cat',$data4);
		//contenido

	$this->load->view('listas/listaBusqueda',$data1);
		//maqueta btm
	
	$this->load->view('sitio/sucursales');
	$this->load->view('sitio/footer');
}

		function agregar() {
			$p = $_GET["cat"];
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

//TODO sacar estas funciones de aqui y dejar solo las que estan en carro
		function remove($rowid) {

		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
			if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }
			redirect($previous);
		}

		function filtrar(){
			if(isset($_SERVER['HTTP_REFERER'])) {
				$previous = $_SERVER['HTTP_REFERER'];
			}

			$filtro = FALSE;
			if(isset($_GET["f"])){
				$filtro = $_GET["f"];
			}else{
				$filtro = FALSE;
			}

			$previous .= '&per_page=1&f='.$filtro.'';

			redirect($previous);
		}


}
