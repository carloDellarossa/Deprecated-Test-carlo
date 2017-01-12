
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testfotos extends CI_Controller {

	public function index()
	{
		$this->load->model('Producto');
		$data1['productosL'] = $this->Producto->testFotos();
		$this->load->view('listas/testFotos',$data1);
	}

	public function agregar(){
		 	$i = 0 ;
			$this->load->model('Producto');
			$productosL = $this->Producto->testFotos();
			foreach ($productosL as $f){

			$file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$f['codigo']. '.jpg';
			$file_headers = @get_headers($file);
			if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
				 $i++;

				 	$this->Producto->add($f['codigo']);

					}
				}
	}


	public function cortar(){
		$this->load->model('Producto');
		$productosL = $this->Producto->testFotos();
		foreach ($productosL as $f){
		$image[] = glob('http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$f['codigo']. '.jpg', GLOB_BRACE);
		list($width, $height) = getimagesize($image);
		$ext = substr(strrchr($image, '.'), 1);
		$cropW   = $width;
		$cropH   = $height-40;
		if($ext =='jpeg'||$ext =='jpg')
		$origimg = imagecreatefromjpeg($image);
		else if ($ext=='png')
		$origimg = imagecreatefrompng($image);

		$cropimg = imagecreatetruecolor($cropW,$cropH);
		// Actual Crop Code
		imagecopyresized($cropimg, $origimg, 0, 0, 0, 0, $width, $height, $width, $height);
		//Save Cropped Image
		if($ext =='jpeg'||$ext =='jpg')
		{
		$savefile='crop/'.basename($image);
		imagejpeg($cropimg,$savefile);
		}
		else if ($ext=='png')
		{
		$savefile='crop/'.basename($image);
		imagepng($cropimg,$savefile);
		}
		echo '-->'.$savefile.'</p>';
		imagedestroy($cropimg);
		imagedestroy($origimg);
		}
	}
}
