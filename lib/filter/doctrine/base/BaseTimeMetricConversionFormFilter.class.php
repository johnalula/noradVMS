<?php

/**
 * TimeMetricConversion filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTimeMetricConversionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'from_timemetric_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'to_timemetric_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TimeMetric'), 'add_empty' => true)),
      'rate'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'from_timemetric_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'to_timemetric_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TimeMetric'), 'column' => 'id')),
      'rate'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('time_metric_conversion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TimeMetricConversion';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'from_timemetric_id' => 'Number',
      'to_timemetric_id'   => 'ForeignKey',
      'rate'               => 'Number',
    );
  }
}
