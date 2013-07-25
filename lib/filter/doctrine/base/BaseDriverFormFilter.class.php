<?php

/**
 * Driver filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDriverFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'        => new sfWidgetFormFilterInput(),
      'employee_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'license_type'    => new sfWidgetFormFilterInput(),
      'work_experience' => new sfWidgetFormFilterInput(),
      'desctiption'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'        => new sfValidatorPass(array('required' => false)),
      'employee_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'license_type'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'work_experience' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desctiption'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('driver_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Driver';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'token_id'        => 'Text',
      'employee_id'     => 'ForeignKey',
      'license_type'    => 'Number',
      'work_experience' => 'Number',
      'desctiption'     => 'Text',
    );
  }
}
