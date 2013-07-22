<?php

/**
 * other actions.
 *
 * @package    noradVMS
 * @subpackage other
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class otherActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->others = Doctrine_Core::getTable('Other')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->other = Doctrine_Core::getTable('Other')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->other);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new OtherForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new OtherForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($other = Doctrine_Core::getTable('Other')->find(array($request->getParameter('id'))), sprintf('Object other does not exist (%s).', $request->getParameter('id')));
    $this->form = new OtherForm($other);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($other = Doctrine_Core::getTable('Other')->find(array($request->getParameter('id'))), sprintf('Object other does not exist (%s).', $request->getParameter('id')));
    $this->form = new OtherForm($other);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($other = Doctrine_Core::getTable('Other')->find(array($request->getParameter('id'))), sprintf('Object other does not exist (%s).', $request->getParameter('id')));
    $other->delete();

    $this->redirect('other/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $other = $form->save();

      $this->redirect('other/edit?id='.$other->getId());
    }
  }
}
