<?php
	tcpdf();
	$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$obj_pdf->SetCreator(PDF_CREATOR);
	$title = "Test orden a pdf";
	$obj_pdf->SetTitle($title);
	$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title,
	" 76.195.957-3 IMPORTADORA Y EXPORTADORA DURBAN LIMITADA
	IMPORTACION Y DISTRIBUCION
	CALLE PRINCIPAL 230, COSMITO
	PENCO - CONCEPCION - REGION DEL BIO-BIO");
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$obj_pdf->SetFont('helvetica', '', 9);
	$obj_pdf->setFontSubsetting(false);
	$obj_pdf->AddPage();
	ob_start();

	//TODO tomar los datos de la orden y ponerlo aqui.
?>
<!-- Falta darle formato y traer los datos de la orden -->
<style>
/*div {
	background-color: RED;
}*/
</style>
<div>
	Numero de boleta/factura
</div>

<div>
	<p>Datos de encabezado
	<p>Rut:
	Fecha:
	Razon social:
	<p>Comprador
	Folio Fisico:
	<p>Sucursal:
	Centro Costo:
	Moneda
</div>
<style>
.tablas {
	padding-left: 50px;
	padding-right: 50px
}
</style>
<br><h1 align="center">Carro de compras</h1>
<?php if($productosC = $this->cart->contents()) { ?>
 <div class="tablas">
		<table class="table table-hover">
		<caption>Carro de compras</caption>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Cantida</th>
				<th></th>
			</tr>
		</thead>
		<?php foreach ($productosC as $item): ?>
			<?php echo form_open('index.php/Carro/mod/'.$item['rowid']); ?>

			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['name']; ?></td>
				<td>$ <?php echo number_format($item['price'],'0',',','.')?></td>
				<td><?php echo $item['qty'];?></td>
				<?php echo form_close(); ?>
			</tr>
		<?php endforeach; ?>
		<tr class="total">
			<td colspan="2"><strong>Total</strong></td>
			<td>$ <?php echo number_format($this->cart->total(),'0',',','.');?></td>
			<td></td>
		</tr>
		</table>
	</div>
	<?php }else{
	echo "no hay productos";
	} ?>
<div>
	<p>Recumen de compra
	<p>total sin iva
	<p>total con iva
	<p>iva
	<p>descuentos
	<p>total final
</div>
<?php
		$content = ob_get_contents();
	ob_end_clean();
	$obj_pdf->writeHTML($content, true, false, true, false, '');
	$obj_pdf->Output('output.pdf', 'I');
?>
