<style>
div{
	padding-left: 50px;
	padding-right: 50px
}
</style>
<br><h1 align="center">Carro de compras</h1>
<?php if($productosC = $this->cart->contents()) { ?>
 <div class="tablaCarro">
		<table class="table table-hover">
		<caption>Carro de compras</caption>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Cantidad</th>
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
				<td><?php echo number_format($item['price'],'0',',','.')?></td>
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
			<td>$<?php echo number_format($this->cart->total(),'0',',','.');?></td>
		</tr>
		</table>
	</div>
<?php }else{
echo "no hay productos";
} ?>
<div>
	<table class="table table-hover">
		<tr>
			<td><h3> <?php echo anchor('index.php/Inicio', '<i class="glyphicon glyphicon-home"></i>
			<span class="hidden-tablet">Seguir comprando</span>') ?> </h3></td>
			<td><h3> <?php echo anchor('index.php/Orden', '<i class="glyphicon glyphicon-ok"></i>
			<span class="hidden-tablet">Finalizar la compra</span>') ?> </h3></td>
			<td><h3> <?php echo anchor('index.php/Cot', '<i class="glyphicon glyphicon-print"></i>
			<span class="hidden-tablet">Crear cotización </span>') ?> </h6></td>
		</tr>
	</table>
</div>
