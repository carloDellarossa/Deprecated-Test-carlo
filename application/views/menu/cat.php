<style>
.navbar-cat {
  background-color: #ffffff;
  border-color: #757575;
  top: 50px;
  z-index: 9;
}

.navbar-cat .navbar-brand {
  color: #000000;
}
.navbar-cat .navbar-brand:hover,
.navbar-cat .navbar-brand:focus {
  color: #ffffff;
}
.navbar-cat .navbar-text {
  color: #000000;
}
.navbar-cat .navbar-nav > li > a {
  color: #000000;
}
.navbar-cat .navbar-nav > li > a:hover,
.navbar-cat .navbar-nav > li > a:focus {
  color: #ffffff;
}
.navbar-cat .navbar-nav > li > .dropdown-menu {
  background-color: #ffffff;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a {
  color: #000000;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-cat .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #ffffff;
  background-color: #757575;
}
.navbar-cat .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #757575;
}
.navbar-cat .navbar-nav .open .dropdown-menu > .active > a,
.navbar-cat .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-cat .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #ffffff;
  background-color: #757575;
}
.navbar-cat .navbar-nav > .active > a,
.navbar-cat .navbar-nav > .active > a:hover,
.navbar-cat .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #757575;
}
.navbar-cat .navbar-nav > .open > a,
.navbar-cat .navbar-nav > .open > a:hover,
.navbar-cat .navbar-nav > .open > a:focus {
  color: #ffffff;
  background-color: #757575;
}
.navbar-cat .navbar-toggle {
  border-color: #757575;
}
.navbar-cat .navbar-toggle:hover,
.navbar-cat .navbar-toggle:focus {
  background-color: #757575;
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
  color: #ffffff;
}

@media (max-width: 767px) {
  .navbar-cat .navbar-nav .open .dropdown-menu > li > a {
    color: #000000;
  }
  .navbar-cat .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-cat .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
  }
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-cat .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #757575;
  }

}
/*
carro de compra */
.lista-carro{
	margin-top:20px;
	margin-bottom:40px;
	font-size:13px
}
.lista-carro .title{
	position:relative
}
.lista-carro .title h2{
	font-size:20px;
	line-height:50px;
	margin-bottom:0
}
.lista-carro .lista-productos-carro{
	margin-left:-10px;
	min-height:200px
}
.lista-carro .lista-productos-carro li{
	list-style:none;padding:0 0 20px 10px;
	margin-left:0;
	float:left
}
.lista-carro .lista-productos-carro li a{
	color:#333;
	display:block
}
.lista-carro .lista-productos-carro li a:hover{
	text-decoration:none
}
.lista-carro .producto-carro{
	position:relative;padding:0 10px;
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
	margin-top:20px
}
</style>
		<nav class="navbar navbar-cat navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		    	<!--Boton vista en mibil -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Menu Mobil</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
		      	<!-- Icono marca link a Inicio -->
		    	<a class="navbar-brand" href="Inicio"><img class="img-responsive center-block" alt="Brand" src="<?php echo site_url('img/logo.png');?>"></a>
		      <ul class="nav navbar-nav navbar-left" >
			        <!--Menu Categorias -->
			        <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria 1<span class="caret"></span></a>

              <ul class="dropdown-menu" style="width : 770px">

                  <li><a href="#"><h3>Sub cat 1</h3></a></li>
                  <ul>
                    <li><a href="#">Tienda 1</a></li>
                    <li><a href="#">Tienda 2</a></li>
                    <li><a href="#">Tienda 3</a></li>
                    <li><a href="#">Tienda 4</a></li>
                    <li><a href="#">Venta a empresas</a></li>
                  </ul>


                  <li><a href="#"><h3>Sub cat 2</h3></a></li>
                  <ul>
                    <li><a href="#">Tienda 1</a></li>
                    <li><a href="#">Tienda 2</a></li>
                    <li><a href="#">Tienda 3</a></li>
                    <li><a href="#">Tienda 4</a></li>
                    <li><a href="#">Venta a empresas</a></li>
                  </ul>


                  <li><a href="#"><h3>Sub cat 3</h3></a></li>
                  <ul>
                    <li><a href="#">Tienda 1</a></li>
                    <li><a href="#">Tienda 2</a></li>
                    <li><a href="#">Tienda 3</a></li>
                    <li><a href="#">Tienda 4</a></li>
                    <li><a href="#">Venta a empresas</a></li>
                  </ul>


                  <li><a href="#"><h3>Sub cat 4</h3></a></li>
                  <ul>
                    <li><a href="#">Tienda 1</a></li>
                    <li><a href="#">Tienda 2</a></li>
                    <li><a href="#">Tienda 3</a></li>
                    <li><a href="#">Tienda 4</a></li>
                    <li><a href="#">Venta a empresas</a></li>
                  </ul>

			        </ul>

			        </li>
			        <li class="dropdown">
			       	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria 2<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="#">Tienda 1</a></li>
			            <li><a href="#">Tienda 2</a></li>
			            <li><a href="#">Tienda 3</a></li>
			            <li><a href="#">Tienda 4</a></li>
			            <li><a href="#">Venta a empresas</a></li>
			        </ul>
			        </li>
			        <li class="dropdown">
			       	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria 3<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="#">Tienda 1</a></li>
			            <li><a href="#">Tienda 2</a></li>
			            <li><a href="#">Tienda 3</a></li>
			            <li><a href="#">Tienda 4</a></li>
			            <li><a href="#">Venta a empresas</a></li>
			        </ul>
			        </li>
			        <li class="dropdown">
			       	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria 4<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="#">Tienda 1</a></li>
			            <li><a href="#">Tienda 2</a></li>
			            <li><a href="#">Tienda 3</a></li>
			            <li><a href="#">Tienda 4</a></li>
			            <li><a href="#">Venta a empresas</a></li>
			        </ul>
			        </li>
			        <li class="dropdown">
			       	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria 5<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="#">Tienda 1</a></li>
			            <li><a href="#">Tienda 2</a></li>
			            <li><a href="#">Tienda 3</a></li>
			            <li><a href="#">Tienda 4</a></li>
			            <li><a href="#">Venta a empresas</a></li>
			        </ul>
			        </li>
		      </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="glyphicon glyphicon-shopping-cart"></i> Cart <span class="badge">3</span>
            </a>
              <ul class="dropdown-menu animated slideInRight lista-productos-carro" style="max-width : 252px">
                <div class="lista-carro">
                  <div class="info-carro">
                    <i class="glyphicon glyphicon-shopping-cart"></i><span class="badge">3</span>
                    <div class="info-carro-total">
                        <span>Total:</span>
                        <span>$2,229.97</span>
                    </div>
                  </div>
                  <div class="contenedor-producto-carro container">
                        <li class="col-lg-2 col-md-2 col-sm-2">
                          <div class="producto-carro">
                            <div class="imagen-carro">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                            </div>
                            <div class="producto-carro-info">
                              <div class="row">
                                <div class="tamaño">
                                  <div class="precio col-lg-6 col-md-6 col-sm-2">
                                    <span>$849.99</span>
                                  </div>
                                  <div class="nombre col-lg-6 col-md-6 col-sm-2">
                                    <span>Sony DSC-RX100M III</span>
                                  </div>
                                  <div class="cantidad col-lg-6 col-md-6 col-sm-2">
                                    <span>Quantity: 01</span>
                                  </div>
                                  <div class="btnEliminar col-lg-6 col-md-2 col-sm-2">
                                    <button type="button" class="">
                                      <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li>
                          <a href="#" class="button">Checkout</a>
                        </li>
                  </div>
                </div>
              </ul>
            </li>
          </ul>
		    </div> <!-- termina menu de cateoras de la izq y la parte colapsanle-->
		  </div><!-- termina contenedor -->
		</nav>
