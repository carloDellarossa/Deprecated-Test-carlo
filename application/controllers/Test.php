<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()	{
  if ($this->config->item('precio')){
      echo 'asdf';

    }else{
      echo 'fdsa';
    };
	}

}
