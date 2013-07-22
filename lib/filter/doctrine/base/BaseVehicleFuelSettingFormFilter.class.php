<?php

/**
 * VehicleFuelSetting filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehicleFuelSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fuel_ammount'   => new sfWidgetFormFilterInput(),
      'number_of_days' => new sfWidgetFormFilterInput(),
      'description'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fuel_ammount'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'number_of_days' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vehicle_fuel_setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleFuelSetting';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'fuel_ammount'   => 'Number',
      'number_of_days' => 'Number',
      'description'    => 'Text',
    );
  }
}
