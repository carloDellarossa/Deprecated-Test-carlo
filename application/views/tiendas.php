
<style>

.container {
  width: 550px;
  display: block;
  margin: auto;
  position: relative;
}

h1 {
  text-align: center;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  color: #f1c40f;
}

.menu_opener {
  display: none;
}

.menu_opener:checked ~ .link_one {
  top: 65px;
}
.menu_opener:checked ~ .link_two {
  left: 385px;
}
.menu_opener:checked ~ .link_three {
  top: 385px;
}
.menu_opener:checked ~ .link_four {
  left: 65px;
}
.menu_opener:checked ~ .barre_hamburger {
  opacity: 0;
}
.menu_opener:checked ~ .menu_opener_label:after {
  transform: rotate(45deg);
  top: 70px;
}
.menu_opener:checked ~ .menu_opener_label:before {
  transform: rotate(-45deg);
  top: 70px;
}

.menu_opener_label {
  background: #f1c40f;
  width: 150px;
  height: 150px;
  display: block;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  top: 200px;
  left: 200px;
  z-index: 10;
}
.menu_opener_label:after {
  position: absolute;
  top: 50px;
  left: 50px;
  background: #000;
  content: "";
  width: 50px;
  height: 10px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.menu_opener_label:before {
  position: absolute;
  top: 90px;
  left: 50px;
  background: #000;
  content: "";
  width: 50px;
  height: 10px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.barre_hamburger {
  width: 50px;
  height: 10px;
  position: absolute;
  top: 270px;
  left: 250px;
  background: #000;
  z-index: 20;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.link_general {
  width: 100px;
  height: 100px;
  display: block;
  border-radius: 50%;
  position: absolute;
  top: 225px;
  left: 225px;
  background: #ecf0f1;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.link_one {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAgMAAADXB5lNAAAACVBMVEX///8AAAAAAAB+UaldAAAAAnRSTlMAgJsrThgAAAB+SURBVHhe3cyxjcMwFETBr8RFqBrWo2pYBBNOlZdy/4UGbMCb7QumPrprtPCaLdyriiM8O8PFiPBiRrhZER52cRIMToLJSbA4CTZBQBAQBAQBndAJndAJnTCSYCbBSoKdBEYSzCRYSbCTwEiCmQQrCXbJ+R+q8n45VP1CeH9/mC1fxjmFPCwAAAAASUVORK5CYII826f6fa0b1d2d29dd5b523f646d57d73") #f1c40f no-repeat center center;
}

.link_two {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAgMAAADXB5lNAAAACVBMVEX///8AAAAAAAB+UaldAAAAAnRSTlMAgJsrThgAAAB+SURBVHhe3cyxjcMwFETBr8RFqBrWo2pYBBNOlZdy/4UGbMCb7QumPrprtPCaLdyriiM8O8PFiPBiRrhZER52cRIMToLJSbA4CTZBQBAQBAQBndAJndAJnTCSYCbBSoKdBEYSzCRYSbCTwEiCmQQrCXbJ+R+q8n45VP1CeH9/mC1fxjmFPCwAAAAASUVORK5CYII826f6fa0b1d2d29dd5b523f646d57d73") #f1c40f no-repeat center center;
}

.link_three {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAgMAAADXB5lNAAAACVBMVEX///8AAAAAAAB+UaldAAAAAnRSTlMAgJsrThgAAAB+SURBVHhe3cyxjcMwFETBr8RFqBrWo2pYBBNOlZdy/4UGbMCb7QumPrprtPCaLdyriiM8O8PFiPBiRrhZER52cRIMToLJSbA4CTZBQBAQBAQBndAJndAJnTCSYCbBSoKdBEYSzCRYSbCTwEiCmQQrCXbJ+R+q8n45VP1CeH9/mC1fxjmFPCwAAAAASUVORK5CYII826f6fa0b1d2d29dd5b523f646d57d73") #f1c40f no-repeat center center;
}

.link_four {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABAAgMAAADXB5lNAAAACVBMVEX///8AAAAAAAB+UaldAAAAAnRSTlMAgJsrThgAAAB+SURBVHhe3cyxjcMwFETBr8RFqBrWo2pYBBNOlZdy/4UGbMCb7QumPrprtPCaLdyriiM8O8PFiPBiRrhZER52cRIMToLJSbA4CTZBQBAQBAQBndAJndAJnTCSYCbBSoKdBEYSzCRYSbCTwEiCmQQrCXbJ+R+q8n45VP1CeH9/mC1fxjmFPCwAAAAASUVORK5CYII826f6fa0b1d2d29dd5b523f646d57d73") #f1c40f no-repeat center center;
}
</style>

</div>

<div class="container" style="margin-top:150px;">
  <h1>Libreria giorgio</h1>
  <input type="checkbox" id="menu_opener_id" class="menu_opener">
  <label for="menu_opener_id" class="menu_opener_label"></label>
  <div class="barre_hamburger"></div>
  <a href="#" class="link_one link_general">Sala Ventas 1</a>
  <a href="#" class="link_two link_general">Sala Ventas 2</a>
  <a href="#" class="link_three link_general">Sala Ventas 3</a>
  <a href="#" class="link_four link_general">Sala Ventas 4</a>
</div>

<script>
  (function(i,s,o,g,r,a,m){
		i['GoogleAnalyticsObject']=r;
		i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');
</script>


<br>Porfavor seleccione tienda
<ul>
<form action="<?php echo site_url('index.php/Inicio');?>" method="post">
	<li><input type="radio" name="local" value="1" checked>Tienda uno</li>
	<li><input type="radio" name="local" value="2" >Tienda dos</li>
	<li><input type="radio" name="local" value="3" >Tienda tres</li>
	<li><input type="radio" name="local" value="4" >Tienda cuatro</li>
	<li><input type="radio" name="local" value="5" >Venta empresas</li>
	<input type="submit" value="ir al sitio">
</form>
</ul>
