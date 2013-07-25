<?php

/**
 * TaskAccident filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskAccidentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'vehicle_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehicle'), 'add_empty' => true)),
      'accident_type_id'  => new sfWidgetFormFilterInput(),
      'accident_location' => new sfWidgetFormFilterInput(),
      'accident_date'     => new sfWidgetFormFilterInput(),
      'accident_time'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'expense_required'  => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'vehicle_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehicle'), 'column' => 'id')),
      'accident_type_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'accident_location' => new sfValidatorPass(array('required' => false)),
      'accident_date'     => new sfValidatorPass(array('required' => false)),
      'accident_time'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'expense_required'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'description'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_accident_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskAccident';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'task_id'           => 'ForeignKey',
      'vehicle_id'        => 'ForeignKey',
      'accident_type_id'  => 'Number',
      'accident_location' => 'Text',
      'accident_date'     => 'Text',
      'accident_time'     => 'Date',
      'expense_required'  => 'Number',
      'description'       => 'Text',
    );
  }
}
