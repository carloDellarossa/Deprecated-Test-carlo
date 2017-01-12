<style>
.navbar-cat {
  background-color: #ffffff;
  border-color: #757575;
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
</style>
		<nav class="navbar navbar-cat navbar-fixed-top" style="top: 50px; z-index: 2;">
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
			        <ul class="dropdown-menu">
			            <li><a href="#">Tienda 1</a></li>
			            <li><a href="#">Tienda 2</a></li>
			            <li><a href="#">Tienda 3</a></li>
			            <li><a href="#">Tienda 4</a></li>
			            <li><a href="#">Venta a empresas</a></li>
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
		    </div>
		  </div>
		</nav>

