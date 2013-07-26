<?php

/**
 * VehicleCheckupSetting form base class.
 *
 * @method VehicleCheckupSetting getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVehicleCheckupSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'vehicle_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'check_up_name' => new sfWidgetFormInputText(),
      'pass_value'    => new sfWidgetFormInputCheckbox(),
      'fail_value'    => new sfWidgetFormInputCheckbox(),
      'na_value'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'vehicle_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'check_up_name' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pass_value'    => new sfValidatorBoolean(array('required' => false)),
      'fail_value'    => new sfValidatorBoolean(array('required' => false)),
      'na_value'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehicle_checkup_setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleCheckupSetting';
  }

}
