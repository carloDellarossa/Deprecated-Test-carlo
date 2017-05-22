
<!--Lista de productos-->
<div class="lista-todos-productos">
  <div class="title container">
    <h1>Ofertas</h1>
  </div>
  <div class="container-fluid">
	    <ul class="lista-productos">
	      <?php foreach ($productosO as $o){
					echo form_open('index.php/Inicio/agregar');
	        $file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$o['pro_codprod']. '.jpg';
	        $file_headers = @get_headers($file); ?>
	      <li class="col-lg-3 col-md-3 col-sm-6">
	        <div class="producto">
	          <a href="<?php echo site_url('index.php/Unproducto?codigo='.urlencode($o['pro_codprod']).'')?>" class="img-responsive" alt="Responsive image">
              <div class="producto-codigo">
              <?php echo $o['pro_codprod']?>
              </div>
              <div class="producto-imagen">
								<i></i>
	              <?php
	              if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
	              ?>
	                <img  src="<?php echo site_url('img/nodisponible.jpg');?>"/><!--Img -->
	              <?php
	              }else{
	              ?>
	                <img  src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $o['pro_codprod'] ?>.jpg" class="img-responsive" alt="Responsive image"/><!--Img -->
	              <?php } ?>
	            </div>
	            <div class="producto-info">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
                    <?php if ($this->config->item('precio')) { ?>
  		                <div class="precio">
  		                  $<?php echo number_format($o['precio'],'0',',','.')?>
  		                </div>
                    <?php } ?>
										<div class="btnAgregar">
											<?php echo form_submit('action','Agregar al carro'); ?>
										</div>
									</div>
									<div class="nombre col-lg-6 col-md-6 col-sm-12">
										<?php echo $o['pro_desc']?>
									</div>
								</div>
	            </div>
	          </a>
	        </div>
	      </li>
				<?php echo form_hidden('id', $o['pro_codprod']); ?>
				<?php echo form_hidden('name', $o['pro_desc']); ?>
				<?php echo form_hidden('price', $o['precio']); ?>

				<?php echo form_close(); ?>
		 <?php }?>
	    </ul>
		</div>
</div>
