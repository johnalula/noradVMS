<?php

/**
 * AssignedVehicle filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAssignedVehicleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'token_id'            => new sfWidgetFormFilterInput(),
      'participant_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'vehicle_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'assignment_order_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssignmentOrder'), 'add_empty' => true)),
      'effective_date'      => new sfWidgetFormFilterInput(),
      'assigned_date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'maintenance_status'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'departure_status'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'return_status'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'reasigned_status'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'task_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'token_id'            => new sfValidatorPass(array('required' => false)),
      'participant_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'vehicle_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'assignment_order_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssignmentOrder'), 'column' => 'id')),
      'effective_date'      => new sfValidatorPass(array('required' => false)),
      'assigned_date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'maintenance_status'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'departure_status'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'return_status'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'reasigned_status'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('assigned_vehicle_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssignedVehicle';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'task_id'             => 'ForeignKey',
      'token_id'            => 'Text',
      'participant_id'      => 'ForeignKey',
      'vehicle_id'          => 'ForeignKey',
      'assignment_order_id' => 'ForeignKey',
      'effective_date'      => 'Text',
      'assigned_date'       => 'Date',
      'maintenance_status'  => 'Boolean',
      'departure_status'    => 'Boolean',
      'return_status'       => 'Boolean',
      'reasigned_status'    => 'Boolean',
    );
  }
}
