<?php

/**
 * assignment actions.
 *
 * @package    noradVMS
 * @subpackage assignment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class assignmentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->assignment_tasks = Doctrine_Core::getTable('AssignmentTask')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->assignment_task = Doctrine_Core::getTable('AssignmentTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->assignment_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AssignmentTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AssignmentTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($assignment_task = Doctrine_Core::getTable('AssignmentTask')->find(array($request->getParameter('id'))), sprintf('Object assignment_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new AssignmentTaskForm($assignment_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($assignment_task = Doctrine_Core::getTable('AssignmentTask')->find(array($request->getParameter('id'))), sprintf('Object assignment_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new AssignmentTaskForm($assignment_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($assignment_task = Doctrine_Core::getTable('AssignmentTask')->find(array($request->getParameter('id'))), sprintf('Object assignment_task does not exist (%s).', $request->getParameter('id')));
    $assignment_task->delete();

    $this->redirect('assignment/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $assignment_task = $form->save();

      $this->redirect('assignment/edit?id='.$assignment_task->getId());
    }
  }
}
