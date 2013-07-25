<?php

/**
 * TaskExpenseRequired form base class.
 *
 * @method TaskExpenseRequired getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskExpenseRequiredForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'task_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'expense_type_id' => new sfWidgetFormInputText(),
      'expense_date'    => new sfWidgetFormInputText(),
      'reference_no'    => new sfWidgetFormInputText(),
      'unit_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'quantity'        => new sfWidgetFormInputText(),
      'unit_price'      => new sfWidgetFormInputText(),
      'total_price'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'expense_type_id' => new sfValidatorInteger(array('required' => false)),
      'expense_date'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'reference_no'    => new sfValidatorInteger(array('required' => false)),
      'unit_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'required' => false)),
      'currency_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'required' => false)),
      'quantity'        => new sfValidatorNumber(array('required' => false)),
      'unit_price'      => new sfValidatorNumber(array('required' => false)),
      'total_price'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_expense_required[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskExpenseRequired';
  }

}
