<?php

/**
 * TemporaryAssignment filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTemporaryAssignmentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'           => new sfWidgetFormFilterInput(),
      'vehicle_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'participant_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'from_date'          => new sfWidgetFormFilterInput(),
      'to_date'            => new sfWidgetFormFilterInput(),
      'effective_date'     => new sfWidgetFormFilterInput(),
      'reasignment_reason' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'           => new sfValidatorPass(array('required' => false)),
      'vehicle_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'participant_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'from_date'          => new sfValidatorPass(array('required' => false)),
      'to_date'            => new sfValidatorPass(array('required' => false)),
      'effective_date'     => new sfValidatorPass(array('required' => false)),
      'reasignment_reason' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('temporary_assignment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TemporaryAssignment';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'token_id'           => 'Text',
      'vehicle_id'         => 'ForeignKey',
      'participant_id'     => 'ForeignKey',
      'from_date'          => 'Text',
      'to_date'            => 'Text',
      'effective_date'     => 'Text',
      'reasignment_reason' => 'Text',
    );
  }
}
