<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'participant_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'username'               => new sfWidgetFormInputText(),
      'password'               => new sfWidgetFormInputText(),
      'token_id'               => new sfWidgetFormInputText(),
      'group_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
      'is_active'              => new sfWidgetFormInputCheckbox(),
      'is_blocked'             => new sfWidgetFormInputCheckbox(),
      'status'                 => new sfWidgetFormInputCheckbox(),
      'permission_type_level'  => new sfWidgetFormInputText(),
      'ui_theme_color_setting' => new sfWidgetFormInputText(),
      'ui_language_setting'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'participant_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'username'               => new sfValidatorString(array('max_length' => 255)),
      'password'               => new sfValidatorString(array('max_length' => 255)),
      'token_id'               => new sfValidatorString(array('max_length' => 255)),
      'group_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'required' => false)),
      'is_active'              => new sfValidatorBoolean(array('required' => false)),
      'is_blocked'             => new sfValidatorBoolean(array('required' => false)),
      'status'                 => new sfValidatorBoolean(array('required' => false)),
      'permission_type_level'  => new sfValidatorInteger(array('required' => false)),
      'ui_theme_color_setting' => new sfValidatorInteger(array('required' => false)),
      'ui_language_setting'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
