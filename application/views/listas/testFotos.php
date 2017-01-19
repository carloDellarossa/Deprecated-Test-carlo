<br><h1 align="center" >Test categorias</h1>
<div class="row"><!--Lista -->
<?php
  $categorias = array();
  $r2 =[];
	foreach ($productosL as $f){
    $r[] = $f['grupo'];
    $r2 = array_unique($r);
  }
echo '<pre>'; print_r($r2); echo '</pre>';
?>
