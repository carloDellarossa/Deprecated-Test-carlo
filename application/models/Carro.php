<?php
class Carro extends CI_Model {

//agregar
	public function agregarCarro($p,$c){
		//comprobar stock y cantidad
		$producto = $p+$c;
		$this->cart->insert($producto);

	}
//editar
	public function editarCarro($rowid,$c){
		$producto = $p+$c;
		$this->cart->update($producto);
	}
//eliminar
	public function removerCarro($rowid){
		$this->cart->remove($rowid);	
	}
//orden
	public function mostrarCarro(){
		$carro = $this->cart->contents();
		if (isset($carro)) {
			return $carro;
		}else{
			$rstring = "No hay productos en el carro";
			$carro = $carro + $rstring;
			return $carro->result_array();
		}
	}

	public function vaciarCarro($v){
		if(isset($v)){
			$this->cart->destroy();
			$v = null;

			return "carro eliminado";
		}
	}
}
