<?php

/**
 * TaskPassengers filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskPassengersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'       => new sfWidgetFormFilterInput(),
      'task_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'fleet_order_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FleetOrder'), 'add_empty' => true)),
      'full_name'      => new sfWidgetFormFilterInput(),
      'passenger_role' => new sfWidgetFormFilterInput(),
      'description'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'       => new sfValidatorPass(array('required' => false)),
      'task_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'fleet_order_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('FleetOrder'), 'column' => 'id')),
      'full_name'      => new sfValidatorPass(array('required' => false)),
      'passenger_role' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_passengers_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskPassengers';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'token_id'       => 'Text',
      'task_id'        => 'ForeignKey',
      'fleet_order_id' => 'ForeignKey',
      'full_name'      => 'Text',
      'passenger_role' => 'Number',
      'description'    => 'Text',
    );
  }
}
