<?php

/**
 * ParticipantContact filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParticipantContactFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'participant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'street_number'  => new sfWidgetFormFilterInput(),
      'house_number'   => new sfWidgetFormFilterInput(),
      'pobox'          => new sfWidgetFormFilterInput(),
      'mobile_number'  => new sfWidgetFormFilterInput(),
      'phone_number'   => new sfWidgetFormFilterInput(),
      'fax'            => new sfWidgetFormFilterInput(),
      'email'          => new sfWidgetFormFilterInput(),
      'website'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'participant_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'street_number'  => new sfValidatorPass(array('required' => false)),
      'house_number'   => new sfValidatorPass(array('required' => false)),
      'pobox'          => new sfValidatorPass(array('required' => false)),
      'mobile_number'  => new sfValidatorPass(array('required' => false)),
      'phone_number'   => new sfValidatorPass(array('required' => false)),
      'fax'            => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'website'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('participant_contact_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ParticipantContact';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'participant_id' => 'ForeignKey',
      'street_number'  => 'Text',
      'house_number'   => 'Text',
      'pobox'          => 'Text',
      'mobile_number'  => 'Text',
      'phone_number'   => 'Text',
      'fax'            => 'Text',
      'email'          => 'Text',
      'website'        => 'Text',
    );
  }
}
