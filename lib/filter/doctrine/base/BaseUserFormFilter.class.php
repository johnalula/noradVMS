<?php

/**
 * User filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'participant_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'username'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'token_id'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'group_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
      'is_active'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_blocked'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'permission_mode'        => new sfWidgetFormFilterInput(),
      'ui_theme_color_setting' => new sfWidgetFormFilterInput(),
      'ui_language_setting'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'participant_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'username'               => new sfValidatorPass(array('required' => false)),
      'password'               => new sfValidatorPass(array('required' => false)),
      'token_id'               => new sfValidatorPass(array('required' => false)),
      'group_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserGroup'), 'column' => 'id')),
      'is_active'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_blocked'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'permission_mode'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ui_theme_color_setting' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ui_language_setting'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'participant_id'         => 'ForeignKey',
      'username'               => 'Text',
      'password'               => 'Text',
      'token_id'               => 'Text',
      'group_id'               => 'ForeignKey',
      'is_active'              => 'Boolean',
      'is_blocked'             => 'Boolean',
      'status'                 => 'Boolean',
      'permission_mode'        => 'Number',
      'ui_theme_color_setting' => 'Number',
      'ui_language_setting'    => 'Number',
    );
  }
}
