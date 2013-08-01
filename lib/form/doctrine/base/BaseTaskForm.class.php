<?php

/**
 * Task form base class.
 *
 * @method Task getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'token_id'                 => new sfWidgetFormInputText(),
      'start_date'               => new sfWidgetFormInputText(),
      'end_date'                 => new sfWidgetFormInputText(),
      'effective_date'           => new sfWidgetFormInputText(),
      'status_id'                => new sfWidgetFormInputText(),
      'reference_no'             => new sfWidgetFormInputText(),
      'description'              => new sfWidgetFormTextarea(),
      'type'                     => new sfWidgetFormInputText(),
      'agreement_participant_id' => new sfWidgetFormInputText(),
      'departure_date'           => new sfWidgetFormInputText(),
      'departure_time'           => new sfWidgetFormTime(),
      'departure_status'         => new sfWidgetFormInputText(),
      'return_date'              => new sfWidgetFormInputText(),
      'return_time'              => new sfWidgetFormTime(),
      'return_status'            => new sfWidgetFormInputText(),
      'number_of_passangers'     => new sfWidgetFormInputText(),
      'service_agreement_cost'   => new sfWidgetFormInputText(),
      'service_reason'           => new sfWidgetFormInputText(),
      'departure_mileage'        => new sfWidgetFormInputText(),
      'return_mileage'           => new sfWidgetFormInputText(),
      'difference_mileag'        => new sfWidgetFormInputText(),
      'service_type_id'          => new sfWidgetFormInputText(),
      'duel_acquire_id'          => new sfWidgetFormInputText(),
      'destination'              => new sfWidgetFormInputText(),
      'service_number_of_days'   => new sfWidgetFormInputText(),
      'service_delay_status'     => new sfWidgetFormInputCheckbox(),
      'number_of_delay_days'     => new sfWidgetFormInputText(),
      'delay_reason'             => new sfWidgetFormTextarea(),
      'registration_mode'        => new sfWidgetFormInputText(),
      'driver_id'                => new sfWidgetFormInputText(),
      'transferer_id'            => new sfWidgetFormInputText(),
      'transferee_id'            => new sfWidgetFormInputText(),
      'new_vehicle_id'           => new sfWidgetFormInputText(),
      'returnee_id'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'start_date'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'end_date'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'effective_date'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'status_id'                => new sfValidatorInteger(array('required' => false)),
      'reference_no'             => new sfValidatorInteger(array('required' => false)),
      'description'              => new sfValidatorString(array('required' => false)),
      'type'                     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'agreement_participant_id' => new sfValidatorInteger(array('required' => false)),
      'departure_date'           => new sfValidatorPass(array('required' => false)),
      'departure_time'           => new sfValidatorTime(array('required' => false)),
      'departure_status'         => new sfValidatorInteger(array('required' => false)),
      'return_date'              => new sfValidatorPass(array('required' => false)),
      'return_time'              => new sfValidatorTime(array('required' => false)),
      'return_status'            => new sfValidatorInteger(array('required' => false)),
      'number_of_passangers'     => new sfValidatorInteger(array('required' => false)),
      'service_agreement_cost'   => new sfValidatorNumber(array('required' => false)),
      'service_reason'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'departure_mileage'        => new sfValidatorInteger(array('required' => false)),
      'return_mileage'           => new sfValidatorInteger(array('required' => false)),
      'difference_mileag'        => new sfValidatorInteger(array('required' => false)),
      'service_type_id'          => new sfValidatorInteger(array('required' => false)),
      'duel_acquire_id'          => new sfValidatorInteger(array('required' => false)),
      'destination'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'service_number_of_days'   => new sfValidatorInteger(array('required' => false)),
      'service_delay_status'     => new sfValidatorBoolean(array('required' => false)),
      'number_of_delay_days'     => new sfValidatorInteger(array('required' => false)),
      'delay_reason'             => new sfValidatorString(array('required' => false)),
      'registration_mode'        => new sfValidatorInteger(array('required' => false)),
      'driver_id'                => new sfValidatorInteger(array('required' => false)),
      'transferer_id'            => new sfValidatorInteger(array('required' => false)),
      'transferee_id'            => new sfValidatorInteger(array('required' => false)),
      'new_vehicle_id'           => new sfValidatorInteger(array('required' => false)),
      'returnee_id'              => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Task';
  }

}
