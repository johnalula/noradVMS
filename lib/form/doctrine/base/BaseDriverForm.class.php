<?php

/**
 * Driver form base class.
 *
 * @method Driver getObject() Returns the current form's model object
 *
 * @package    noradVMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDriverForm extends ParticipantForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('driver[%s]');
  }

  public function getModelName()
  {
    return 'Driver';
  }

}
