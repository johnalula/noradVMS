<?php

/**
 * CheckUpOrder form base class.
 *
 * @method CheckUpOrder getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCheckUpOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'task_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => false)),
      'token_id'           => new sfWidgetFormInputText(),
      'vehicle_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'checkup_setting_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CheckUpSetting'), 'add_empty' => true)),
      'effective_date'     => new sfWidgetFormInputText(),
      'status'             => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'))),
      'token_id'           => new sfValidatorString(array('max_length' => 100)),
      'vehicle_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'required' => false)),
      'checkup_setting_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CheckUpSetting'), 'required' => false)),
      'effective_date'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'status'             => new sfValidatorInteger(array('required' => false)),
      'description'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('check_up_order[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CheckUpOrder';
  }

}
