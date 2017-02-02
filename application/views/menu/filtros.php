<br><h1 align="center" >Filtros</h1>
<div class="row"><!--Lista -->

   <?php echo '<pre>'; print_r($productosL); echo '</pre>'; ?>
    <ul>
  <?php foreach ($productosL as $f){
    //TODO crear otro array con los filtros para filtar por los distintios criterios?>
    <?php if (!empty($f['marca'])){ ?>
        <li class="filtro"><?php echo $f['marca']; ?></li>
    <?php } ?>
  <?php

    }
  ?>
  </ul>
</div>
