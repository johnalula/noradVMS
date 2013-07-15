<?php

/**
 * accident actions.
 *
 * @package    noradVMS
 * @subpackage accident
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class accidentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->accident_tasks = Doctrine_Core::getTable('accidentTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->accident_task = Doctrine_Core::getTable('accidentTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->accident_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new accidentTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new accidentTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($accident_task = Doctrine_Core::getTable('accidentTask')->find(array($request->getParameter('id'))), sprintf('Object accident_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new accidentTaskForm($accident_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($accident_task = Doctrine_Core::getTable('accidentTask')->find(array($request->getParameter('id'))), sprintf('Object accident_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new accidentTaskForm($accident_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($accident_task = Doctrine_Core::getTable('accidentTask')->find(array($request->getParameter('id'))), sprintf('Object accident_task does not exist (%s).', $request->getParameter('id')));
    $accident_task->delete();

    $this->redirect('accident/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $accident_task = $form->save();

      $this->redirect('accident/edit?id='.$accident_task->getId());
    }
  }
}
