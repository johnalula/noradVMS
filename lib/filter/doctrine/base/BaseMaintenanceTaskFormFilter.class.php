<?php

/**
 * MaintenanceTask filter form base class.
 *
 * @package    noradVMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMaintenanceTaskFormFilter extends TaskFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('maintenance_task_filters[%s]');
  }

  public function getModelName()
  {
    return 'MaintenanceTask';
  }
}
