<fieldset>
  <legend>DESCRIPCION DEL PEDIDO</legend>
  <a href="#" class="btn btn-small" id="add_product"><i class="icon-plus"></i> Añadir</a> 
  <span class="label label-info">Cantidad de Productos</span> <span id="contador_productos" class="label label-info">0</span>
  <hr >
  <div class="items"></div>
</fieldset>

<div class="estructura_campos_productos">
  <div class="item">
  <?php include_partial("estructura_campos_producto",array("form_producto"=>$form_producto)); ?>
  </div>
</div>