<?php

/**
 * permission filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasepermissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'group_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'module_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModulePermissionSetting'), 'add_empty' => true)),
      'create_action' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'delete_action' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'edit_action'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'view_action'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'group_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserGroup'), 'column' => 'id')),
      'user_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'module_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ModulePermissionSetting'), 'column' => 'id')),
      'create_action' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'delete_action' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'edit_action'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'view_action'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('permission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'permission';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'group_id'      => 'ForeignKey',
      'user_id'       => 'ForeignKey',
      'module_id'     => 'ForeignKey',
      'create_action' => 'Boolean',
      'delete_action' => 'Boolean',
      'edit_action'   => 'Boolean',
      'view_action'   => 'Boolean',
    );
  }
}
