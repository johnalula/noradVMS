<?php

/**
 * Participant form base class.
 *
 * @method Participant getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseParticipantForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'token_id'              => new sfWidgetFormInputText(),
      'name'                  => new sfWidgetFormInputText(),
      'alias'                 => new sfWidgetFormInputText(),
      'participant_type'      => new sfWidgetFormInputText(),
      'status_id'             => new sfWidgetFormInputText(),
      'parent_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'participant_leader_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'add_empty' => true)),
      'vat_number'            => new sfWidgetFormInputText(),
      'project_no'            => new sfWidgetFormInputText(),
      'campus_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'description'           => new sfWidgetFormInputText(),
      'type'                  => new sfWidgetFormInputText(),
      'title'                 => new sfWidgetFormInputText(),
      'father_name'           => new sfWidgetFormInputText(),
      'grand_father_name'     => new sfWidgetFormInputText(),
      'full_name'             => new sfWidgetFormInputText(),
      'gender'                => new sfWidgetFormInputText(),
      'birth_date'            => new sfWidgetFormInputText(),
      'birth_place'           => new sfWidgetFormInputText(),
      'id_no'                 => new sfWidgetFormInputText(),
      'job_title'             => new sfWidgetFormInputText(),
      'employment_type_id'    => new sfWidgetFormInputText(),
      'section_no'            => new sfWidgetFormInputText(),
      'project_code'          => new sfWidgetFormInputText(),
      'established_date'      => new sfWidgetFormDate(),
      'company_owner'         => new sfWidgetFormInputText(),
      'company_license_type'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'name'                  => new sfValidatorString(array('max_length' => 255)),
      'alias'                 => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'participant_type'      => new sfValidatorInteger(array('required' => false)),
      'status_id'             => new sfValidatorInteger(array('required' => false)),
      'parent_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'participant_leader_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'required' => false)),
      'vat_number'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'project_no'            => new sfValidatorInteger(array('required' => false)),
      'campus_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'required' => false)),
      'description'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'                 => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'father_name'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'grand_father_name'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'full_name'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gender'                => new sfValidatorInteger(array('required' => false)),
      'birth_date'            => new sfValidatorPass(array('required' => false)),
      'birth_place'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'id_no'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'job_title'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'employment_type_id'    => new sfValidatorInteger(array('required' => false)),
      'section_no'            => new sfValidatorInteger(array('required' => false)),
      'project_code'          => new sfValidatorInteger(array('required' => false)),
      'established_date'      => new sfValidatorDate(array('required' => false)),
      'company_owner'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company_license_type'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('participant[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Participant';
  }

}
