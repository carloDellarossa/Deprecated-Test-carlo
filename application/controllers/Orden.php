
 <?php
class Orden extends CI_Controller {

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

		// resumen de la orden
		$this->load->view('orden/orden');

		$this->load->view('sitio/redesSociales');
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');
	}
}
