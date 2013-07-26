<?php

/**
 * VehicleFuelSetting form base class.
 *
 * @method VehicleFuelSetting getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVehicleFuelSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'vehicle_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'fuel_ammount'   => new sfWidgetFormInputText(),
      'number_of_days' => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'vehicle_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'fuel_ammount'   => new sfValidatorNumber(array('required' => false)),
      'number_of_days' => new sfValidatorInteger(array('required' => false)),
      'description'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehicle_fuel_setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleFuelSetting';
  }

}
