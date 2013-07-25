<?php

/**
 * SystemLogFile filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSystemLogFileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'action_date'    => new sfWidgetFormFilterInput(),
      'action_time'    => new sfWidgetFormFilterInput(),
      'module_name'    => new sfWidgetFormFilterInput(),
      'action_type_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'action_date'    => new sfValidatorPass(array('required' => false)),
      'action_time'    => new sfValidatorPass(array('required' => false)),
      'module_name'    => new sfValidatorPass(array('required' => false)),
      'action_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('system_log_file_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemLogFile';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'user_id'        => 'ForeignKey',
      'action_date'    => 'Text',
      'action_time'    => 'Text',
      'module_name'    => 'Text',
      'action_type_id' => 'Number',
    );
  }
}
