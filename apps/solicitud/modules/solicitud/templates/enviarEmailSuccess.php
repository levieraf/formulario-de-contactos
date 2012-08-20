<?php 
	include_partial("EnviarEmail",
					array(
						"registrosDeFormulario"   =>  $registrosDeFormulario,
                        "itemsReferenciaProductos"  =>  $itemsReferenciaProductos,
                        "itemsDescripcionProductos" => $itemsDescripcionProductos,
                        "itemsCantidadProductos" => $itemsCantidadProductos,
                        "cant_items" => $cant_items
						)
					); 
?>