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
    text-align:center;;
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

					<div class="product col-md-3 service-image-left">
							<img id="item-display" src="<?php echo site_url('img/producto/producto4.jpg');?>" alt=""></img>
					</div>

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


				<div class="col-md-6">
					<div class="nombre">Nombre</div>
        <div class="row">
          <div class="rangos col-md-6">
            <h3>Rangos</h3>
            <h4>Desde hasta</h4>
            <h5>11111</h5>
            <h4>Desde hasta</h4>
            <h5>11112</h5>
            <h4>Desde hasta</h4>
            <h5>11113</h5>
          </div>
          <div class="form col-md-6">
					<div class="precio">Precio</div>
					<div class="diponibilidad">Si o no stock</div>
          <div class="btnAgregar">
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-shopping-cart"></span> Agregar
            </button>
          </div>
        </div>
        </div>
				</div>
			</div>
		</div>
	</div>
</div>
