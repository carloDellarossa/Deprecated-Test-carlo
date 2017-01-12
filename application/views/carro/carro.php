<br><h1 align="center">carrofull.php</h1>
<?php if($productosC = $this->cart->contents()) { ?>
	<div>
		<table class="table table-hover">
		<caption>Carro de compras</caption>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Row id</th>
				<th>Cantida</th>
				<th>Eliminar del carro</th>
				<th>Modificar el carro</th>
				<th></th>
			</tr>
		</thead>
		<?php foreach ($productosC as $item): ?>
			<?php echo form_open('index.php/Carro/mod/'.$item['rowid']); ?>
			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['price']; ?></td>
				<td><?php echo $item['rowid']; ?></td>
				<td><?php echo form_input('qty',$item['qty']);?></td>
				<td class="remove">
				<?php echo form_hidden('id', $item['id']); ?>
				<?php echo anchor('index.php/Carro/remove/'.$item['rowid'],'X'); ?>
				</td>
				<td>
				<?php echo form_submit('action','Modificar'); ?>
				</td>
				<?php echo form_close(); ?>
			</tr>
		<?php endforeach; ?>
		<tr class="total">
			<td colspan="2"><strong>Total</strong></td>
			<td>$<?php echo $this->cart->total(); ?></td>
		</tr>
		</table>
	</div>
<?php }else{
echo "no hay productos";
} ?>

<br><h6> <?php echo anchor('index.php/Inicio', 'Seguir comprando') ?> </h6>
<br><h6> <?php echo anchor('index.php/Orden', 'Checkout') ?> </h6>
<br><h6> <?php echo anchor('index.php/Cot', 'Cotisacion') ?> </h6>
