<?php

/**
 * VehicleInsuranceSetting filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehicleInsuranceSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'vehicle_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'insurer_name'           => new sfWidgetFormFilterInput(),
      'insurance_number'       => new sfWidgetFormFilterInput(),
      'insurance_type'         => new sfWidgetFormFilterInput(),
      'insurance_period'       => new sfWidgetFormFilterInput(),
      'insurance_expiry_date'  => new sfWidgetFormFilterInput(),
      'last_insurance_renewal' => new sfWidgetFormFilterInput(),
      'insurance_status'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'vehicle_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'insurer_name'           => new sfValidatorPass(array('required' => false)),
      'insurance_number'       => new sfValidatorPass(array('required' => false)),
      'insurance_type'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'insurance_period'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'insurance_expiry_date'  => new sfValidatorPass(array('required' => false)),
      'last_insurance_renewal' => new sfValidatorPass(array('required' => false)),
      'insurance_status'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('vehicle_insurance_setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleInsuranceSetting';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'vehicle_id'             => 'ForeignKey',
      'insurer_name'           => 'Text',
      'insurance_number'       => 'Text',
      'insurance_type'         => 'Number',
      'insurance_period'       => 'Number',
      'insurance_expiry_date'  => 'Text',
      'last_insurance_renewal' => 'Text',
      'insurance_status'       => 'Boolean',
    );
  }
}
