<?php

/**
 * permission actions.
 *
 * @package    noradVMS
 * @subpackage permission
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class permissionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->permissions = Doctrine_Core::getTable('Permission')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->permission = Doctrine_Core::getTable('Permission')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->permission);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PermissionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PermissionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($permission = Doctrine_Core::getTable('Permission')->find(array($request->getParameter('id'))), sprintf('Object permission does not exist (%s).', $request->getParameter('id')));
    $this->form = new PermissionForm($permission);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($permission = Doctrine_Core::getTable('Permission')->find(array($request->getParameter('id'))), sprintf('Object permission does not exist (%s).', $request->getParameter('id')));
    $this->form = new PermissionForm($permission);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($permission = Doctrine_Core::getTable('Permission')->find(array($request->getParameter('id'))), sprintf('Object permission does not exist (%s).', $request->getParameter('id')));
    $permission->delete();

    $this->redirect('permission/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $permission = $form->save();

      $this->redirect('permission/edit?id='.$permission->getId());
    }
  }
}
