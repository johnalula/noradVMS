<?php

/**
 * employee actions.
 *
 * @package    noradVMS
 * @subpackage employee
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class employeeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->employees = Doctrine_Core::getTable('Employee')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->employee = Doctrine_Core::getTable('Employee')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->employee);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EmployeeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EmployeeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($employee = Doctrine_Core::getTable('Employee')->find(array($request->getParameter('id'))), sprintf('Object employee does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmployeeForm($employee);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($employee = Doctrine_Core::getTable('Employee')->find(array($request->getParameter('id'))), sprintf('Object employee does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmployeeForm($employee);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($employee = Doctrine_Core::getTable('Employee')->find(array($request->getParameter('id'))), sprintf('Object employee does not exist (%s).', $request->getParameter('id')));
    $employee->delete();

    $this->redirect('employee/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $employee = $form->save();

      $this->redirect('employee/edit?id='.$employee->getId());
    }
  }
}
