<?php

/**
 * transfer actions.
 *
 * @package    noradVMS
 * @subpackage transfer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class transferActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->transfer_tasks = Doctrine_Core::getTable('TransferTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->transfer_task = Doctrine_Core::getTable('TransferTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->transfer_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TransferTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TransferTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($transfer_task = Doctrine_Core::getTable('TransferTask')->find(array($request->getParameter('id'))), sprintf('Object transfer_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new TransferTaskForm($transfer_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($transfer_task = Doctrine_Core::getTable('TransferTask')->find(array($request->getParameter('id'))), sprintf('Object transfer_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new TransferTaskForm($transfer_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($transfer_task = Doctrine_Core::getTable('TransferTask')->find(array($request->getParameter('id'))), sprintf('Object transfer_task does not exist (%s).', $request->getParameter('id')));
    $transfer_task->delete();

    $this->redirect('transfer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $transfer_task = $form->save();

      $this->redirect('transfer/edit?id='.$transfer_task->getId());
    }
  }
}
