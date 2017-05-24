<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador Web</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url('css/sb-admin.css');?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo site_url('css/plugins/morris.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo site_url('font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Logo</a> <!-- TODO cambiar el logo de acuedordo a la lista de venta -->
            </div>
            <!-- Top Menu -->
              <!-- Algo de info aka -->
              <!-- Fecha
              <div>
                <h5>Fecha aqui</h5>
              </div>
              -->
            <ul class="nav navbar-right top-nav">
              <!-- Cuenta actual -->
              <!-- Sala actual -->
                <!-- Selector de sala  -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nombre Cuenta <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i>Salir</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Sala de venta <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Sala 1</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i>Sala 2</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Sala 3</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Sala 4</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Productos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo site_url('index.php/Imagenes') ?>">Imagen de productos</a>
                            </li>
                            <li>
                                <a href="#">Ingresar Producto</a>
                            </li>
                            <li>
                                <a href="#">Modificar Producto</a>
                            </li>
                            <li>
                                <a href="#">Lista Ofertas</a>
                            </li>
                            <li>
                                <a href="#">Lista Novedades</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                          <li>
                              <a href="#">CRUD</a>
                          </li>
                          <li>
                              <a href="#"></a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Ventas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="#">Ventas</a>
                            </li>
                            <li>
                                <a href="#">Cotisación</a>
                            </li>
                            <li>
                                <a href="#">Ordenes de envio</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-arrows-v"></i> Estadisticas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="#">Por Tienda</a>
                            </li>
                            <li>
                                <a href="#">Totales</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">



                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Panel de Administracion <small>Imagenes</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                Subir imagenes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <?php
                          if ( ! $this->image_lib->resize()){
                            echo $this->image_lib->display_errors('<p>', '</p>');
                          }
                        ?>
                        </h1>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div>
                      <h2>Subir Imagenes</h2>
                    </div>
                    <form>
                      <div class="form-group">
                        <label for="exampleInputName2">Codigo Producto</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Codigo producto">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Subir fotos</p>
                      </div>
                      <button type="submit" class="btn btn-default">Subir</button>
                    </form>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      Aqui imangen subida
                    </div>
                  </div>
                  <div class="col-lg-12">
                    Resumen, productos sin imagen principal o sin thumbs
                  </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo site_url('js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo site_url('js/plugins/morris/raphael.min.js');?>"></script>
    <script src="<?php echo site_url('js/plugins/morris/morris.min.js');?>"></script>
    <script src="<?php echo site_url('js/plugins/morris/morris-data.js');?>"></script>

</body>

</html>
