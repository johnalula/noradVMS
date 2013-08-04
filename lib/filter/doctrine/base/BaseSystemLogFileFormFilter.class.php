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
      'token_id'       => new sfWidgetFormFilterInput(),
      'action_date'    => new sfWidgetFormFilterInput(),
      'action_time'    => new sfWidgetFormFilterInput(),
      'module_name'    => new sfWidgetFormFilterInput(),
      'deleted_data'   => new sfWidgetFormFilterInput(),
      'created_data'   => new sfWidgetFormFilterInput(),
      'viewed_data'    => new sfWidgetFormFilterInput(),
      'edited_data'    => new sfWidgetFormFilterInput(),
      'action_type_id' => new sfWidgetFormFilterInput(),
      'pc_ip_address'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'token_id'       => new sfValidatorPass(array('required' => false)),
      'action_date'    => new sfValidatorPass(array('required' => false)),
      'action_time'    => new sfValidatorPass(array('required' => false)),
      'module_name'    => new sfValidatorPass(array('required' => false)),
      'deleted_data'   => new sfValidatorPass(array('required' => false)),
      'created_data'   => new sfValidatorPass(array('required' => false)),
      'viewed_data'    => new sfValidatorPass(array('required' => false)),
      'edited_data'    => new sfValidatorPass(array('required' => false)),
      'action_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pc_ip_address'  => new sfValidatorPass(array('required' => false)),
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
      'token_id'       => 'Text',
      'action_date'    => 'Text',
      'action_time'    => 'Text',
      'module_name'    => 'Text',
      'deleted_data'   => 'Text',
      'created_data'   => 'Text',
      'viewed_data'    => 'Text',
      'edited_data'    => 'Text',
      'action_type_id' => 'Number',
      'pc_ip_address'  => 'Text',
    );
  }
}
