<?php

/**
 * Unit form base class.
 *
 * @method Unit getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUnitForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'metrictype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Metric'), 'add_empty' => true)),
      'name'          => new sfWidgetFormInputText(),
      'alias'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'metrictype_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Metric'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'alias'         => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'description'   => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('unit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Unit';
  }

}