
<br><h1 align="center" >Test categorias</h1>
<div class="row"><!--Lista -->

 <?php //echo '<pre>'; var_dump($filtros); echo '</pre>'; ?>
  <ul>
  		<?php foreach ($filtros as $filtro => $v){?>
  		<h1><?php	echo $filtro; ?></h1>
      <ul>
        <?php for($i = 0; $i < count($v); $i++) {?>
          <?php foreach ($v[$i] as $key => $value){?>
            <li><?php if ($value != null) {
              echo $value;
            } ?></li>
          <?php } ?>
        <?php } ?>
      </ul>
  		<?php } ?>
  </ul>
</div>
