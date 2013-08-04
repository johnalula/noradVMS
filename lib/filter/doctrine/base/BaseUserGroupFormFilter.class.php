<?php

/**
 * UserGroup filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'group_type_id'          => new sfWidgetFormFilterInput(),
      'name'                   => new sfWidgetFormFilterInput(),
      'is_active'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_blocked'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ui_theme_color_setting' => new sfWidgetFormFilterInput(),
      'ui_language_setting'    => new sfWidgetFormFilterInput(),
      'description'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'               => new sfValidatorPass(array('required' => false)),
      'group_type_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'is_active'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_blocked'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ui_theme_color_setting' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ui_language_setting'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserGroup';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'token_id'               => 'Text',
      'group_type_id'          => 'Number',
      'name'                   => 'Text',
      'is_active'              => 'Boolean',
      'is_blocked'             => 'Boolean',
      'status'                 => 'Boolean',
      'ui_theme_color_setting' => 'Number',
      'ui_language_setting'    => 'Number',
      'description'            => 'Text',
    );
  }
}
