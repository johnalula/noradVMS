<?php

/**
 * FleetOrder form base class.
 *
 * @method FleetOrder getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFleetOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'vehicle_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'token_id'             => new sfWidgetFormInputText(),
      'task_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'order_cost'           => new sfWidgetFormInputText(),
      'payment_mode_id'      => new sfWidgetFormInputText(),
      'effective_date'       => new sfWidgetFormInputText(),
      'number_of_passangers' => new sfWidgetFormInputText(),
      'departure_mileage'    => new sfWidgetFormInputText(),
      'return_mileage'       => new sfWidgetFormInputText(),
      'difference_mileag'    => new sfWidgetFormInputText(),
      'fuel_acquire_type_id' => new sfWidgetFormInputText(),
      'fuel_amount'          => new sfWidgetFormInputText(),
      'description'          => new sfWidgetFormTextarea(),
      'departure_date'       => new sfWidgetFormInputText(),
      'departure_time'       => new sfWidgetFormInputText(),
      'departure_status'     => new sfWidgetFormInputCheckbox(),
      'return_date'          => new sfWidgetFormInputText(),
      'return_time'          => new sfWidgetFormInputText(),
      'return_status'        => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'vehicle_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'token_id'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'task_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'order_cost'           => new sfValidatorNumber(array('required' => false)),
      'payment_mode_id'      => new sfValidatorInteger(array('required' => false)),
      'effective_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'number_of_passangers' => new sfValidatorInteger(array('required' => false)),
      'departure_mileage'    => new sfValidatorInteger(array('required' => false)),
      'return_mileage'       => new sfValidatorNumber(array('required' => false)),
      'difference_mileag'    => new sfValidatorNumber(array('required' => false)),
      'fuel_acquire_type_id' => new sfValidatorInteger(array('required' => false)),
      'fuel_amount'          => new sfValidatorNumber(array('required' => false)),
      'description'          => new sfValidatorString(array('required' => false)),
      'departure_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'departure_time'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'departure_status'     => new sfValidatorBoolean(array('required' => false)),
      'return_date'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'return_time'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'return_status'        => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fleet_order[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FleetOrder';
  }

}
