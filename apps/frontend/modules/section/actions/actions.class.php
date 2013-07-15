<?php

/**
 * section actions.
 *
 * @package    noradVMS
 * @subpackage section
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sectionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sections = Doctrine_Core::getTable('Section')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->section = Doctrine_Core::getTable('Section')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->section);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SectionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SectionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($section = Doctrine_Core::getTable('Section')->find(array($request->getParameter('id'))), sprintf('Object section does not exist (%s).', $request->getParameter('id')));
    $this->form = new SectionForm($section);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($section = Doctrine_Core::getTable('Section')->find(array($request->getParameter('id'))), sprintf('Object section does not exist (%s).', $request->getParameter('id')));
    $this->form = new SectionForm($section);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($section = Doctrine_Core::getTable('Section')->find(array($request->getParameter('id'))), sprintf('Object section does not exist (%s).', $request->getParameter('id')));
    $section->delete();

    $this->redirect('section/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $section = $form->save();

      $this->redirect('section/edit?id='.$section->getId());
    }
  }
}
