<?php

/**
 * TaskAttachment form base class.
 *
 * @method TaskAttachment getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskAttachmentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'task_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => false)),
      'certificate_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CertificateType'), 'add_empty' => true)),
      'reference_number'    => new sfWidgetFormInputText(),
      'num_pages'           => new sfWidgetFormInputText(),
      'folder_stored'       => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'))),
      'certificate_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CertificateType'), 'required' => false)),
      'reference_number'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'num_pages'           => new sfValidatorInteger(array('required' => false)),
      'folder_stored'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_attachment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskAttachment';
  }

}
