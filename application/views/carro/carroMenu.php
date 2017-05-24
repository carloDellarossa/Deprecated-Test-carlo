<?php if($productosC = $this->cart->contents()){ ?>
	<div>
		<table class="table table-hover">
		<caption>Carro de compras</caption>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Row id</th>
				<th>Eliminar del carro</th>
				<th></th>
			</tr>
		</thead>
		<?php foreach ($productosC as $item){ ?>

			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['price']; ?></td>
				<td><?php echo $item['rowid']; ?></td>
				<td class="remove">
					<?php echo anchor('index.php/Inicio/remove/'.$item['rowid'],'X'); ?>
				</td>
			</tr>
		<?php } ?>
		<tr class="total">
			<td colspan="2"><strong>Total</strong></td>
			<td>$<?php echo $this->cart->total(); ?></td>
		</tr>
		</table>
	</div>
<?php }else{
	echo "no hay productos";
} ?>
<br><h6> <?php echo anchor('index.php/Carro', 'ir al carro') ?> </h6>
<br><h6>Ir a checkout</h6>
