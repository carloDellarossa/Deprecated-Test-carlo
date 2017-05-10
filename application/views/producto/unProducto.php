<style>
.lista-todos-productos{
	margin-top:20px;
	margin-bottom:40px;
	font-size:13px
}
.lista-todos-productos .title{
	position:relative;
}
.lista-todos-productos .title h1{
	font-size:20px;
	line-height:50px;
	text-align: center;
	margin-bottom:0
}
.lista-todos-productos .lista-productos{
	margin-left:-10px;
	min-height:200px
}
.lista-todos-productos .lista-productos li{
	list-style:none;padding:0 0 20px 10px;
	margin-left:0;
	float:left
}
.lista-todos-productos .lista-productos li a{
	color:#333;
	display:block
}
.lista-todos-productos .lista-productos li a:hover{
	text-decoration:none
}
.lista-todos-productos .producto{
	position:relative;padding:0 10px;
	border:1px solid transparent;
	background-color:#fff
}
.lista-todos-productos .producto:hover{
	box-shadow:0 3px 6px 0 rgba(51,51,51,.298039)
}
.lista-todos-productos .producto-imagen{
	padding-top:10px;
	text-align:center;
	min-width:210px;
	height:220px;
	overflow:hidden
}
.lista-todos-productos .producto-imagen i{
	content:'';
	display:inline-block;
	height:100%;
	vertical-align:middle;
	width:0;
	font-size:0;
	overflow:hidden
}
.lista-todos-productos .producto-imagen img{
	display:inline-block;
	vertical-align:middle;
	max-width:210px;
	max-height:210px
}
.lista-todos-productos .producto-info{
	position:relative;
	height:100px;
	padding-top:5px
}
.lista-todos-productos .nombre{
	position:absolute;
	right:0;
	/*top:28px;*/
	line-height:20px;
	font-size:10px;
}
.lista-todos-productos .precio{
	text-align:center;
	display:block;
	color:#545454;
	font-weight:700;
	font-size:18px;
	margin-right:10px
}
.lista-todos-productos .btnAgregar{
	text-align:center;
	padding-top:10px
}
.lista-todos-productos .btnAgregar a{
	visibility:hidden;
	font-size:16px;
	background-color:#666;
	padding:0 80px;
	line-height:50px;
	display:inline-block;
	color:#fff;
	border-radius:4px
}
.lista-todos-productos .btnAgregar a:hover{
	text-decoration:none;
	background-color:#999
}
.contenedor-producto{
	margin-top:20px
}
/*
foto principal*/
.product{
	border: 1px solid #dddddd;
	height: 321px;
}

.product img{
  display:inline;
  margin-left: auto;
  margin-right: auto;
}

/*
limites del container */
.content-wrapper {
	max-width: 1140px;
	background: #fff;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: 10px;
	border: 0px;
	border-radius: 0px;
}

.container-fluid{

	margin: 0 auto;
}

.view-wrapper {
	float: right;
	max-width: 70%;
	margin-top: 25px;
}

.container {
	padding-left: 0px;
	padding-right: 0px;
	max-width: 100%;
}

/*
thubs*/
.service1-items {
	padding: 0px 0 0px 0;
	float: left;
	position: relative;
	overflow: hidden;
	max-width: 100%;
	height: 321px;
	width: 130px;
}

.service1-item {
	height: 107px;
	width: 120px;
	display: block;
	float: left;
	position: relative;
	padding-right: 20px;
	border-right: 1px solid #DDD;
	border-top: 1px solid #DDD;
	border-bottom: 1px solid #DDD;
}

.service1-item > img {
	max-height: 110px;
	max-width: 110px;
	opacity: 0.6;
	transition: all .2s ease-in;
	-o-transition: all .2s ease-in;
	-moz-transition: all .2s ease-in;
	-webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
	cursor: pointer;
	opacity: 1;
}

.service-image-left {
	padding-right: 50px;
}

.service-image-right {
	padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
	max-height: 155px;
}
.nombre{
  font-size: 20px;
  padding: 5px
}
.precio{
  text-align:left;
  display:block;
  color:#545454;
  font-weight:700;
  font-size:18px;
  margin-right:10px
}
.rangos{
    text-align:center;
		padding-bottom: 10px;
}
.rangos h5{
  color:#545454;
  font-weight:700;
  font-size:18px;
}
.btnAgregar{
	text-align:center;
	padding-top:10px;
  width: auto;
}
.btnAgregar a{
	visibility:hidden;
	font-size:16px;
	background-color:#666;
	padding:0 80px;
	line-height:50px;
	display:inline-block;
	color:#fff;
	border-radius:4px
}
.btnAgregar a:hover{
	text-decoration:none;
	background-color:#999
}
</style>
<div class="lista-un-producto">
	<div class="container">
	  <div class="content-wrapper">
			<div class="item-container">
				<div class="container">
					<div class="row">
						<?php foreach ($producto as $p) { ?>
						<!-- Imagen -->
						<div class="producto col-md-4 service-image-left">
							<?php
							$file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$p['pro_codprod']. '.jpg';
							$file_headers = @get_headers($file);

							if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
							?>
								<img  src="<?php echo site_url('img/nodisponible.jpg');?>"/><!--Img -->
							<?php
							}else{
							?>
								<img  src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $p['pro_codprod'] ?>.jpg"/><!--Img -->
							<?php } ?>
						</div>

						<!--Precio por lista -->

						<?php echo form_open('index.php/Unproducto/agregar');?>
						<div class="col-md-8">
							<div class="nombre"><?php echo $p['pro_desc'] ?></div>
		          <div class="rangos col-md-12">
								<table>
										<caption>Precio mayorista</caption>

													<?php foreach ($rango as $r) {?>
														<tr>
																	<th data-field="cant">De :</th>
																	<td><?php echo $r['ri']?></td>
																	<?php if (!isset($r['rf'])) { ?>
																		<th data-field="cant">O :</th>
																		<td><?php echo $r['rf']?></td>
																		<th data-field="cant">Precio :</th>
																		<td> $ <?php echo number_format($r['precio'],'0',',','.')?></td>
																	<?php }else{?>
																		<?php if ($r['rf']=='999999'){?>
																			<th data-field="cant">O :</th>
																			<td><?php echo 'mas'?></td>
																		<?php }else{ ?>
																			<th data-field="cant">A :</th>
																			<td><?php echo $r['rf']?></td>
																		<?php } ?>
																		<th data-field="cant">Precio :</th>
																		<td> $ <?php echo number_format($r['precio'],'0',',','.')?></td>
																	<?php } ?>
														</tr>
													<?php
													}?>


								</table>
		          </div>

							<!-- Info -->

			        <div class="form col-md-12">
								<div class="precio">Precio: $<?php echo number_format($p['precio'],'0',',','.')?></div>
								<div class="diponibilidad">Si o no stock</div>
			          <div class="btnAgregar">
										<?php echo form_submit('action','Agregar al carro'); ?>
			          </div>
							</div>
		        </div>
					</div>
					<!-- Ocultos -->
					<?php echo form_hidden('id', $p['pro_codprod']); ?>
					<?php echo form_hidden('name', $p['pro_desc']); ?>
					<?php echo form_hidden('price', $p['precio']); ?>
					<?php echo form_close(); ?>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>
