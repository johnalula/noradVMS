<?php

/**
 * ReturnTask form base class.
 *
 * @method ReturnTask getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReturnTaskForm extends TaskForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('return_task[%s]');
  }

  public function getModelName()
  {
    return 'ReturnTask';
  }

}
