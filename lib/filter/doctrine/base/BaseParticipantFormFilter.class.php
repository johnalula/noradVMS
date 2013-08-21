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
      'token_id'              => new sfWidgetFormFilterInput(),
      'name'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alias'                 => new sfWidgetFormFilterInput(),
      'participant_type'      => new sfWidgetFormFilterInput(),
      'status_id'             => new sfWidgetFormFilterInput(),
      'parent_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'participant_leader_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'add_empty' => true)),
      'vat_number'            => new sfWidgetFormFilterInput(),
      'project_no'            => new sfWidgetFormFilterInput(),
      'campus_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'description'           => new sfWidgetFormFilterInput(),
      'type'                  => new sfWidgetFormFilterInput(),
      'title'                 => new sfWidgetFormFilterInput(),
      'father_name'           => new sfWidgetFormFilterInput(),
      'grand_father_name'     => new sfWidgetFormFilterInput(),
      'full_name'             => new sfWidgetFormFilterInput(),
      'gender'                => new sfWidgetFormFilterInput(),
      'birth_date'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'birth_place'           => new sfWidgetFormFilterInput(),
      'id_no'                 => new sfWidgetFormFilterInput(),
      'job_title'             => new sfWidgetFormFilterInput(),
      'employment_type_id'    => new sfWidgetFormFilterInput(),
      'section_no'            => new sfWidgetFormFilterInput(),
      'project_code'          => new sfWidgetFormFilterInput(),
      'established_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'company_owner'         => new sfWidgetFormFilterInput(),
      'company_license_type'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'              => new sfValidatorPass(array('required' => false)),
      'name'                  => new sfValidatorPass(array('required' => false)),
      'alias'                 => new sfValidatorPass(array('required' => false)),
      'participant_type'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'parent_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'participant_leader_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Employee'), 'column' => 'id')),
      'vat_number'            => new sfValidatorPass(array('required' => false)),
      'project_no'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'campus_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Campus'), 'column' => 'id')),
      'description'           => new sfValidatorPass(array('required' => false)),
      'type'                  => new sfValidatorPass(array('required' => false)),
      'title'                 => new sfValidatorPass(array('required' => false)),
      'father_name'           => new sfValidatorPass(array('required' => false)),
      'grand_father_name'     => new sfValidatorPass(array('required' => false)),
      'full_name'             => new sfValidatorPass(array('required' => false)),
      'gender'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'birth_date'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'birth_place'           => new sfValidatorPass(array('required' => false)),
      'id_no'                 => new sfValidatorPass(array('required' => false)),
      'job_title'             => new sfValidatorPass(array('required' => false)),
      'employment_type_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'section_no'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'project_code'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'token_id'              => 'Text',
      'name'                  => 'Text',
      'alias'                 => 'Text',
      'participant_type'      => 'Number',
      'status_id'             => 'Number',
      'parent_id'             => 'ForeignKey',
      'participant_leader_id' => 'ForeignKey',
      'vat_number'            => 'Text',
      'project_no'            => 'Number',
      'campus_id'             => 'ForeignKey',
      'description'           => 'Text',
      'type'                  => 'Text',
      'title'                 => 'Text',
      'father_name'           => 'Text',
      'grand_father_name'     => 'Text',
      'full_name'             => 'Text',
      'gender'                => 'Number',
      'birth_date'            => 'Date',
      'birth_place'           => 'Text',
      'id_no'                 => 'Text',
      'job_title'             => 'Text',
      'employment_type_id'    => 'Number',
      'section_no'            => 'Number',
      'project_code'          => 'Number',
      'established_date'      => 'Date',
      'company_owner'         => 'Text',
      'company_license_type'  => 'Number',
    );
  }
}
