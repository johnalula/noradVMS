<?php

/**
 * ReturnTask filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReturnTaskFormFilter extends TaskFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('return_task_filters[%s]');
  }

  public function getModelName()
  {
    return 'ReturnTask';
  }
}