<?php

/**
 * AssignedVehicle form base class.
 *
 * @method AssignedVehicle getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssignedVehicleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'task_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'driver_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'vehicle_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'assigned_date'      => new sfWidgetFormInputText(),
      'maintenance_status' => new sfWidgetFormInputCheckbox(),
      'departure_status'   => new sfWidgetFormInputCheckbox(),
      'return_status'      => new sfWidgetFormInputCheckbox(),
      'reasigned_status'   => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'driver_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'vehicle_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'assigned_date'      => new sfValidatorPass(array('required' => false)),
      'maintenance_status' => new sfValidatorBoolean(array('required' => false)),
      'departure_status'   => new sfValidatorBoolean(array('required' => false)),
      'return_status'      => new sfValidatorBoolean(array('required' => false)),
      'reasigned_status'   => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('assigned_vehicle[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssignedVehicle';
  }

}
