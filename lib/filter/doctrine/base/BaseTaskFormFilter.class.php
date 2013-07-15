<?php

/**
 * Task filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'vehicle_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'token_id'                 => new sfWidgetFormFilterInput(),
      'start_date'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'effective_date'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'status'                   => new sfWidgetFormFilterInput(),
      'description'              => new sfWidgetFormFilterInput(),
      'type'                     => new sfWidgetFormFilterInput(),
      'agreement_participant_id' => new sfWidgetFormFilterInput(),
      'departure_date'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'departure_time'           => new sfWidgetFormFilterInput(),
      'departure_status'         => new sfWidgetFormFilterInput(),
      'return_date'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'return_time'              => new sfWidgetFormFilterInput(),
      'return_status'            => new sfWidgetFormFilterInput(),
      'no_of_passangers'         => new sfWidgetFormFilterInput(),
      'service_agreement_cost'   => new sfWidgetFormFilterInput(),
      'service_reason'           => new sfWidgetFormFilterInput(),
      'departure_mileage'        => new sfWidgetFormFilterInput(),
      'return_mileage'           => new sfWidgetFormFilterInput(),
      'difference_mileag'        => new sfWidgetFormFilterInput(),
      'service_type_id'          => new sfWidgetFormFilterInput(),
      'duel_acquire_id'          => new sfWidgetFormFilterInput(),
      'destination'              => new sfWidgetFormFilterInput(),
      'service_no_days'          => new sfWidgetFormFilterInput(),
      'driver_id'                => new sfWidgetFormFilterInput(),
      'transferer_id'            => new sfWidgetFormFilterInput(),
      'transferee_id'            => new sfWidgetFormFilterInput(),
      'new_vehicle_id'           => new sfWidgetFormFilterInput(),
      'returnee_id'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'vehicle_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'token_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'end_date'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'effective_date'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'status'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'              => new sfValidatorPass(array('required' => false)),
      'type'                     => new sfValidatorPass(array('required' => false)),
      'agreement_participant_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departure_date'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'departure_time'           => new sfValidatorPass(array('required' => false)),
      'departure_status'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'return_date'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'return_time'              => new sfValidatorPass(array('required' => false)),
      'return_status'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'no_of_passangers'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'service_agreement_cost'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'service_reason'           => new sfValidatorPass(array('required' => false)),
      'departure_mileage'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'return_mileage'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'difference_mileag'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'service_type_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'duel_acquire_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'destination'              => new sfValidatorPass(array('required' => false)),
      'service_no_days'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'driver_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transferer_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transferee_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'new_vehicle_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'returnee_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('task_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Task';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'vehicle_id'               => 'ForeignKey',
      'token_id'                 => 'Number',
      'start_date'               => 'Date',
      'end_date'                 => 'Date',
      'effective_date'           => 'Date',
      'status'                   => 'Number',
      'description'              => 'Text',
      'type'                     => 'Text',
      'agreement_participant_id' => 'Number',
      'departure_date'           => 'Date',
      'departure_time'           => 'Text',
      'departure_status'         => 'Number',
      'return_date'              => 'Date',
      'return_time'              => 'Text',
      'return_status'            => 'Number',
      'no_of_passangers'         => 'Number',
      'service_agreement_cost'   => 'Number',
      'service_reason'           => 'Text',
      'departure_mileage'        => 'Number',
      'return_mileage'           => 'Number',
      'difference_mileag'        => 'Number',
      'service_type_id'          => 'Number',
      'duel_acquire_id'          => 'Number',
      'destination'              => 'Text',
      'service_no_days'          => 'Number',
      'driver_id'                => 'Number',
      'transferer_id'            => 'Number',
      'transferee_id'            => 'Number',
      'new_vehicle_id'           => 'Number',
      'returnee_id'              => 'Number',
    );
  }
}
