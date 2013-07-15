<?php

/**
 * ServiceAccident form base class.
 *
 * @method ServiceAccident getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiceAccidentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'task_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'accident_date' => new sfWidgetFormDate(),
      'accident_type' => new sfWidgetFormInputText(),
      'descriptioin'  => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'accident_date' => new sfValidatorDate(array('required' => false)),
      'accident_type' => new sfValidatorInteger(array('required' => false)),
      'descriptioin'  => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('service_accident[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiceAccident';
  }

}
