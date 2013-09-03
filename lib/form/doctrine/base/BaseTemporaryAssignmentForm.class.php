<?php

/**
 * TemporaryAssignment form base class.
 *
 * @method TemporaryAssignment getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTemporaryAssignmentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'token_id'           => new sfWidgetFormInputText(),
      'vehicle_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'participant_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'from_date'          => new sfWidgetFormInputText(),
      'to_date'            => new sfWidgetFormInputText(),
      'effective_date'     => new sfWidgetFormInputText(),
      'reasignment_reason' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'vehicle_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'participant_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'from_date'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'to_date'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'effective_date'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'reasignment_reason' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('temporary_assignment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TemporaryAssignment';
  }

}
