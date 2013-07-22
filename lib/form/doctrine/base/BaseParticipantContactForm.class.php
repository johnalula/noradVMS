<?php

/**
 * ParticipantContact form base class.
 *
 * @method ParticipantContact getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseParticipantContactForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'participant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'street_number'  => new sfWidgetFormInputText(),
      'house_number'   => new sfWidgetFormInputText(),
      'pobox'          => new sfWidgetFormInputText(),
      'mobile_number'  => new sfWidgetFormInputText(),
      'phone_number'   => new sfWidgetFormInputText(),
      'fax'            => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'website'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'participant_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'street_number'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'house_number'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pobox'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mobile_number'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone_number'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fax'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'website'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('participant_contact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ParticipantContact';
  }

}
