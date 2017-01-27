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


/* PAGINACION*/
#pagination{
margin: 40 40 0;
}

#pagination2{
margin: 40 40 0;
}

ul.tsc_pagination li a
{
border:solid 1px;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
padding:6px 9px 6px 9px;
}
ul.tsc_pagination li
{
padding-bottom:1px;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
color:#FFFFFF;
box-shadow:0px 1px #EDEDED;
-moz-box-shadow:0px 1px #EDEDED;
-webkit-box-shadow:0px 1px #EDEDED;
}
ul.tsc_pagination
{
margin:4px 0;
padding:0px;
height:100%;
overflow:hidden;
font:12px 'Tahoma';
list-style-type:none;
}
ul.tsc_pagination li
{
float:left;;
margin:0px;
padding:0px;
margin-left:5px;
}
ul.tsc_pagination li a
{
color:black;
display:inline;
text-decoration:none;
padding:7px 10px 7px 10px;
}
ul.tsc_pagination li a img
{
border:none;
}
ul.tsc_pagination li a
{
color:#0A7EC5;
border-color:#8DC5E6;
background:#F8FCFF;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
text-shadow:0px 1px #388DBE;
border-color:#3390CA;
background:#58B0E7;
background:-moz-linear-gradient(top, #B4F6FF 1px, #63D0FE 1px, #58B0E7);
background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #B4F6FF), color-stop(0.02, #63D0FE), color-stop(1, #58B0E7));
}
</style>

<?php
if (count($pXcat) == 0) {
	echo '<br>No hay productos diponobles en esta catergoria';
}else{
	//echo '<pre>'; var_dump($pXcat); echo '</pre>';
	?>

<!--Lista de productos-->
<div class="lista-todos-productos">
  <div class="title container">
    <h1><?php echo $pXcat[0]['grupo'];?></h1>
  </div>
  <div class="contenedor-producto container">
	    <ul class="lista-productos">



				<?php //echo '<pre>'; print_r($pXcat); echo '</pre>';?>
	      <?php foreach ($pXcat as $n){
					echo form_open('index.php/Listas/agregar');
	        $file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$n['pro_codprod']. '.jpg';
	        $file_headers = @get_headers($file); ?>
	      <li class="col-lg-3 col-md-4 col-sm-6">
	        <div class="producto">
	          <a href="">
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
<?php
}
?>
<div id="pagination">
<ul class="tsc_pagination">

<!-- Show pagination links -->
<?php foreach ($links as $link) {
echo "<li>". $link."</li>";
} ?>
</div>
