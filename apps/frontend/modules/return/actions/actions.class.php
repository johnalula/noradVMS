<?php

/**
 * return actions.
 *
 * @package    noradVMS
 * @subpackage return
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class returnActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->return_tasks = Doctrine_Core::getTable('ReturnTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->return_task = Doctrine_Core::getTable('ReturnTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->return_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ReturnTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ReturnTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($return_task = Doctrine_Core::getTable('ReturnTask')->find(array($request->getParameter('id'))), sprintf('Object return_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReturnTaskForm($return_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($return_task = Doctrine_Core::getTable('ReturnTask')->find(array($request->getParameter('id'))), sprintf('Object return_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReturnTaskForm($return_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($return_task = Doctrine_Core::getTable('ReturnTask')->find(array($request->getParameter('id'))), sprintf('Object return_task does not exist (%s).', $request->getParameter('id')));
    $return_task->delete();

    $this->redirect('return/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $return_task = $form->save();

      $this->redirect('return/edit?id='.$return_task->getId());
    }
  }
}
