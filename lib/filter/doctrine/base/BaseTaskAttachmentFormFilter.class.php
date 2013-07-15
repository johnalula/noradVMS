<?php

/**
 * TaskAttachment filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskAttachmentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'certificate_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CertificateType'), 'add_empty' => true)),
      'reference_number'    => new sfWidgetFormFilterInput(),
      'num_pages'           => new sfWidgetFormFilterInput(),
      'folder_stored'       => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'task_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'certificate_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CertificateType'), 'column' => 'id')),
      'reference_number'    => new sfValidatorPass(array('required' => false)),
      'num_pages'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'folder_stored'       => new sfValidatorPass(array('required' => false)),
      'description'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('task_attachment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskAttachment';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'task_id'             => 'ForeignKey',
      'certificate_type_id' => 'ForeignKey',
      'reference_number'    => 'Text',
      'num_pages'           => 'Number',
      'folder_stored'       => 'Text',
      'description'         => 'Text',
    );
  }
}
