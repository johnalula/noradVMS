<?php

/**
 * Unit filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUnitFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'metrictype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Metric'), 'add_empty' => true)),
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alias'         => new sfWidgetFormFilterInput(),
      'description'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'metrictype_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Metric'), 'column' => 'id')),
      'name'          => new sfValidatorPass(array('required' => false)),
      'alias'         => new sfValidatorPass(array('required' => false)),
      'description'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unit_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Unit';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'metrictype_id' => 'ForeignKey',
      'name'          => 'Text',
      'alias'         => 'Text',
      'description'   => 'Text',
    );
  }
}