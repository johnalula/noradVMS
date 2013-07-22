<?php

/**
 * ItemAcquiredAttachment filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseItemAcquiredAttachmentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'item_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Item'), 'add_empty' => true)),
      'item_name'          => new sfWidgetFormFilterInput(),
      'attachment_purpose' => new sfWidgetFormFilterInput(),
      'description'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'item_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Item'), 'column' => 'id')),
      'item_name'          => new sfValidatorPass(array('required' => false)),
      'attachment_purpose' => new sfValidatorPass(array('required' => false)),
      'description'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item_acquired_attachment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItemAcquiredAttachment';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'task_id'            => 'ForeignKey',
      'item_id'            => 'ForeignKey',
      'item_name'          => 'Text',
      'attachment_purpose' => 'Text',
      'description'        => 'Text',
    );
  }
}
