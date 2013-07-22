<?php

/**
 * fleet actions.
 *
 * @package    noradVMS
 * @subpackage fleet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fleetActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->fleet_service_tasks = Doctrine_Core::getTable('FleetServiceTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->fleet_service_task = Doctrine_Core::getTable('FleetServiceTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->fleet_service_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FleetServiceTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FleetServiceTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($fleet_service_task = Doctrine_Core::getTable('FleetServiceTask')->find(array($request->getParameter('id'))), sprintf('Object fleet_service_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new FleetServiceTaskForm($fleet_service_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($fleet_service_task = Doctrine_Core::getTable('FleetServiceTask')->find(array($request->getParameter('id'))), sprintf('Object fleet_service_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new FleetServiceTaskForm($fleet_service_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($fleet_service_task = Doctrine_Core::getTable('FleetServiceTask')->find(array($request->getParameter('id'))), sprintf('Object fleet_service_task does not exist (%s).', $request->getParameter('id')));
    $fleet_service_task->delete();

    $this->redirect('fleet/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $fleet_service_task = $form->save();

      $this->redirect('fleet/edit?id='.$fleet_service_task->getId());
    }
  }
}
