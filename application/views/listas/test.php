<!--
<br><h1 align="center" >Sin Fotos</h1>
<div class="row"><!--Lista -->
<!-- <?php
 	$i = 0 ;
	foreach ($productosL as $f){

	$file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$f['codigo']. '.jpg';
	$file_headers = @get_headers($file);
	if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
  }else{
		 $i++;
			?> -->
			<!-- <div class="col-md-2 col-md-offset-1">
				<br>
					<div>Numero :<?php echo $i?></div>
					<div>Codigo :<?php echo $f['codigo']?></div>
					<div>Descripcion : <?php echo $f['descripcion']?></div>
					<div>Marca : <?php echo $f['marca']?></div>
					<div><img class="responsive-img lazy" src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $f['codigo'] ?>.jpg"/></div>
				</br>
			</div> -->
<!-- <?php
        $exif = exif_read_data($file, 0, true);
        foreach ($exif as $clave => $sección) {
            foreach ($sección as $nombre => $valor) {
                echo "$clave.$nombre: $valor<br />\n";
            }
        }

		}

		}
?> -->
<!-- </div> -->
<?php echo '<pre>'; var_dump($producto); echo '</pre>'; ?>
