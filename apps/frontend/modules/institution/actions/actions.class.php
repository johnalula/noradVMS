<?php

/**
 * institution actions.
 *
 * @package    noradVMS
 * @subpackage institution
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class institutionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->institutions = Doctrine_Core::getTable('Institution')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->institution = Doctrine_Core::getTable('Institution')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->institution);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new InstitutionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new InstitutionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($institution = Doctrine_Core::getTable('Institution')->find(array($request->getParameter('id'))), sprintf('Object institution does not exist (%s).', $request->getParameter('id')));
    $this->form = new InstitutionForm($institution);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($institution = Doctrine_Core::getTable('Institution')->find(array($request->getParameter('id'))), sprintf('Object institution does not exist (%s).', $request->getParameter('id')));
    $this->form = new InstitutionForm($institution);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($institution = Doctrine_Core::getTable('Institution')->find(array($request->getParameter('id'))), sprintf('Object institution does not exist (%s).', $request->getParameter('id')));
    $institution->delete();

    $this->redirect('institution/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $institution = $form->save();

      $this->redirect('institution/edit?id='.$institution->getId());
    }
  }
}
