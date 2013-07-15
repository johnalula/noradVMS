<?php

/**
 * ServiceVehicleAccident filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiceVehicleAccidentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'vehicle_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'accident_type_id' => new sfWidgetFormFilterInput(),
      'accident_place'   => new sfWidgetFormFilterInput(),
      'accident_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'accident_time'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'vehicle_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'accident_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'accident_place'   => new sfValidatorPass(array('required' => false)),
      'accident_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'accident_time'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('service_vehicle_accident_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiceVehicleAccident';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'task_id'          => 'ForeignKey',
      'vehicle_id'       => 'ForeignKey',
      'accident_type_id' => 'Number',
      'accident_place'   => 'Text',
      'accident_date'    => 'Date',
      'accident_time'    => 'Text',
    );
  }
}
