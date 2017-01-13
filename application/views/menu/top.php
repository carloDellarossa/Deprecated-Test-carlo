<style>
.navbar-top {
  background-color: #cecece;
  border-color: #cecece;
}
.navbar-top .navbar-brand {
  color: #ecf0f1;
}
.navbar-top .navbar-brand:hover,
.navbar-top .navbar-brand:focus {
  color: #b2b1b1;
}
.navbar-top .navbar-text {
  color: #ecf0f1;
}
.navbar-top .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-top .navbar-nav > li > a:hover,
.navbar-top .navbar-nav > li > a:focus {
  color: #b2b1b1;
}
.navbar-top .navbar-nav > li > .dropdown-menu {
  background-color: #cecece;
}
.navbar-top .navbar-nav > li > .dropdown-menu > li > a {
  color: #ecf0f1;
}
.navbar-top .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-top .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #b2b1b1;
  background-color: #cecece;
}
.navbar-top .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #cecece;
}
.navbar-top .navbar-nav .open .dropdown-menu > .active > a,
.navbar-top .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-top .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #b2b1b1;
  background-color: #cecece;
}
.navbar-top .navbar-nav > .active > a,
.navbar-top .navbar-nav > .active > a:hover,
.navbar-top .navbar-nav > .active > a:focus {
  color: #b2b1b1;
  background-color: #cecece;
}
.navbar-top .navbar-nav > .open > a,
.navbar-top .navbar-nav > .open > a:hover,
.navbar-top .navbar-nav > .open > a:focus {
  color: #b2b1b1;
  background-color: #cecece;
}
.navbar-top .navbar-toggle {
  border-color: #cecece;
}
.navbar-top .navbar-toggle:hover,
.navbar-top .navbar-toggle:focus {
  background-color: #cecece;
}
.navbar-top .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-top .navbar-collapse,
.navbar-top .navbar-form {
  border-color: #ecf0f1;
}
.navbar-top .navbar-link {
  color: #ecf0f1;
}
.navbar-top .navbar-link:hover {
  color: #b2b1b1;
}

@media (max-width: 767px) {
  .navbar-top .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-top .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-top .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #b2b1b1;
  }
  .navbar-top .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-top .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-top .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #b2b1b1;
    background-color: #cecece;
  }
}

/*dropdown de login*/
ul.dropdown-lr {
  width: 300px;
}
  /* mobile fix */
@media (max-width: 768px) {
	.dropdown-lr h3 {
		color: #eee;
	}
	.dropdown-lr label {
		color: #eee;
	}
}

/*dropdown de contacto*/
ul.contacto {
  width: 300px;
}
  /* mobile fix */
@media (max-width: 768px) {
	.contacto h3 {
		color: #eee;
	}
	.contacto label {
		color: #eee;
	}
}
/*seleccion de tienda*/
.tienda ul {
  width: 300px;
}
.home{
  width: 19px;
  margin-right: 5px;
}

/* mobile fix */
@media (max-width: 768px) {
	.tienda h3 {
		color: #eee;
	}
	.tienda label {
		color: #eee;
	}
}

/*.tienda:focus .dropdown-lr:focus + body{
  background-color: red;
}*/
</style>
		<nav class="navbar navbar-top navbar-fixed-top " style="z-index: 10;">
		  <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barra" aria-expanded="false">
            <span class="sr-only">Menu Mobil</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
        </div>
        <!--Boton vista en mibil -->

		    <div class="collapse navbar-collapse" id="barra">


		    	<!--Telefono -->
				<ul class="nav navbar-nav navbar-left">
		    	<li><p class="navbar-text navbar-left">Telefono: <a href="#" class="navbar-link">+5641 2785 336</a></p></li>
		     	</ul>
		      	<ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Quienes Somos</a></li>
			        <li><a href="#">Trabaje con nosotros</a></li>
              <!-- menu contacto -->
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Contacto<span class="caret"></span></a>
                <ul class="dropdown-menu contacto animated slideInRight" role="menu">
                    <div class="col-lg-12">
                        <div class="text-center"><h3><b>Contacto</b></h3></div>
                        <form id="ajax-login-form" action="" method="post" role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Nombre</label>
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="E-mail" value="" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" name="password" id="password" tabindex="2" class="form-control" placeholder="Clave" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="text">Consulta</label>
                                <textarea rows="3" cols="31">

                                </textarea>
                            </div>

                            <div class="form-group">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Ingresar">
                            </div>
                            <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                        </form>
                    </div>
                </ul>
              </li>
              <!-- menu login -->
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Inisiar secion<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                    <div class="col-lg-12">
                        <div class="text-center"><h3><b>Inicio de seccion</b></h3></div>
                        <form id="ajax-login-form" action="" method="post" role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="username">E-mail</label>
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="E-mail" value="" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="password">Clave</label>
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Clave" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <input type="checkbox" tabindex="3" name="remember" id="remember">
                                        <label for="remember">Recordarme</label>
                                    </div>
                                    <div class="col-xs-5 pull-right">
                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Ingresar">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <a href="" tabindex="5" class="forgot-password">Olvido su clave?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                        </form>
                    </div>
                </ul>
              </li>
			        <!--Menu tiendas -->
			        <li class="dropdown">
			        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seleccion Sala<span class="caret"></span></a>
			        <ul class="tiendas dropdown-menu animated slideInRight" >
                <li class=""><a href="#">
                  <span class="home glyphicon glyphicon-home"></span>Camilo Henríquez 2299, Concepción</a></li>

                <li class=""><a href="#">
                  <span class="home glyphicon glyphicon-home"></span>Av Los Carrera 511, Concepción</a></li>

                <li class=""><a href="#">
                  <span class="home glyphicon glyphicon-home"></span>Tucapel 434-444, Concepción</a></li>

                <li class=""><a href="#">
                  <span class="home glyphicon glyphicon-home"></span>Bulnes 167, Temuco</a></li>
			        </ul>
			        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
<script>
jQuery(document).ready(function($) {
  $(".button-collapse").sideNav({
    menuWidth: 240, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: false, // Choose whether you can drag to open on touch screens
   // transition: 1.5s
  }

  );
});
$j(function() {
  $j('#vticker_top').vTicker();
});
</script>
