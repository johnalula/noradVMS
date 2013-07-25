<?php

/**
 * TaskTransaction filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskTransactionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'token_id'         => new sfWidgetFormFilterInput(),
      'cost_description' => new sfWidgetFormFilterInput(),
      'transaction_date' => new sfWidgetFormFilterInput(),
      'cost_credited'    => new sfWidgetFormFilterInput(),
      'cost_debited'     => new sfWidgetFormFilterInput(),
      'cost_balance'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'token_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cost_description' => new sfValidatorPass(array('required' => false)),
      'transaction_date' => new sfValidatorPass(array('required' => false)),
      'cost_credited'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cost_debited'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cost_balance'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('task_transaction_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskTransaction';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'task_id'          => 'ForeignKey',
      'token_id'         => 'Number',
      'cost_description' => 'Text',
      'transaction_date' => 'Text',
      'cost_credited'    => 'Number',
      'cost_debited'     => 'Number',
      'cost_balance'     => 'Number',
    );
  }
}
