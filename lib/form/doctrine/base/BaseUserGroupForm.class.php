<?php

/**
 * UserGroup form base class.
 *
 * @method UserGroup getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'token_id'               => new sfWidgetFormInputText(),
      'group_type_id'          => new sfWidgetFormInputText(),
      'name'                   => new sfWidgetFormInputText(),
      'is_active'              => new sfWidgetFormInputCheckbox(),
      'is_blocked'             => new sfWidgetFormInputCheckbox(),
      'status'                 => new sfWidgetFormInputCheckbox(),
      'ui_theme_color_setting' => new sfWidgetFormInputText(),
      'ui_language_setting'    => new sfWidgetFormInputText(),
      'description'            => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'               => new sfValidatorString(array('max_length' => 255)),
      'group_type_id'          => new sfValidatorInteger(array('required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'is_active'              => new sfValidatorBoolean(array('required' => false)),
      'is_blocked'             => new sfValidatorBoolean(array('required' => false)),
      'status'                 => new sfValidatorBoolean(array('required' => false)),
      'ui_theme_color_setting' => new sfValidatorInteger(array('required' => false)),
      'ui_language_setting'    => new sfValidatorInteger(array('required' => false)),
      'description'            => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserGroup';
  }

}
