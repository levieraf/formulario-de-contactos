<?php

/**
 * Base project form.
 * 
 * @package    formulario
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class SolicitudForm extends BaseForm
{
	public 
	function configure(){
		$this->setWidgets(array(
			'lugar' => new sfWidgetFormInputText(),
			'dia' => new sfWidgetFormInputText(),
			'mes' => new sfWidgetFormInputText(),
			'anio' => new sfWidgetFormInputText(),

			'cliente' => new sfWidgetFormInputText(),
			'codigo_cliente' => new sfWidgetFormInputText(),
			'direccion' => new sfWidgetFormInputText(),
			'rif' => new sfWidgetFormInputText(),
			'telefono' => new sfWidgetFormInputText(),
			'fax' => new sfWidgetFormInputText(),
			'correo_electronico' => new sfWidgetFormInputText(),
			'ciudad' => new sfWidgetFormInputText(),
			'estado' => new sfWidgetFormInputText(),

			'nombre' => new sfWidgetFormInputText(),
			'apellido' => new sfWidgetFormInputText(),
			'forma_pago' => new sfWidgetFormInputText(),
			'transporte' => new sfWidgetFormInputText(),
			'encargado' => new sfWidgetFormInputText()
		));

			$this->widgetSchema->setLabels(array(
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
    		));

    		$this->setValidators(array(
		        "lugar"					=> 		new sfValidatorString(),
      			"dia"					=> 		new sfValidatorInteger(),
      			"mes"					=> 		new sfValidatorInteger(),
      			"anio"					=> 		new sfValidatorInteger(),
      			'cliente' 				=> 		new sfValidatorString(),
				'codigo_cliente' 		=> 		new sfValidatorString(),
				'direccion' 			=> 		new sfValidatorString(),
				'rif' 					=> 		new sfValidatorString(),
				'telefono' 				=> 		new sfValidatorString(),
				'fax' 					=> 		new sfValidatorString(),
				'correo_electronico' 	=> 		new sfValidatorEmail(
                                					array('max_length' => 80),
                                					array(	'required' => 'El campo <b>Email</b> es requerido.',
                                							'invalid' => 'El correo es inválido, verifique.')
                                				),
				'estado' 				=> 		new sfValidatorString(),
				'nombre' 				=> 		new sfValidatorString(),
				'apellido' 				=> 		new sfValidatorString(),
				'forma_pago'			=> 		new sfValidatorString(),
				'transporte' 			=> 		new sfValidatorString(),
				'estado' 				=> 		new sfValidatorString(),
				'ciudad' 				=> 		new sfValidatorString(),
				'encargado' 			=> 		new sfValidatorString()
    ));

    		$this->widgetSchema->setNameFormat('formulario[%s]');

	}



}
