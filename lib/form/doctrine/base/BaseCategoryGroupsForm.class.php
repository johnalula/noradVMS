<?php

/**
 * CategoryGroups form base class.
 *
 * @method CategoryGroups getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCategoryGroupsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'characterization_id' => new sfWidgetFormInputText(),
      'category_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'pin_applies'         => new sfWidgetFormInputCheckbox(),
      'is_sparepart'        => new sfWidgetFormInputCheckbox(),
      'is_document'         => new sfWidgetFormInputCheckbox(),
      'grp'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'characterization_id' => new sfValidatorInteger(array('required' => false)),
      'category_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'pin_applies'         => new sfValidatorBoolean(array('required' => false)),
      'is_sparepart'        => new sfValidatorBoolean(array('required' => false)),
      'is_document'         => new sfValidatorBoolean(array('required' => false)),
      'grp'                 => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('category_groups[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CategoryGroups';
  }

}
