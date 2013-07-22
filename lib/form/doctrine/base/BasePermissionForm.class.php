<?php

/**
 * Permission form base class.
 *
 * @method Permission getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePermissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'group_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'module_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModulePermissionSetting'), 'add_empty' => true)),
      'create_action' => new sfWidgetFormInputCheckbox(),
      'delete_action' => new sfWidgetFormInputCheckbox(),
      'edit_action'   => new sfWidgetFormInputCheckbox(),
      'view_action'   => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'group_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'module_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ModulePermissionSetting'), 'required' => false)),
      'create_action' => new sfValidatorBoolean(array('required' => false)),
      'delete_action' => new sfValidatorBoolean(array('required' => false)),
      'edit_action'   => new sfValidatorBoolean(array('required' => false)),
      'view_action'   => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('permission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Permission';
  }

}
