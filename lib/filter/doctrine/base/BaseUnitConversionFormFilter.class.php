<?php

/**
 * UnitConversion filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUnitConversionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'from_unit_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Unit'), 'add_empty' => true)),
      'to_unit_id'   => new sfWidgetFormFilterInput(),
      'rate'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'from_unit_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Unit'), 'column' => 'id')),
      'to_unit_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rate'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unit_conversion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnitConversion';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'from_unit_id' => 'ForeignKey',
      'to_unit_id'   => 'Number',
      'rate'         => 'Text',
    );
  }
}
