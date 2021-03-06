<?php

/**
 * ItemAcquiredAttachment form base class.
 *
 * @method ItemAcquiredAttachment getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseItemAcquiredAttachmentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'task_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'token_id'           => new sfWidgetFormInputText(),
      'fleet_order_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FleetOrder'), 'add_empty' => true)),
      'item_name'          => new sfWidgetFormInputText(),
      'quantity'           => new sfWidgetFormInputText(),
      'attachment_purpose' => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'required' => false)),
      'token_id'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fleet_order_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FleetOrder'), 'required' => false)),
      'item_name'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'quantity'           => new sfValidatorNumber(array('required' => false)),
      'attachment_purpose' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'        => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item_acquired_attachment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItemAcquiredAttachment';
  }

}
