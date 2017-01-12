<?php

	//No modificiar nada esta funcionando
		//este archivo helper llama a los archivos de configuracion de la libreria TCP pdf 
		// y despues es inicialisado en el Controller Createdpf.php
	function tcpdf()
	{
		require_once('tcpdf/examples/lang/eng.php');
		require_once('tcpdf/tcpdf.php');
	}
?>