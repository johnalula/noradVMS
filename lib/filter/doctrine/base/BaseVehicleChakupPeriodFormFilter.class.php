<?php

/**
 * VehicleChakupPeriod filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehicleChakupPeriodFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'vehicle_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'service_period'   => new sfWidgetFormFilterInput(),
      'period_frequency' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'vehicle_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'service_period'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'period_frequency' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vehicle_chakup_period_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleChakupPeriod';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'vehicle_id'       => 'ForeignKey',
      'service_period'   => 'Number',
      'period_frequency' => 'Number',
    );
  }
}
