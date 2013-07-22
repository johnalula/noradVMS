<?php

/**
 * CategoryGroups filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryGroupsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'characterization_id' => new sfWidgetFormFilterInput(),
      'category_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'pin_applies'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_sparepart'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_document'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'grp'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'characterization_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'category_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'pin_applies'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_sparepart'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_document'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'grp'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('category_groups_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CategoryGroups';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'characterization_id' => 'Number',
      'category_id'         => 'ForeignKey',
      'pin_applies'         => 'Boolean',
      'is_sparepart'        => 'Boolean',
      'is_document'         => 'Boolean',
      'grp'                 => 'Number',
    );
  }
}
