<?php

/**
 * TaskIncident form base class.
 *
 * @method TaskIncident getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskIncidentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'task_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'vehicle_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'incident_type_id'  => new sfWidgetFormInputText(),
      'incident_location' => new sfWidgetFormInputText(),
      'incident_date'     => new sfWidgetFormInputText(),
      'incident_time'     => new sfWidgetFormDateTime(),
      'expense_required'  => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'vehicle_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'incident_type_id'  => new sfValidatorInteger(array('required' => false)),
      'incident_location' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'incident_date'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'incident_time'     => new sfValidatorDateTime(array('required' => false)),
      'expense_required'  => new sfValidatorNumber(array('required' => false)),
      'description'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_incident[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskIncident';
  }

}
