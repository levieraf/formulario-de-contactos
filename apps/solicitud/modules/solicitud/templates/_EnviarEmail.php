<?php

$etiquetaLabel = array(
		"lugar"=>"Lugar",
		"dia"=>"Día",
		"mes"=>"Mes",
		"anio"=>"Año",
		'cliente' => "Cliente",
		'codigo_cliente' => "Código Cliente",
		'direccion' => "Dirección",
		'rif' => "Rif",
		'telefono' => "Teléfono",
		'fax' => "Fax",
		'correo_electronico' => "Correo Electrónico",

		'estado' => "Estado",
		'ciudad' => "Ciudad",

		'nombre' => "Nombre",
		'apellido' => "Apellido",
		'forma_pago' => "Forma de Pago",
		'transporte' => "Transporte",
		'encargado' => "Encargado"
	);
?>				
<table style="border:1px solid #BBB;">
<tr>
	<td colspan="2" style="text-align: center;padding-top: 5px;background: #DDDDDD;font-weight: bold;padding-bottom: 5px;">
		Solicitud de Pedidos
	</td>
</tr>	
<?php 
foreach($registrosDeFormulario as $key => $registro):
?>
<tr>
	<td style="border-bottom: 1px solid #F1E8E8;padding: 5px;background: #FAFAFA;padding-left: 10px;padding-right: 10px;"><?= $etiquetaLabel[$key] ?></td>
	<td style="padding-left: 16px;background-color: #F5F5F5;width: 80%;border-bottom: 1px solid #F1E8E8;"><?= $registro ?></td>
</tr>
<?php
endforeach;
?>
</table>
<hr >
<table style="border: 1px solid #BBB;width: 708px;margin-top: 2px;">
<tr>
	<td colspan="4" style="text-align: center;padding-top: 5px;background: #DDDDDD;font-weight: bold;padding-bottom: 5px;">
		Lista de Productos
	</td>
</tr>	
<tr>
	<td>
		Referencia
	</td>
	<td>
		Descripción
	</td>
	<td>
		Cantidad
	</td>
	<td>
		Comentario
	</td>
</tr>	
<?php 
for($i=0;$i<$cant_items;$i++):
?>
<tr style="background: #FAFAFA;">
	<td>
		<?= $itemsReferenciaProductos[$i] ?>
	</td>
	<td>
		<?= $itemsDescripcionProductos[$i] ?>
	</td>
	<td>
		<?= $itemsCantidadProductos[$i] ?>
	</td>
	<td>
		<?= $itemsComentarioProductos[$i] ?>
	</td>
</tr>
<?php
endfor;
?>
</table>
