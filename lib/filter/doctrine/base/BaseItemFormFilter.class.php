<?php

/**
 * Item filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'             => new sfWidgetFormFilterInput(),
      'task_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'task_order_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskOrder'), 'add_empty' => true)),
      'category_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'clss'                 => new sfWidgetFormFilterInput(),
      'unit_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'quantity'             => new sfWidgetFormFilterInput(),
      'used_quantity'        => new sfWidgetFormFilterInput(),
      'current_quantity'     => new sfWidgetFormFilterInput(),
      'serial_no'            => new sfWidgetFormFilterInput(),
      'old_pin'              => new sfWidgetFormFilterInput(),
      'new_pin'              => new sfWidgetFormFilterInput(),
      'pin_num'              => new sfWidgetFormFilterInput(),
      'is_present'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'effective_date'       => new sfWidgetFormFilterInput(),
      'status'               => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
      'type'                 => new sfWidgetFormFilterInput(),
      'plate_number'         => new sfWidgetFormFilterInput(),
      'plate_code'           => new sfWidgetFormFilterInput(),
      'plate_code_no'        => new sfWidgetFormFilterInput(),
      'initial_mileage'      => new sfWidgetFormFilterInput(),
      'current_mileage'      => new sfWidgetFormFilterInput(),
      'traveled_km'          => new sfWidgetFormFilterInput(),
      'vehicle_type_id'      => new sfWidgetFormFilterInput(),
      'vehicle_make'         => new sfWidgetFormFilterInput(),
      'litter_per_km'        => new sfWidgetFormFilterInput(),
      'seating_capacity'     => new sfWidgetFormFilterInput(),
      'engine_number'        => new sfWidgetFormFilterInput(),
      'chesis_number'        => new sfWidgetFormFilterInput(),
      'vehicle_model'        => new sfWidgetFormFilterInput(),
      'vehicle_color'        => new sfWidgetFormFilterInput(),
      'vehicle_weight'       => new sfWidgetFormFilterInput(),
      'service_type_id'      => new sfWidgetFormFilterInput(),
      'fuel_type_id'         => new sfWidgetFormFilterInput(),
      'purchased_date'       => new sfWidgetFormFilterInput(),
      'purchased_type'       => new sfWidgetFormFilterInput(),
      'service_year'         => new sfWidgetFormFilterInput(),
      'vehicle_year'         => new sfWidgetFormFilterInput(),
      'no_of_doors'          => new sfWidgetFormFilterInput(),
      'checkup_period_id'    => new sfWidgetFormFilterInput(),
      'vehicle_status'       => new sfWidgetFormFilterInput(),
      'fuel_setting_id'      => new sfWidgetFormFilterInput(),
      'is_assigned'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'spare_Identification' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'token_id'             => new sfValidatorPass(array('required' => false)),
      'task_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'task_order_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskOrder'), 'column' => 'id')),
      'category_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'clss'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unit_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unit'), 'column' => 'id')),
      'quantity'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'used_quantity'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'current_quantity'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'serial_no'            => new sfValidatorPass(array('required' => false)),
      'old_pin'              => new sfValidatorPass(array('required' => false)),
      'new_pin'              => new sfValidatorPass(array('required' => false)),
      'pin_num'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_present'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'effective_date'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'          => new sfValidatorPass(array('required' => false)),
      'type'                 => new sfValidatorPass(array('required' => false)),
      'plate_number'         => new sfValidatorPass(array('required' => false)),
      'plate_code'           => new sfValidatorPass(array('required' => false)),
      'plate_code_no'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'initial_mileage'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'current_mileage'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'traveled_km'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vehicle_type_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vehicle_make'         => new sfValidatorPass(array('required' => false)),
      'litter_per_km'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'seating_capacity'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'engine_number'        => new sfValidatorPass(array('required' => false)),
      'chesis_number'        => new sfValidatorPass(array('required' => false)),
      'vehicle_model'        => new sfValidatorPass(array('required' => false)),
      'vehicle_color'        => new sfValidatorPass(array('required' => false)),
      'vehicle_weight'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'service_type_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fuel_type_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'purchased_date'       => new sfValidatorPass(array('required' => false)),
      'purchased_type'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'service_year'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vehicle_year'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'no_of_doors'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'checkup_period_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vehicle_status'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fuel_setting_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_assigned'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'spare_Identification' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'token_id'             => 'Text',
      'task_id'              => 'ForeignKey',
      'task_order_id'        => 'ForeignKey',
      'category_id'          => 'ForeignKey',
      'clss'                 => 'Number',
      'unit_id'              => 'ForeignKey',
      'quantity'             => 'Number',
      'used_quantity'        => 'Number',
      'current_quantity'     => 'Number',
      'serial_no'            => 'Text',
      'old_pin'              => 'Text',
      'new_pin'              => 'Text',
      'pin_num'              => 'Number',
      'is_present'           => 'Boolean',
      'effective_date'       => 'Number',
      'status'               => 'Number',
      'description'          => 'Text',
      'type'                 => 'Text',
      'plate_number'         => 'Text',
      'plate_code'           => 'Text',
      'plate_code_no'        => 'Number',
      'initial_mileage'      => 'Number',
      'current_mileage'      => 'Number',
      'traveled_km'          => 'Number',
      'vehicle_type_id'      => 'Number',
      'vehicle_make'         => 'Text',
      'litter_per_km'        => 'Number',
      'seating_capacity'     => 'Number',
      'engine_number'        => 'Text',
      'chesis_number'        => 'Text',
      'vehicle_model'        => 'Text',
      'vehicle_color'        => 'Text',
      'vehicle_weight'       => 'Number',
      'service_type_id'      => 'Number',
      'fuel_type_id'         => 'Number',
      'purchased_date'       => 'Text',
      'purchased_type'       => 'Number',
      'service_year'         => 'Number',
      'vehicle_year'         => 'Number',
      'no_of_doors'          => 'Number',
      'checkup_period_id'    => 'Number',
      'vehicle_status'       => 'Number',
      'fuel_setting_id'      => 'Number',
      'is_assigned'          => 'Boolean',
      'spare_Identification' => 'Text',
    );
  }
}
