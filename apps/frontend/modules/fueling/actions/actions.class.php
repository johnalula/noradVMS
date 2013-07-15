<?php

/**
 * fueling actions.
 *
 * @package    noradVMS
 * @subpackage fueling
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fuelingActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->fueling_tasks = Doctrine_Core::getTable('FuelingTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->fueling_task = Doctrine_Core::getTable('FuelingTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->fueling_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FuelingTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FuelingTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($fueling_task = Doctrine_Core::getTable('FuelingTask')->find(array($request->getParameter('id'))), sprintf('Object fueling_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new FuelingTaskForm($fueling_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($fueling_task = Doctrine_Core::getTable('FuelingTask')->find(array($request->getParameter('id'))), sprintf('Object fueling_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new FuelingTaskForm($fueling_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($fueling_task = Doctrine_Core::getTable('FuelingTask')->find(array($request->getParameter('id'))), sprintf('Object fueling_task does not exist (%s).', $request->getParameter('id')));
    $fueling_task->delete();

    $this->redirect('fueling/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $fueling_task = $form->save();

      $this->redirect('fueling/edit?id='.$fueling_task->getId());
    }
  }
}
