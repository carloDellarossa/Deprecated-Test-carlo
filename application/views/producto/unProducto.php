<style>
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
	max-width: 1140px;
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

<div class="container">
    <div class="content-wrapper">
		<div class="item-container">
			<div class="container">
					<?php foreach ($producto as $p) { ?>
				  <!-- IMAGENES  -->
					<?php
					$file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$p['pro_codprod']. '.jpg';
	        $file_headers = @get_headers($file);
					?>
					<!-- PRINCIPAL -->
					<div class="product col-md-3 service-image-left">
						<?php
						if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
						?>
							<img  src="<?php echo site_url('img/nodisponible.jpg');?>"/><!--Img -->
						<?php
						}else{
						?>
							<img  src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $p['pro_codprod'] ?>.jpg"/><!--Img -->
						<?php } ?>
					</div>
					<!-- SEGUNDARIAS	 -->
					<div class="container service1-items col-sm-3 col-md-3 pull-left">

							<a id="item-1" class="service1-item">
								<img src="<?php echo site_url('img/producto/producto1.jpg');?>" alt=""></img>
							</a>
							<a id="item-2" class="service1-item">
								<img src="<?php echo site_url('img/producto/producto2.jpg');?>" alt=""></img>
							</a>
							<a id="item-3" class="service1-item">
								<img src="<?php echo site_url('img/producto/producto3.jpg');?>" alt=""></img>
							</a>

					</div>

				<!-- INFO PRODUCTO -->
				<?php echo form_open('index.php/Unproducto/agregar');?>
				<div class="col-md-6">
					<div class="nombre"><?php echo $p['pro_desc'] ?></div>
        <div class="row">
          <div class="rangos col-md-12">
						<table>
								<caption>Precio mayorista</caption>
								<thead>
										<tr>
											<?php foreach ($rango as $r) {
													if (is_null($r['rf'])) {  ?>
															<th data-field="cant">Desde :<?php echo $r['rf']?> o mas</th>
													<?php } else { ?>
															<th data-field="cant">Desde :<?php echo $r['ri']?></th>
															<th data-field="cant">Hasta :<?php echo $r['rf']?></th>
											<?php }
											}?>
										</tr>
								</thead>
						</table>
          </div>
          <div class="form col-md-12">
					<div class="precio">Precio: $<?php echo number_format($p['precio'],'0',',','.')?></div>
					<div class="diponibilidad">Si o no stock</div>
          <div class="btnAgregar">

							<?php echo form_submit('action','Agregar al carro'); ?>

          </div>

        </div>
        </div>
				</div>
				<?php echo form_hidden('id', $p['pro_codprod']); ?>
				<?php echo form_hidden('name', $p['pro_desc']); ?>
				<?php echo form_hidden('price', $p['precio']); ?>

				<?php echo form_close(); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
