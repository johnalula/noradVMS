<?php

/**
 * maintenance actions.
 *
 * @package    noradVMS
 * @subpackage maintenance
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class maintenanceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->maintenances = Doctrine_Core::getTable('maintenance')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->maintenance = Doctrine_Core::getTable('maintenance')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->maintenance);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new maintenanceForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new maintenanceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($maintenance = Doctrine_Core::getTable('maintenance')->find(array($request->getParameter('id'))), sprintf('Object maintenance does not exist (%s).', $request->getParameter('id')));
    $this->form = new maintenanceForm($maintenance);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($maintenance = Doctrine_Core::getTable('maintenance')->find(array($request->getParameter('id'))), sprintf('Object maintenance does not exist (%s).', $request->getParameter('id')));
    $this->form = new maintenanceForm($maintenance);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($maintenance = Doctrine_Core::getTable('maintenance')->find(array($request->getParameter('id'))), sprintf('Object maintenance does not exist (%s).', $request->getParameter('id')));
    $maintenance->delete();

    $this->redirect('maintenance/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $maintenance = $form->save();

      $this->redirect('maintenance/edit?id='.$maintenance->getId());
    }
  }
}
