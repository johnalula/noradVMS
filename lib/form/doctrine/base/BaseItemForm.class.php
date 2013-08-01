<?php

/**
 * Item form base class.
 *
 * @method Item getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'token'                => new sfWidgetFormInputText(),
      'task_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'task_order_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskOrder'), 'add_empty' => false)),
      'category_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'category_group_id'    => new sfWidgetFormInputText(),
      'clss'                 => new sfWidgetFormInputText(),
      'unit_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'quantity'             => new sfWidgetFormInputText(),
      'used_quantity'        => new sfWidgetFormInputText(),
      'current_quantity'     => new sfWidgetFormInputText(),
      'serial_no'            => new sfWidgetFormInputText(),
      'old_pin'              => new sfWidgetFormInputText(),
      'new_pin'              => new sfWidgetFormInputText(),
      'pin_num'              => new sfWidgetFormInputText(),
      'is_present'           => new sfWidgetFormInputCheckbox(),
      'effective_date'       => new sfWidgetFormInputText(),
      'status'               => new sfWidgetFormInputText(),
      'description'          => new sfWidgetFormTextarea(),
      'type'                 => new sfWidgetFormInputText(),
      'plate_number'         => new sfWidgetFormInputText(),
      'plate_code'           => new sfWidgetFormInputText(),
      'initial_mileage'      => new sfWidgetFormInputText(),
      'current_mileage'      => new sfWidgetFormInputText(),
      'vehicle_type_id'      => new sfWidgetFormInputText(),
      'vehicle_make'         => new sfWidgetFormInputText(),
      'litter_per_km'        => new sfWidgetFormInputText(),
      'seatng_capacity'      => new sfWidgetFormInputText(),
      'engine_number'        => new sfWidgetFormInputText(),
      'chesis_number'        => new sfWidgetFormInputText(),
      'vehicle_model'        => new sfWidgetFormInputText(),
      'vehicl_color'         => new sfWidgetFormInputText(),
      'vehicle_weight'       => new sfWidgetFormInputText(),
      'service_type_id'      => new sfWidgetFormInputText(),
      'fuel_type_id'         => new sfWidgetFormInputText(),
      'purchased_date'       => new sfWidgetFormDate(),
      'service_year'         => new sfWidgetFormInputText(),
      'checkup_period_id'    => new sfWidgetFormInputText(),
      'vehicle_status'       => new sfWidgetFormInputText(),
      'fuel_setting_id'      => new sfWidgetFormInputText(),
      'is_assigned'          => new sfWidgetFormInputCheckbox(),
      'spare_Identification' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token'                => new sfValidatorString(array('max_length' => 100)),
      'task_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'task_order_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskOrder'))),
      'category_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'required' => false)),
      'category_group_id'    => new sfValidatorInteger(array('required' => false)),
      'clss'                 => new sfValidatorInteger(array('required' => false)),
      'unit_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'required' => false)),
      'quantity'             => new sfValidatorNumber(array('required' => false)),
      'used_quantity'        => new sfValidatorNumber(array('required' => false)),
      'current_quantity'     => new sfValidatorNumber(array('required' => false)),
      'serial_no'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'old_pin'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'new_pin'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pin_num'              => new sfValidatorInteger(array('required' => false)),
      'is_present'           => new sfValidatorBoolean(array('required' => false)),
      'effective_date'       => new sfValidatorInteger(array('required' => false)),
      'status'               => new sfValidatorInteger(array('required' => false)),
      'description'          => new sfValidatorString(array('required' => false)),
      'type'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'plate_number'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'plate_code'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'initial_mileage'      => new sfValidatorInteger(array('required' => false)),
      'current_mileage'      => new sfValidatorInteger(array('required' => false)),
      'vehicle_type_id'      => new sfValidatorInteger(array('required' => false)),
      'vehicle_make'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'litter_per_km'        => new sfValidatorNumber(array('required' => false)),
      'seatng_capacity'      => new sfValidatorInteger(array('required' => false)),
      'engine_number'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'chesis_number'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'vehicle_model'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'vehicl_color'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'vehicle_weight'       => new sfValidatorNumber(array('required' => false)),
      'service_type_id'      => new sfValidatorInteger(array('required' => false)),
      'fuel_type_id'         => new sfValidatorInteger(array('required' => false)),
      'purchased_date'       => new sfValidatorDate(array('required' => false)),
      'service_year'         => new sfValidatorInteger(array('required' => false)),
      'checkup_period_id'    => new sfValidatorInteger(array('required' => false)),
      'vehicle_status'       => new sfValidatorInteger(array('required' => false)),
      'fuel_setting_id'      => new sfValidatorInteger(array('required' => false)),
      'is_assigned'          => new sfValidatorBoolean(array('required' => false)),
      'spare_Identification' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

}
