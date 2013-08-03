<?php

/**
 * TaskParticipant filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskParticipantFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'         => new sfWidgetFormFilterInput(),
      'task_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'participant_role' => new sfWidgetFormFilterInput(),
      'participant_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'description'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'         => new sfValidatorPass(array('required' => false)),
      'task_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'participant_role' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'participant_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'description'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_participant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskParticipant';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'token_id'         => 'Text',
      'task_id'          => 'ForeignKey',
      'participant_role' => 'Number',
      'participant_id'   => 'ForeignKey',
      'description'      => 'Text',
    );
  }
}
