<?php

/**
 * Base project form.
 * 
 * @package    formulario
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class ProductoForm extends BaseForm
{
	public 
	function configure(){
		$this->setWidgets(array(
			'referencia[]' => new sfWidgetFormInputText(),
			'descripcion[]' => new sfWidgetFormInputText(),
			'cantidad[]' => new sfWidgetFormInputText(),
			'comentario[]' => new sfWidgetFormInputText()
		));

			$this->widgetSchema->setLabels(array(
				'referencia[]' => "Referencia",
				'descripcion[]' => "Descripción",
				'cantidad[]' => "Cantidad",
				'comentario[]' => "Comentario"
    		));

    		$this->setValidators(array(
				'referencia[]' 			=> 		new sfValidatorString(),
				'descripcion[]' 		=> 		new sfValidatorString(),
				'cantidad[]'			=> 		new sfValidatorInteger(),
				'comentario[]' 			=> 		new sfValidatorString()
    		));
	}



}
