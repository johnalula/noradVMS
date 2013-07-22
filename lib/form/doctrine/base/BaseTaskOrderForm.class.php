<?php

/**
 * TaskOrder form base class.
 *
 * @method TaskOrder getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'task_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => false)),
      'pb_id'             => new sfWidgetFormInputText(),
      'acquired_for'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'budget_source'     => new sfWidgetFormInputText(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'category_group_id' => new sfWidgetFormInputText(),
      'clss'              => new sfWidgetFormInputText(),
      'unit_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'planned_quantity'  => new sfWidgetFormInputText(),
      'actual_quantity'   => new sfWidgetFormInputText(),
      'remaining'         => new sfWidgetFormInputText(),
      'unit_price'        => new sfWidgetFormInputText(),
      'vat'               => new sfWidgetFormInputCheckbox(),
      'currency_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'amount'            => new sfWidgetFormInputText(),
      'effective_date'    => new sfWidgetFormInputText(),
      'status'            => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
      'sealed_count'      => new sfWidgetFormInputText(),
      'used_count'        => new sfWidgetFormInputText(),
      'concrete_count'    => new sfWidgetFormInputText(),
      'nasty_count'       => new sfWidgetFormInputText(),
      'disposed_count'    => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'))),
      'pb_id'             => new sfValidatorInteger(array('required' => false)),
      'acquired_for'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'budget_source'     => new sfValidatorInteger(array('required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'category_group_id' => new sfValidatorInteger(array('required' => false)),
      'clss'              => new sfValidatorInteger(array('required' => false)),
      'unit_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'required' => false)),
      'planned_quantity'  => new sfValidatorNumber(array('required' => false)),
      'actual_quantity'   => new sfValidatorNumber(),
      'remaining'         => new sfValidatorNumber(array('required' => false)),
      'unit_price'        => new sfValidatorNumber(array('required' => false)),
      'vat'               => new sfValidatorBoolean(array('required' => false)),
      'currency_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'required' => false)),
      'amount'            => new sfValidatorNumber(array('required' => false)),
      'effective_date'    => new sfValidatorInteger(array('required' => false)),
      'status'            => new sfValidatorInteger(array('required' => false)),
      'description'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sealed_count'      => new sfValidatorNumber(array('required' => false)),
      'used_count'        => new sfValidatorNumber(array('required' => false)),
      'concrete_count'    => new sfValidatorNumber(array('required' => false)),
      'nasty_count'       => new sfValidatorNumber(array('required' => false)),
      'disposed_count'    => new sfValidatorNumber(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('task_order[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskOrder';
  }

}
