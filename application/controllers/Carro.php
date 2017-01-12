 <?php
class Carro extends CI_Controller {

	function index() {


		//librerias
		$this->load->library('cart');
		//models

		//falta si $local no esta setiado volver a aleguir tienda o definir si va a exitir una por default

		$this->load->view('sitio/header');
		$this->load->view('menu/top');
		$this->load->view('menu/cat');

		//carro por ahora
		$this->load->view('carro/carro');

		$this->load->view('sitio/redesSociales');
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');


	}

		function remove($rowid) {

		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
			redirect('index.php/Carro');
		}

		function mod($rowid) {

		$qty = $this->input->post('qty');

		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => $qty
		));
			redirect('index.php/Carro');
		}
}
