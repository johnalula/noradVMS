<?php

/**
 * replacement actions.
 *
 * @package    noradVMS
 * @subpackage replacement
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class replacementActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->replacement_tasks = Doctrine_Core::getTable('ReplacementTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->replacement_task = Doctrine_Core::getTable('ReplacementTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->replacement_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ReplacementTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ReplacementTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($replacement_task = Doctrine_Core::getTable('ReplacementTask')->find(array($request->getParameter('id'))), sprintf('Object replacement_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReplacementTaskForm($replacement_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($replacement_task = Doctrine_Core::getTable('ReplacementTask')->find(array($request->getParameter('id'))), sprintf('Object replacement_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReplacementTaskForm($replacement_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($replacement_task = Doctrine_Core::getTable('ReplacementTask')->find(array($request->getParameter('id'))), sprintf('Object replacement_task does not exist (%s).', $request->getParameter('id')));
    $replacement_task->delete();

    $this->redirect('replacement/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $replacement_task = $form->save();

      $this->redirect('replacement/edit?id='.$replacement_task->getId());
    }
  }
}
