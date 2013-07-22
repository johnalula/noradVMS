<?php

/**
 * group actions.
 *
 * @package    noradVMS
 * @subpackage group
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class groupActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->user_groups = Doctrine_Core::getTable('UserGroup')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->user_group = Doctrine_Core::getTable('UserGroup')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->user_group);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UserGroupForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UserGroupForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($user_group = Doctrine_Core::getTable('UserGroup')->find(array($request->getParameter('id'))), sprintf('Object user_group does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserGroupForm($user_group);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($user_group = Doctrine_Core::getTable('UserGroup')->find(array($request->getParameter('id'))), sprintf('Object user_group does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserGroupForm($user_group);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($user_group = Doctrine_Core::getTable('UserGroup')->find(array($request->getParameter('id'))), sprintf('Object user_group does not exist (%s).', $request->getParameter('id')));
    $user_group->delete();

    $this->redirect('group/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $user_group = $form->save();

      $this->redirect('group/edit?id='.$user_group->getId());
    }
  }
}
