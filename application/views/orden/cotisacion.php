<!-- Resumen del carro -->
<br><h1 align="center">Cotisación</h1>
<?php if($productosC = $this->cart->contents()):?>

<div clss="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<table class="table table-hover">
		<caption>Carro de compras</caption>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Cantidad</th>
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
<div class="col-md-10 col-md-offset-1">
<!-- Datos del carro -->
<!-- Datos del cliente -->
<h3> Ingrese sus datos </h3>
<?php
// echo form_label('Nombre : ') ,form_input('Nombre', 'nombre');
// echo form_label('Rut : ') ,form_input('Rut', '11111111-1');
// echo form_label('Teléfono : ') ,form_input('Teléfono', '+56 1 111111111');
// echo form_label('Correo : ') ,form_input('Correo', 'nombre@ejemplo.cl');
?>
<form>
	<div class="form-group">
	<label for="exampleInputName2">Nombre</label>
	<input type="text" class="form-control" id="exampleInputName2" placeholder="Ingrese su nombre">
	</div>
	<div class="form-group">
	<label for="exampleInputName2">Rut</label>
	<input type="text" class="form-control" id="exampleInputName2" placeholder="Ingrese su rut con guion y digito verificador">
	</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-default">Cotizar</button>
</form>
		</div>
	</div>
</div>
<!--Tomar datos con hidden values para pasarlo al pdf de imprecion y a la base de datos-->
