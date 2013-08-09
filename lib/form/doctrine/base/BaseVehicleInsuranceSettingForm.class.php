<?php

/**
 * VehicleInsuranceSetting form base class.
 *
 * @method VehicleInsuranceSetting getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVehicleInsuranceSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'vehicle_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'insurer_name'           => new sfWidgetFormInputText(),
      'insurance_number'       => new sfWidgetFormInputText(),
      'insurance_type'         => new sfWidgetFormInputText(),
      'insurance_period'       => new sfWidgetFormInputText(),
      'insurance_expiry_date'  => new sfWidgetFormInputText(),
      'last_insurance_renewal' => new sfWidgetFormInputText(),
      'insurance_status'       => new sfWidgetFormInputCheckbox(),
      'description'            => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'vehicle_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'insurer_name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'insurance_number'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'insurance_type'         => new sfValidatorInteger(array('required' => false)),
      'insurance_period'       => new sfValidatorInteger(array('required' => false)),
      'insurance_expiry_date'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'last_insurance_renewal' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'insurance_status'       => new sfValidatorBoolean(array('required' => false)),
      'description'            => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehicle_insurance_setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleInsuranceSetting';
  }

}
