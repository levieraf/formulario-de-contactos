<h1>Solicitud de Pedidos</h1>
<?php include_partial("compartidas/mensajes"); ?>
<form method="post" action="<?= url_for("solicitud/enviar") ?> " class="well form-horizontal">
    <?php include_partial("campos",array("form"=>$form)); ?>
    <?php include_partial("campos_producto",array("form_producto"=>$form_producto)); ?>
    <div id="alerta"></div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Guardar</button>
      <button type="reset" class="btn"><i class="icon-remove"></i> Cancelar</button>
    </div>
    <input type="hidden" id="cant_items" name="cant_items" value="">
</form>