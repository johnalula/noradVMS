<?php

/**
 * Driver form base class.
 *
 * @method Driver getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDriverForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'token_id'        => new sfWidgetFormInputText(),
      'employee_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'add_empty' => true)),
      'license_type'    => new sfWidgetFormInputText(),
      'work_experience' => new sfWidgetFormInputText(),
      'desctiption'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'employee_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Participant'), 'required' => false)),
      'license_type'    => new sfValidatorInteger(array('required' => false)),
      'work_experience' => new sfValidatorInteger(array('required' => false)),
      'desctiption'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('driver[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Driver';
  }

}
