<?php

/**
 * ServiceVehicleItemAcquired filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiceVehicleItemAcquiredFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'vehicle_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'item_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Item'), 'add_empty' => true)),
      'item_name'  => new sfWidgetFormFilterInput(),
      'serial_no'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'vehicle_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'item_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Item'), 'column' => 'id')),
      'item_name'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'serial_no'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('service_vehicle_item_acquired_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiceVehicleItemAcquired';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'task_id'    => 'ForeignKey',
      'vehicle_id' => 'ForeignKey',
      'item_id'    => 'ForeignKey',
      'item_name'  => 'Number',
      'serial_no'  => 'Number',
    );
  }
}
