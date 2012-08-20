<?php

/**
 * solicitud actions.
 *
 * @package    formulario
 * @subpackage solicitud
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class solicitudActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	$this->form = new SolicitudForm();
  	$this->form_producto = new ProductoForm();
  }

  public function executeEnviar(sfWebRequest $request)
  {
  	$registrosDeFormulario 		  = $this->getRequestParameter("formulario");
  	$itemsReferenciaProductos 	= $this->getRequestParameter("referencia");
    $itemsDescripcionProductos  = $this->getRequestParameter("descripcion");
    $itemsComentarioProductos  = $this->getRequestParameter("comentario");
    $itemsCantidadProductos     = $this->getRequestParameter("cantidad");
    $cant_items                 = $this->getRequestParameter("cant_items");
    $correo                     = array("ventas@grupodelca.com","mercadeo@grupodelca.com");

  	$message = $this->getMailer()->compose();
  	$message->setFrom("no-responder@grupodelca.com", 'WebMaster');
  	$message->setTo($correo);
  	$message->setSubject("Solicitud de pedidos de productos.");
  	$html = $this->getPartial('EnviarEmail', array(
                                            	"registrosDeFormulario"		=>  $registrosDeFormulario,
                                            	"itemsReferenciaProductos"	=>  $itemsReferenciaProductos,
                                                "itemsDescripcionProductos" => $itemsDescripcionProductos,
                                                "itemsCantidadProductos" => $itemsCantidadProductos,
						"itemsComentarioProductos" => $itemsComentarioProductos,
                                                "cant_items"=>$cant_items
  	                                        ));
  	$message->setBody($html, 'text/html');

  	$text = $this->getPartial('EnviarEmail', array(
                                                "registrosDeFormulario"   =>  $registrosDeFormulario,
                                                "itemsReferenciaProductos"  =>  $itemsReferenciaProductos,
                                                "itemsDescripcionProductos" => $itemsDescripcionProductos,
						"itemsComentarioProductos" => $itemsComentarioProductos,
                                                "itemsCantidadProductos" => $itemsCantidadProductos,
                                                "cant_items"=>$cant_items
  	                                        ));
  	$message->addPart($text, 'text/plain');
  	$retorno = $this->getMailer()->send($message);    


  	$this->getUser()->setFlash("notificacion","Sus información fue enviada exitosamente.");
  	
  	$this->form = new SolicitudForm($registrosDeFormulario);
  	$this->form_producto = new ProductoForm($itemsReferenciaProductos);

  	$this->registrosDeFormulario 	= $registrosDeFormulario;

  	$this->itemsReferenciaProductos = $itemsReferenciaProductos;
    $this->itemsDescripcionProductos = $itemsDescripcionProductos;
    $this->itemsCantidadProductos =  $itemsCantidadProductos;
    $this->cant_items = $cant_items;
    $this->redirect(@homepage);
  }

}
