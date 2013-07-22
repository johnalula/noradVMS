<?php

/**
 * VehicleChakupSetting filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehicleChakupSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'service_period'   => new sfWidgetFormFilterInput(),
      'period_frequency' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'service_period'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'period_frequency' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vehicle_chakup_setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleChakupSetting';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'service_period'   => 'Number',
      'period_frequency' => 'Number',
    );
  }
}
