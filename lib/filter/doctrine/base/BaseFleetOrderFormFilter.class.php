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
      'vehicle_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'token_id'             => new sfWidgetFormFilterInput(),
      'task_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'order_cost'           => new sfWidgetFormFilterInput(),
      'payment_mode_id'      => new sfWidgetFormFilterInput(),
      'effective_date'       => new sfWidgetFormFilterInput(),
      'number_of_passangers' => new sfWidgetFormFilterInput(),
      'departure_mileage'    => new sfWidgetFormFilterInput(),
      'return_mileage'       => new sfWidgetFormFilterInput(),
      'difference_mileag'    => new sfWidgetFormFilterInput(),
      'fuel_acquire_type_id' => new sfWidgetFormFilterInput(),
      'fuel_amount'          => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'vehicle_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'token_id'             => new sfValidatorPass(array('required' => false)),
      'task_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'order_cost'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'payment_mode_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'effective_date'       => new sfValidatorPass(array('required' => false)),
      'number_of_passangers' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departure_mileage'    => new sfValidatorPass(array('required' => false)),
      'return_mileage'       => new sfValidatorPass(array('required' => false)),
      'difference_mileag'    => new sfValidatorPass(array('required' => false)),
      'fuel_acquire_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'vehicle_id'           => 'ForeignKey',
      'token_id'             => 'Text',
      'task_id'              => 'ForeignKey',
      'order_cost'           => 'Number',
      'payment_mode_id'      => 'Number',
      'effective_date'       => 'Text',
      'number_of_passangers' => 'Number',
      'departure_mileage'    => 'Text',
      'return_mileage'       => 'Text',
      'difference_mileag'    => 'Text',
      'fuel_acquire_type_id' => 'Number',
      'fuel_amount'          => 'Number',
      'description'          => 'Text',
    );
  }
}
