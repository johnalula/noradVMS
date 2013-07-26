<?php

/**
 * VehicleCheckupSetting filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehicleCheckupSettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'vehicle_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'check_up_name' => new sfWidgetFormFilterInput(),
      'pass_value'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fail_value'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'na_value'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'vehicle_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'check_up_name' => new sfValidatorPass(array('required' => false)),
      'pass_value'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fail_value'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'na_value'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('vehicle_checkup_setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehicleCheckupSetting';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'vehicle_id'    => 'ForeignKey',
      'check_up_name' => 'Text',
      'pass_value'    => 'Boolean',
      'fail_value'    => 'Boolean',
      'na_value'      => 'Boolean',
    );
  }
}
