<?php

/**
 * ServiceVehicleCost filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiceVehicleCostFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'vehicle_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'reference_no' => new sfWidgetFormFilterInput(),
      'unit_price'   => new sfWidgetFormFilterInput(),
      'total_price'  => new sfWidgetFormFilterInput(),
      'quantity'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'vehicle_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'reference_no' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unit_price'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_price'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'quantity'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('service_vehicle_cost_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiceVehicleCost';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'task_id'      => 'ForeignKey',
      'vehicle_id'   => 'ForeignKey',
      'reference_no' => 'Number',
      'unit_price'   => 'Number',
      'total_price'  => 'Number',
      'quantity'     => 'Number',
    );
  }
}
