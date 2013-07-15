<?php

/**
 * ServiceAccident filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiceAccidentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'accident_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'accident_type' => new sfWidgetFormFilterInput(),
      'descriptioin'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'accident_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'accident_type' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'descriptioin'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('service_accident_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiceAccident';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'task_id'       => 'ForeignKey',
      'accident_date' => 'Date',
      'accident_type' => 'Number',
      'descriptioin'  => 'Text',
    );
  }
}
