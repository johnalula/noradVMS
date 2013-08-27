<?php

/**
 * FleetOrder filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFleetOrderFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'assigned_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssignedVehicle'), 'add_empty' => true)),
      'token_id'             => new sfWidgetFormFilterInput(),
      'task_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'order_cost'           => new sfWidgetFormFilterInput(),
      'payment_mode_id'      => new sfWidgetFormFilterInput(),
      'effective_date'       => new sfWidgetFormFilterInput(),
      'number_of_passangers' => new sfWidgetFormFilterInput(),
      'departure_mileage'    => new sfWidgetFormFilterInput(),
      'return_mileage'       => new sfWidgetFormFilterInput(),
      'difference_mileage'   => new sfWidgetFormFilterInput(),
      'fuel_acquire_type_id' => new sfWidgetFormFilterInput(),
      'is_departed'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_returned'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fuel_amount'          => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'assigned_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AssignedVehicle'), 'column' => 'id')),
      'token_id'             => new sfValidatorPass(array('required' => false)),
      'task_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'order_cost'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'payment_mode_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'effective_date'       => new sfValidatorPass(array('required' => false)),
      'number_of_passangers' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departure_mileage'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'return_mileage'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'difference_mileage'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fuel_acquire_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_departed'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_returned'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fuel_amount'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'description'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fleet_order_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FleetOrder';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'assigned_id'          => 'ForeignKey',
      'token_id'             => 'Text',
      'task_id'              => 'ForeignKey',
      'order_cost'           => 'Number',
      'payment_mode_id'      => 'Number',
      'effective_date'       => 'Text',
      'number_of_passangers' => 'Number',
      'departure_mileage'    => 'Number',
      'return_mileage'       => 'Number',
      'difference_mileage'   => 'Number',
      'fuel_acquire_type_id' => 'Number',
      'is_departed'          => 'Boolean',
      'is_returned'          => 'Boolean',
      'fuel_amount'          => 'Number',
      'description'          => 'Text',
    );
  }
}
