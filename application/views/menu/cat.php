<style>
.navbar-cat {
  background-color: #ffffff;
  border-color: #b2b1b1;
  top: 50px;
  z-index: 9;
  padding: 4px;
}
.navbar-cat .navbar-brand {
  padding-top: 6px;
padding-left: 0px;
padding-right: 0px;
padding-bottom: 0px;
  color: #000000;
}
.navbar-cat .navbar-brand:hover,
.navbar-cat .navbar-brand:focus {
  color: #000000;

}
.navbar-cat .navbar-text {
  color: #000000;
}
.navbar-cat .navbar-nav > li > a {
  color: #000000;
}
.navbar-cat .navbar-nav > li > a:hover,
.navbar-cat .navbar-nav > li > a:focus {
  color: #000000;
}
.navbar-cat .navbar-nav > li > .dropdown-menu {
  background-color: #ffffff;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a {
  color: #000000;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li >  a:hover,
.navbar-cat .navbar-nav > li > .dropdown-menu > li >  a:focus {
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #cecece;
}
.navbar-cat .navbar-nav .open .dropdown-menu > .active >  a,
.navbar-cat .navbar-nav .open .dropdown-menu > .active  >  a:hover,
.navbar-cat .navbar-nav .open .dropdown-menu > .active >  a:focus {
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-nav > .active > a,
.navbar-cat .navbar-nav > .active > a:hover,
.navbar-cat .navbar-nav > .active > a:focus {
  border: ;
  border-color : #cecece;
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-nav > .open > a,
.navbar-cat .navbar-nav > .open > a:hover,
.navbar-cat .navbar-nav > .open > a:focus {
  color: #000000;
  background-color: #cecece;
}
.navbar-cat .navbar-toggle {
  border-color: #cecece;
}
.navbar-cat .navbar-toggle:hover,
.navbar-cat .navbar-toggle:focus {
  background-color: #cecece;
}
.navbar-cat .navbar-toggle .icon-bar {
  background-color: #000000;
}
.navbar-cat .navbar-collapse,
.navbar-cat .navbar-form {
  border-color: #000000;
}
.navbar-cat .navbar-link {
  color: #000000;
}
.navbar-cat .navbar-link:hover {
  color: #000000;
}

@media (max-width: 767px) {
  .navbar-cat .navbar-nav .open .dropdown-menu > li > p > a {
    color: #000000;
  }
  .navbar-cat .navbar-nav .open .dropdown-menu > li > p > a:hover,
  .navbar-cat .navbar-nav .open .dropdown-menu > li > p > a:focus {
    color: #000000;
  }
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #000000;
    background-color: #cecece;
  }
}

/*carro de compra */
.lista-carro{
	margin-top:10px;
	margin-bottom:20px;
	font-size:13px;
  margin: 0;
  padding: 0;
}

.lista-productos-carro{
	margin-left:-10px;
	min-height: 88vh;
  max-width : 252px;
}
.lista-productos-carro li{
	list-style:none;
  padding:0 0 0 0;
	margin-left:0;
	float:left
}
 .lista-productos-carro li a{
	color:#333;
	display:block
}
 .lista-productos-carro li a:hover{
	text-decoration:none;
}
.lista-carro .producto-carro{
	position:relative;
  padding:0 10px;
	border:1px solid transparent;
	background-color:#fff
}
.lista-carro .producto-carro:hover{
	box-shadow:0 3px 6px 0 rgba(51,51,51,.298039)
}
.lista-carro .imagen-carro{
	padding-top:10px;
	text-align:center;
	min-width:75px;
	height:75px;
	overflow:hidden
}
.lista-carro .imagen-carro i{
	content:'';
	display:inline-block;
	height:100%;
	vertical-align:middle;
	width:0;
	font-size:0;
	overflow:hidden
}
.lista-carro .imagen-carro img{
	display:inline-block;
	vertical-align:middle;
	max-width:75px;
	max-height:75px
}
.lista-carro .producto-carro-info{
	position:relative;
	height:100px;
	padding-top:5px
}
.lista-carro .nombre{
	position:absolute;
	right:0;
	/*top:28px;*/
	line-height:20px;
	font-size:10px;
}
.lista-carro .precio{
	text-align:center;
	display:block;
	color:#545454;
	font-weight:700;
	font-size:18px;
	margin-right:10px
}
.lista-carro .btnEliminar{
	text-align:center;
	padding-top:10px
}
.lista-carro .btnEliminar a{
	visibility:hidden;
	font-size:16px;
	background-color:#666;
	padding:0 80px;
	line-height:50px;
	display:inline-block;
	color:#fff;
	border-radius:4px
}
.lista-carro .btnEliminar a:hover{
	text-decoration:none;
	background-color:#999
}
.contenedor-producto-carro{
	margin-top:20px;
  min-height:100px;
  max-width : 260px
}

.scroll {
    height: auto;
    max-height: 150%;
    overflow-x: auto;
}

.categorias {

}
.subcat li {
  	list-style:none;
    padding:0 0 0 0;
    margin-left:0;
    float:left
}

/*sub menu */

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

.scrollable-menu {
    height: auto;
    max-height: 250px;
    padding: 5px;
    overflow-x: hidden;
}

/*.linksCarro h6{
  display: inline-block;
  vertical-align: top;
}*/

</style>


<?php
?>
		<nav class="navbar navbar-cat navbar-fixed-top">
		  <div class="container-fluid" id="carro">
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		    	<!--Boton vista en mibil -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Menu Mobil</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
		      	<!-- Icono marca link a Inicio -->
		    	<a class="navbar-brand" href="<?php echo site_url('index.php/Inicio'); ?>"><img class="" alt="Brand" src="<?php echo site_url('img/logo.png');?>" align="top" style="padding-bottom:5px"></a>
		      <ul class="nav navbar-nav navbar-left" >
			        <!--Menu Categorias -->
              <?php
              $keys = array_keys($categorias);
              for($i = 0; $i < count($categorias); $i++) {
                 ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $keys[$i] ;?><span class="caret"></span></a>
                <ul class="dropdown-menu multi-level">
                  <?php
                  foreach($categorias[$keys[$i]] as $key => $value) {
                    ?>
                            <li class="dropdown-submenu">

                              <?php echo anchor('index.php/Listas/verPorCat?cat='.urlencode($key).'&per_page=1',''.$key.'','class="dropdown-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"'); ?>
                                <ul class="dropdown-menu scrollable-menu">
                                <?php
                                foreach ($value as $s => $p) { ?>

                                    <li><a href="<?php echo site_url('index.php/Listas/verPorCat?cat='.urlencode($key).'&subcat='.urlencode($p).'&per_page=1') ?>"><?php echo $p;?></a></li>

                                <?php
                                }
                                ?>
                                </ul>

                            </li>
                          <!-- <a href="#"><h5><?php echo $key; ?></h5></a> -->

                  <?php }
                  ?>
              </ul>
            </li>
              <?php }
              ?>
          </ul><!-- termina menu categorias -->

          <!-- Buscar -->
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>

          <!-- Carro -->
          <ul class="nav navbar-nav navbar-right">


            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;<span class="badge"><?php echo $this->cart->total_items(); ?></span>
            </a>
              <ul class="dropdown-menu animated slideInRight lista-productos-carro scroll" style="margin-top : 5px" >
                <div class="lista-carro">
                  <div class="contenedor-producto-carro container">
                  <?php
                    $carro = $this->cart->contents();
                    if($this->cart->total_items() != 0){
                      foreach ($carro as $p) {
                  ?>
                        <li class="col-lg-12 col-md-12 col-sm-12">
                          <div class="producto-carro">
                            <div class="imagen-carro">
                              <?php
                              $file = 'http://www.libreriagiorgio.cl/lg/imagenes/codigos/' .$p['id']. '.jpg';
                              $file_headers = @get_headers($file);

              	              if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
              	              ?>
              	                <img  src="<?php echo site_url('img/nodisponible.jpg');?>"/><!--Img -->
              	              <?php
              	              }else{
              	              ?>
              	                <img  src="http://www.libreriagiorgio.cl/lg/imagenes/codigos/<?php echo $p['id'] ?>.jpg"/><!--Img -->
              	              <?php } ?>
                            </div>
                            <div class="producto-carro-info">
                              <div class="row">
                                <div class="tamaño">
                                  <div class="precio col-lg-6 col-md-6 col-sm-2">
                                    <span>Precio<br>$ <?php echo number_format($p['price'],'0',',','.')?></span>
                                  </div>
                                  <div class="nombre col-lg-6 col-md-6 col-sm-2">
                                    <span><?php echo $p['name']; ?></span>
                                  </div>
                                  <div class="cantidad col-lg-6 col-md-6 col-sm-2">
                                    <span>Cantidad : <?php echo $p['qty']; ?></span>
                                    <?php echo anchor('index.php/Inicio/remove/'.$p['rowid'],'<i class="glyphicon glyphicon-trash"></i>
    <span class="hidden-tablet"></span>'); ?>
                                  </div>
                                  <div class="col-lg-6 col-md-2 col-sm-2">
                                    <h1></h1>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>


                        <?php
                      } ?>


                      <li class="col-lg-12 col-md-12 col-sm-12" style="text-align : center">
                        <div class="info-carro text-right">
                          <div class="info-carro-total">
                              <br>
                              <span>Total:</span>
                              <span>$ <?php echo number_format($this->cart->total(),'0',',','.'); ?></span>
                          </div>
                        </div>
                      </li>
                      <li class="col-lg-12 col-md-12 col-sm-12" style="text-align : center">
                        <div>
                          <h4><i class="glyphicon glyphicon-shopping-cart"></i><?php echo anchor('index.php/Carro', 'Ir al carro de compra') ?></h4>
                        </div>
                      </li>
                      <li class="col-lg-12 col-md-12 col-sm-12" style="text-align : center">
                        <div>
                          <h4><i class="glyphicon glyphicon-ok"></i><?php echo anchor('index.php/Orden', 'Finalisar la compra') ?></h4>
                        </div>
                      </li>
                       <?php }else{ ?>
                          <li>
                            <h2>No hay productos en el carro<h2>
                          </li>
                        <?php } ?>
                  </div>
                </div>
              </ul>
            </li>
          </ul>
		    </div> <!-- termina menu-->
		  </div><!-- termina contenedor -->
		</nav>


    <script type='text/javascript'>
        /* attach a submit handler to the form */
        $("#formoid").submit(function(event) {

          /* stop form from submitting normally */
          event.preventDefault();

          /* get the action attribute from the <form action=""> element */
          var $form = $( this ),
              url = $form.attr( 'action' );

          /* Send the data using post with element id name and name2*/
          var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );

          /* Alerts the results */
          posting.done(function( data ) {
            alert('success');
          });
        });
    </script>
