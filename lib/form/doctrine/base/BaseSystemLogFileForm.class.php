<?php

/**
 * SystemLogFile form base class.
 *
 * @method SystemLogFile getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSystemLogFileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'token_id'       => new sfWidgetFormInputText(),
      'action_date'    => new sfWidgetFormInputText(),
      'action_time'    => new sfWidgetFormInputText(),
      'module_name'    => new sfWidgetFormInputText(),
      'deleted_date'   => new sfWidgetFormInputText(),
      'created_date'   => new sfWidgetFormInputText(),
      'viewed_date'    => new sfWidgetFormInputText(),
      'edited_date'    => new sfWidgetFormInputText(),
      'action_type_id' => new sfWidgetFormInputText(),
      'pc_ip_address'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'token_id'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'action_date'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'action_time'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'module_name'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'deleted_date'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_date'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'viewed_date'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'edited_date'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'action_type_id' => new sfValidatorInteger(array('required' => false)),
      'pc_ip_address'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('system_log_file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemLogFile';
  }

}
