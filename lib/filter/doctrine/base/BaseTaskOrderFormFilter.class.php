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
      'task_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'pb_id'             => new sfWidgetFormFilterInput(),
      'acquired_for'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'budget_source'     => new sfWidgetFormFilterInput(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'category_group_id' => new sfWidgetFormFilterInput(),
      'clss'              => new sfWidgetFormFilterInput(),
      'unit_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'planned_quantity'  => new sfWidgetFormFilterInput(),
      'actual_quantity'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'remaining'         => new sfWidgetFormFilterInput(),
      'unit_price'        => new sfWidgetFormFilterInput(),
      'vat'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'currency_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Currency'), 'add_empty' => true)),
      'amount'            => new sfWidgetFormFilterInput(),
      'effective_date'    => new sfWidgetFormFilterInput(),
      'status'            => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'sealed_count'      => new sfWidgetFormFilterInput(),
      'used_count'        => new sfWidgetFormFilterInput(),
      'concrete_count'    => new sfWidgetFormFilterInput(),
      'nasty_count'       => new sfWidgetFormFilterInput(),
      'disposed_count'    => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'task_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'pb_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'acquired_for'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Participant'), 'column' => 'id')),
      'budget_source'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'category_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'category_group_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'clss'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unit_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unit'), 'column' => 'id')),
      'planned_quantity'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'actual_quantity'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'remaining'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unit_price'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vat'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'currency_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Currency'), 'column' => 'id')),
      'amount'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'effective_date'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'       => new sfValidatorPass(array('required' => false)),
      'sealed_count'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'used_count'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'concrete_count'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nasty_count'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'disposed_count'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                => 'Number',
      'task_id'           => 'ForeignKey',
      'pb_id'             => 'Number',
      'acquired_for'      => 'ForeignKey',
      'budget_source'     => 'Number',
      'category_id'       => 'ForeignKey',
      'category_group_id' => 'Number',
      'clss'              => 'Number',
      'unit_id'           => 'ForeignKey',
      'planned_quantity'  => 'Number',
      'actual_quantity'   => 'Number',
      'remaining'         => 'Number',
      'unit_price'        => 'Number',
      'vat'               => 'Boolean',
      'currency_id'       => 'ForeignKey',
      'amount'            => 'Number',
      'effective_date'    => 'Number',
      'status'            => 'Number',
      'description'       => 'Text',
      'sealed_count'      => 'Number',
      'used_count'        => 'Number',
      'concrete_count'    => 'Number',
      'nasty_count'       => 'Number',
      'disposed_count'    => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
