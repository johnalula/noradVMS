<?php

/**
 * RegistrationTask form base class.
 *
 * @method RegistrationTask getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegistrationTaskForm extends TaskForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('registration_task[%s]');
  }

  public function getModelName()
  {
    return 'RegistrationTask';
  }

}
