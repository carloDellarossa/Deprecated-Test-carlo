Cotisacion.php

<!-- Resumen del carro -->
<br><h1 align="center">carroMenu.php</h1>
<?php if($productosC = $this->cart->contents()):?>
	<div>
		<table class="table table-hover">
		<caption>Carro de compras</caption>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Cantida</th>
				<th></th>
			</tr>
		</thead>
		<?php foreach ($productosC as $item): ?>
			<tr>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['price']; ?></td>
				<td><?php echo $item['qty']; ?></td>
			</tr>
		<?php endforeach; ?>
		<tr class="total">
			<td colspan="2"><strong>Total</strong></td>
			<td>$<?php echo $this->cart->total(); ?></td>
		</tr>
		</table>
	</div>
<?php endif; ?>

<?php echo form_open('index.php/Cot/agregar');?>

<!-- Datos del carro -->
<!-- Datos del cliente -->
<h3> Ingrese sus datos </h3>
<?php
echo form_label('Nombre : ') ,form_input('Nombre', 'nombre');
echo form_label('Rut : ') ,form_input('Rut', '11111111-1');
echo form_label('Telefono : ') ,form_input('Telefono', '+56 1 111111111');
echo form_label('Correo : ') ,form_input('Correo', 'nombre@ejemplo.cl');
?>

<!-- Finalisar compra -->
<?php
echo form_submit('action','Generar Cotisacion');
?>
<?php echo form_close(); ?>


<pre>
<?php
foreach ($cot as $c) {
	print_r($c); 
}
?>
