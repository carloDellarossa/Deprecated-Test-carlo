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

/* Dropdown Button */
.dropbtn {
    background-color: white;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;

}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: white;
}

</style>
<!--Lista de productos-->
<div class="lista-todos-productos">
  <div class="title container">
    <h1>Productos mas vendidos</h1>
  </div>
  <div class="container-fluid">
	    <ul class="lista-productos">
	      <?php foreach ($productosL as $p){
					echo form_open('index.php/Inicio/agregar');
	        $file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$p['pro_codprod']. '.jpg';
	        $file_headers = @get_headers($file); ?>
	      <li class="col-lg-3 col-md-2 col-sm-6">
	        <div class="producto">
	          <a href="<?php echo site_url('index.php/Unproducto?codigo='.urlencode($p['pro_codprod']).'')?>">
							<div class="producto-codigo">
								<div class="col-lg-6 col-md-6 col-sm-6">
								<?php echo $p['pro_codprod']?>
								</div>
							<?php if ($this->config->item('codChilecompra')) { ?>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="dropdown">
	  								<button class="dropbtn">Dropdown</button>
									  <div class="dropdown-content">
									    <a href="#">Link 1</a>
									    <a href="#">Link 2</a>
									    <a href="#">Link 3</a>
									  </div>
									</div>
								</div>
							<?php } ?>
							</div>
	            <div class="producto-imagen">
								<i></i>
	              <?php
	              if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
	              ?>
	                <img  src="<?php echo site_url('img/nodisponible.jpg');?>"/><!--Img -->
	              <?php
	              }else{
	              ?>
	                <img  src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $p['pro_codprod'] ?>.jpg" class="img-responsive" alt="Responsive image"/><!--Img -->
	              <?php } ?>
	            </div>
	            <div class="producto-info">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<?php if ($this->config->item('precio')) { ?>
  		                <div class="precio">
  		                  $<?php echo number_format($p['precio'],'0',',','.')?>
  		                </div>
                    <?php } ?>
										<div class="btnAgregar">
											<?php echo form_submit('action','Agregar al carro'); ?>
										</div>
									</div>
									<div class="nombre col-lg-6 col-md-6 col-sm-6">
										<?php echo $p['pro_desc']?>
									</div>
								</div>
	            </div>
	          </a>
	        </div>
	      </li>
				<?php echo form_hidden('id', $p['pro_codprod']); ?>
				<?php echo form_hidden('name', $p['pro_desc']); ?>
				<?php echo form_hidden('price', $p['precio']); ?>

				<?php echo form_close(); ?>
		 <?php }?>
	    </ul>
		</div>
</div>
