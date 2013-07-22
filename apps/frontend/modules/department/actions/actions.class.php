<?php

/**
 * department actions.
 *
 * @package    noradVMS
 * @subpackage department
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class departmentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->departments = Doctrine_Core::getTable('Department')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->department = Doctrine_Core::getTable('Department')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->department);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DepartmentForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DepartmentForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($department = Doctrine_Core::getTable('Department')->find(array($request->getParameter('id'))), sprintf('Object department does not exist (%s).', $request->getParameter('id')));
    $this->form = new DepartmentForm($department);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($department = Doctrine_Core::getTable('Department')->find(array($request->getParameter('id'))), sprintf('Object department does not exist (%s).', $request->getParameter('id')));
    $this->form = new DepartmentForm($department);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($department = Doctrine_Core::getTable('Department')->find(array($request->getParameter('id'))), sprintf('Object department does not exist (%s).', $request->getParameter('id')));
    $department->delete();

    $this->redirect('department/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $department = $form->save();

      $this->redirect('department/edit?id='.$department->getId());
    }
  }
}
