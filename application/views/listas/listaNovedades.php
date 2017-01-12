<br><h1 align="center" >listaNovendades.php</h1>

<div class="row"><!--Lista -->
<?php foreach ($productosN as $n){ ?>
	<div class="col-md-2 col-md-offset-1"><!-- producto -->
		<?php echo form_open('index.php/Inicio/agregar'); ?>
		<div><?php echo $n['pro_codprod']?></div><!--codigo -->
		<div><img class="responsive-img lazy" src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $n['pro_codprod'] ?>.jpg"/></div><!--Img -->
		<div><?php echo $n['pro_desc']?></div><!--nombre -->
		<div><?php echo $n['pro_glosa']?></div><!--descripcion -->
		<div><?php echo $n['precio']?></div><!-- precio -->
		<?php echo form_hidden('id', $n['pro_codprod']); ?>
		<?php echo form_hidden('name', $n['pro_desc']); ?>
		<?php echo form_hidden('price', $n['precio']); ?>
		<div><?php echo form_submit('action','Agregar al carro'); ?></div><!-- btn-->
		<?php echo form_close(); ?>
	</div>
<?php }?>
</div>
