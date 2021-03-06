<?php

/**
 * TaskOrder filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskOrderFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'token_id'        => new sfWidgetFormFilterInput(),
      'category_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'clss'            => new sfWidgetFormFilterInput(),
      'unit_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'actual_quantity' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'remaining'       => new sfWidgetFormFilterInput(),
      'unit_price'      => new sfWidgetFormFilterInput(),
      'vat'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'currency_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'amount'          => new sfWidgetFormFilterInput(),
      'effective_date'  => new sfWidgetFormFilterInput(),
      'status'          => new sfWidgetFormFilterInput(),
      'description'     => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'task_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'token_id'        => new sfValidatorPass(array('required' => false)),
      'category_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'clss'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unit_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unit'), 'column' => 'id')),
      'actual_quantity' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'remaining'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unit_price'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vat'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'currency_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Currency'), 'column' => 'id')),
      'amount'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'effective_date'  => new sfValidatorPass(array('required' => false)),
      'status'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'     => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('task_order_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskOrder';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'task_id'         => 'ForeignKey',
      'token_id'        => 'Text',
      'category_id'     => 'ForeignKey',
      'clss'            => 'Number',
      'unit_id'         => 'ForeignKey',
      'actual_quantity' => 'Number',
      'remaining'       => 'Number',
      'unit_price'      => 'Number',
      'vat'             => 'Boolean',
      'currency_id'     => 'ForeignKey',
      'amount'          => 'Number',
      'effective_date'  => 'Text',
      'status'          => 'Number',
      'description'     => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
