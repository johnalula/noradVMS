<?php

/**
 * college actions.
 *
 * @package    noradVMS
 * @subpackage college
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class collegeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->colleges = Doctrine_Core::getTable('College')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->college = Doctrine_Core::getTable('College')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->college);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CollegeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CollegeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($college = Doctrine_Core::getTable('College')->find(array($request->getParameter('id'))), sprintf('Object college does not exist (%s).', $request->getParameter('id')));
    $this->form = new CollegeForm($college);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($college = Doctrine_Core::getTable('College')->find(array($request->getParameter('id'))), sprintf('Object college does not exist (%s).', $request->getParameter('id')));
    $this->form = new CollegeForm($college);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($college = Doctrine_Core::getTable('College')->find(array($request->getParameter('id'))), sprintf('Object college does not exist (%s).', $request->getParameter('id')));
    $college->delete();

    $this->redirect('college/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $college = $form->save();

      $this->redirect('college/edit?id='.$college->getId());
    }
  }
}
