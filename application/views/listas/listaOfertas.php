<br><h1 align="center" >listaOfertas.php</h1>
<div class="container">
	<div class="row"><!--Lista -->
	<?php foreach ($productosO as $o){
		$file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$o['pro_codprod']. '.jpg';
		$file_headers = @get_headers($file); ?>
		<div class="col-md-2 col-md-offset-1"><!-- producto -->
		<?php echo form_open('index.php/Inicio/agregar'); ?>
		<div style="backgraund : yellow">Codigo :<?php echo $o['pro_codprod']?></div><!--codigo -->

		<?php
		if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
		?>
		<div><img class="responsive-img lazy" src="<?php echo site_url('img/nodisponible.jpg');?>"/></div><!--Img -->
		<?php
		}else{
		?>
			<div><img class="responsive-img lazy" src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $o['pro_codprod'] ?>.jpg"/></div><!--Img -->
		<?php } ?>
			<div><?php echo $o['pro_desc']?></div><!--nombre -->
			<div><?php echo $o['pro_glosa']?></div><!--descripcion -->
			<div><?php echo $o['precio']?></div><!-- precio -->
			<?php echo form_hidden('id', $o['pro_codprod']); ?>
			<?php echo form_hidden('name', $o['pro_desc']); ?>
			<?php echo form_hidden('price', $o['precio']); ?>
			<div><?php echo form_submit('action','Agregar al carro'); ?></div><!-- btn-->
			<?php echo form_close(); ?>
		</div>
	<?php }?>
	</div>
</div>
