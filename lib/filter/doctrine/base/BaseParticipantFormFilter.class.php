<?php

/**
 * Participant filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParticipantFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alias'                 => new sfWidgetFormFilterInput(),
      'participant_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ParticipantType'), 'add_empty' => true)),
      'status_id'             => new sfWidgetFormFilterInput(),
      'parent_id'             => new sfWidgetFormFilterInput(),
      'leader_participant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'vat_number'            => new sfWidgetFormFilterInput(),
      'project_no'            => new sfWidgetFormFilterInput(),
      'campus_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'description'           => new sfWidgetFormFilterInput(),
      'type'                  => new sfWidgetFormFilterInput(),
      'title'                 => new sfWidgetFormFilterInput(),
      'father_name'           => new sfWidgetFormFilterInput(),
      'grand_father_name'     => new sfWidgetFormFilterInput(),
      'gender'                => new sfWidgetFormFilterInput(),
      'birth_date'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'birth_place'           => new sfWidgetFormFilterInput(),
      'job_title'             => new sfWidgetFormFilterInput(),
      'dean_name'             => new sfWidgetFormFilterInput(),
      'director_name'         => new sfWidgetFormFilterInput(),
      'section_no'            => new sfWidgetFormFilterInput(),
      'section_leader_name'   => new sfWidgetFormFilterInput(),
      'project_code'          => new sfWidgetFormFilterInput(),
      'project_director'      => new sfWidgetFormFilterInput(),
      'participant_id'        => new sfWidgetFormFilterInput(),
      'license_type'          => new sfWidgetFormFilterInput(),
      'work_experience'       => new sfWidgetFormFilterInput(),
      'established_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'company_owner'         => new sfWidgetFormFilterInput(),
      'company_license_type'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'                  => new sfValidatorPass(array('required' => false)),
      'alias'                 => new sfValidatorPass(array('required' => false)),
      'participant_type_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ParticipantType'), 'column' => 'id')),
      'status_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'parent_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'leader_participant_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'vat_number'            => new sfValidatorPass(array('required' => false)),
      'project_no'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'campus_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Campus'), 'column' => 'id')),
      'description'           => new sfValidatorPass(array('required' => false)),
      'type'                  => new sfValidatorPass(array('required' => false)),
      'title'                 => new sfValidatorPass(array('required' => false)),
      'father_name'           => new sfValidatorPass(array('required' => false)),
      'grand_father_name'     => new sfValidatorPass(array('required' => false)),
      'gender'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'birth_date'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'birth_place'           => new sfValidatorPass(array('required' => false)),
      'job_title'             => new sfValidatorPass(array('required' => false)),
      'dean_name'             => new sfValidatorPass(array('required' => false)),
      'director_name'         => new sfValidatorPass(array('required' => false)),
      'section_no'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'section_leader_name'   => new sfValidatorPass(array('required' => false)),
      'project_code'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'project_director'      => new sfValidatorPass(array('required' => false)),
      'participant_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'license_type'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'work_experience'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'established_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'company_owner'         => new sfValidatorPass(array('required' => false)),
      'company_license_type'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('participant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Participant';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'token_id'              => 'Number',
      'name'                  => 'Text',
      'alias'                 => 'Text',
      'participant_type_id'   => 'ForeignKey',
      'status_id'             => 'Number',
      'parent_id'             => 'Number',
      'leader_participant_id' => 'ForeignKey',
      'vat_number'            => 'Text',
      'project_no'            => 'Number',
      'campus_id'             => 'ForeignKey',
      'description'           => 'Text',
      'type'                  => 'Text',
      'title'                 => 'Text',
      'father_name'           => 'Text',
      'grand_father_name'     => 'Text',
      'gender'                => 'Number',
      'birth_date'            => 'Date',
      'birth_place'           => 'Text',
      'job_title'             => 'Text',
      'dean_name'             => 'Text',
      'director_name'         => 'Text',
      'section_no'            => 'Number',
      'section_leader_name'   => 'Text',
      'project_code'          => 'Number',
      'project_director'      => 'Text',
      'participant_id'        => 'Number',
      'license_type'          => 'Number',
      'work_experience'       => 'Number',
      'established_date'      => 'Date',
      'company_owner'         => 'Text',
      'company_license_type'  => 'Number',
    );
  }
}
