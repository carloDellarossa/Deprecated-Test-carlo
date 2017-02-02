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
	margin-top:20px;
	max-width: inherit;
}


/* PAGINACION*/
.paginacion {
	text-align: center;
	background-color: #ffffff;
	border-color: #b2b1b1;
	top: 50px;
	padding: 4px;
}

.paginacion .pagination > li > a {
  color: #000000;
}
.paginacion .pagination > li > a:hover,
.paginacion .pagination > li > a:focus {
  color: #000000;
}

.paginacion .pagination  > .active > a,
.paginacion .pagination  > .active > a:hover,
.paginacion .pagination  > .active > a:focus {
  border: ;
  border-color : #cecece;
  color: #000000;
  background-color: #cecece;
}
.paginacion .pagination  > .open > a,
.paginacion .pagination  > .open > a:hover,
.paginacion .pagination  > .open > a:focus {
  color: #000000;
  background-color: #cecece;
}

.paginacion .current {
	color: #000000;
	background-color: #cecece;
}

</style>

<?php
if (count($pXcat) == 0) {
	echo '<br>No hay productos diponobles en esta catergoria';
}else{ ?>
<div class="lista-todos-productos">
  <div class="title container">

    <h1><?php echo $pXcat[0]['grupo'];?></h1>
		TODO Filtrar por mas de un paramatro para que no re resetee ejemplo filtar por marca primero luego por subgrupo2 y q vuelva a mostrar todas las marcas 
  </div>
	<div>
		<nav class="paginacion" aria-label="Page navigation">
		  <ul class="pagination" >

				<?php foreach ($links as $link) {
				echo "<li>". $link."</li>";

				} ?>

		  </ul>
		</nav>
	</div>
  <div class="container-fluid">
		<div class="filtros col-lg-2 col-md-2 col-sm-4">
				<?php //echo '<pre>'; var_dump($filtros); echo '</pre>'; ?>
				 <ul>
						 <?php foreach ($filtros as $filtro => $v){?>
						 <h1><?php	echo $filtro; ?></h1>
						 <ul style="max-height: 1000px; overflow: auto">
							 <?php for($i = 0; $i < count($v); $i++) {?>
								 <?php foreach ($v[$i] as $key => $value){?>
									<li><a href="<?php echo site_url('index.php/Listas/filtrar?f='.$value.'') ?>"><?php echo $value;?></a></li>
								 <?php } ?>
							 <?php } ?>
						 </ul>
						 <?php } ?>
				 </ul>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-8">
	    <ul class="lista-productos">



				<?php //echo '<pre>'; print_r($pXcat); echo '</pre>';?>
	      <?php foreach ($pXcat as $n){
					echo form_open('index.php/Listas/agregar');
	        $file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$n['pro_codprod']. '.jpg';
	        $file_headers = @get_headers($file); ?>
	      <li class="col-lg-3 col-md-3 col-sm-6">
	        <div class="producto">
	          <a href="<?php echo site_url('index.php/Unproducto?codigo='.urlencode($n['pro_codprod']).'')?>" >
	            <div class="producto-imagen">
								<i></i>
	              <?php
	              if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
	              ?>
	                <img  src="<?php echo site_url('img/nodisponible.jpg');?>"/><!--Img -->
	              <?php
	              }else{
	              ?>
	                <img  src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $n['pro_codprod'] ?>.jpg"/><!--Img -->
	              <?php } ?>
	            </div>
	            <div class="producto-info">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
		                <div class="precio">
		                  $<?php echo number_format($n['precio'],'0',',','.')?>
		                </div>
										<div class="btnAgregar">
											<?php echo form_submit('action','Agregar al carro'); ?>
										</div>
									</div>
									<div class="nombre col-lg-6 col-md-6 col-sm-12">
										<?php echo $n['pro_desc']?>
									</div>
								</div>
	            </div>
	          </a>
	        </div>
	      </li>
				<?php echo form_hidden('id', $n['pro_codprod']); ?>
				<?php echo form_hidden('name', $n['pro_desc']); ?>
				<?php echo form_hidden('price', $n['precio']); ?>

				<?php echo form_close(); ?>
		 <?php }?>
	    </ul>
		</div>
	</div>
</div>
<?php
}
?>
<div >
	<nav class="paginacion" aria-label="Page navigation">
	  <ul class="pagination" >

			<?php foreach ($links as $link) {
			echo "<li>". $link."</li>";
			} ?>

	  </ul>
	</nav>
</div>
