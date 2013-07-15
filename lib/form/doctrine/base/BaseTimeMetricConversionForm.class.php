<?php

/**
 * TimeMetricConversion form base class.
 *
 * @method TimeMetricConversion getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTimeMetricConversionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'from_timemetric_id' => new sfWidgetFormInputText(),
      'to_timemetric_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TimeMetric'), 'add_empty' => false)),
      'rate'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'from_timemetric_id' => new sfValidatorInteger(),
      'to_timemetric_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TimeMetric'))),
      'rate'               => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('time_metric_conversion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TimeMetricConversion';
  }

}
