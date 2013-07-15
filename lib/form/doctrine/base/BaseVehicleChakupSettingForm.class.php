<?php

/**
 * VehicleChakupSetting form base class.
 *
 * @method VehicleChakupSetting getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVehicleChakupSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'service_period'   => new sfWidgetFormInputText(),
      'period_frequency' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'service_period'   => new sfValidatorInteger(array('required' => false)),
      'period_frequency' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehicle_chakup_setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleChakupSetting';
  }

}
