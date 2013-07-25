<?php

/**
 * TaskExpenseRequired filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskExpenseRequiredFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'expense_type_id' => new sfWidgetFormFilterInput(),
      'expense_date'    => new sfWidgetFormFilterInput(),
      'reference_no'    => new sfWidgetFormFilterInput(),
      'unit_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'quantity'        => new sfWidgetFormFilterInput(),
      'unit_price'      => new sfWidgetFormFilterInput(),
      'total_price'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'expense_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expense_date'    => new sfValidatorPass(array('required' => false)),
      'reference_no'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unit_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unit'), 'column' => 'id')),
      'currency_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Currency'), 'column' => 'id')),
      'quantity'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unit_price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_price'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('task_expense_required_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskExpenseRequired';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'task_id'         => 'ForeignKey',
      'expense_type_id' => 'Number',
      'expense_date'    => 'Text',
      'reference_no'    => 'Number',
      'unit_id'         => 'ForeignKey',
      'currency_id'     => 'ForeignKey',
      'quantity'        => 'Number',
      'unit_price'      => 'Number',
      'total_price'     => 'Number',
    );
  }
}
