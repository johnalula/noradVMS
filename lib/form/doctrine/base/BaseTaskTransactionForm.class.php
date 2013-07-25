<?php

/**
 * TaskTransaction form base class.
 *
 * @method TaskTransaction getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskTransactionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'task_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'token_id'         => new sfWidgetFormInputText(),
      'cost_description' => new sfWidgetFormTextarea(),
      'transaction_date' => new sfWidgetFormInputText(),
      'cost_credited'    => new sfWidgetFormInputText(),
      'cost_debited'     => new sfWidgetFormInputText(),
      'cost_balance'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'token_id'         => new sfValidatorInteger(array('required' => false)),
      'cost_description' => new sfValidatorString(array('required' => false)),
      'transaction_date' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cost_credited'    => new sfValidatorNumber(array('required' => false)),
      'cost_debited'     => new sfValidatorNumber(array('required' => false)),
      'cost_balance'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_transaction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskTransaction';
  }

}
