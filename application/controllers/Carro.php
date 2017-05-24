 <?php
class Carro extends CI_Controller {

	function index() {


		//librerias
		$this->load->library('cart');
		//models

		//falta si $local no esta setiado volver a aleguir tienda o definir si va a exitir una por default

		$this->load->view('sitio/header');
		$this->load->view('menu/top');
    $this->load->model('Categorias');
    $data4['categorias'] = $this->Categorias->catArray();
    $this->load->view('menu/cat',$data4);

		//carro por ahora
		$this->load->view('carro/carro');

		
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');


	}

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
