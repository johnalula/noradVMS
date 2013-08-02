<?php

/**
 * registration actions.
 *
 * @package    noradVMS
 * @subpackage registration
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registrationActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		
    $this->tasks = RegistrationTaskTable::processSelection ($status=null, $keyword=null, $offset=0, $limit=10);
    $this->candidates = RegistrationTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
  }

  public function executeCreateTask(sfWebRequest $request)
  {
		//$mode = $request->getParameter('mode');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		
		$task = RegistrationTaskTable::processCreate ( $date, $description, $ref_no );
		
		$this->redirect('registration/view?task_id='.$task->id.'&token_id='.$task->token_id);
    
  }
  public function executeUpdateTask(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		
		$flag = RegistrationTaskTable::processUpdate ( $_id, $token_id, $date, $description, $ref_no );
		
		return $flag; 
    
  }
  
  public function executeDeleteTask(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		
		$flag = RegistrationTaskTable::processUpdate ( $_id, $token_id, $date, $description, $ref_no );
		
		return $flag; 
  }
  
  public function executeView(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		
		//$this->getUser()->setFlash('saved.success', 0);
		
		$this->taskObj = RegistrationTaskTable::processObject ( $_id, $token_id );
    
  }
  
  public function executeOrder(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		
		$this->units = UnitTable::processSelection ( $offset, $limit );
		$this->currencys = CurrencyTable::processSelection ( $offset, $limit );
		
		$this->task_orders = RegistrationTaskTable::processTaskOrderSelection ($task_id, $token_id, $status=null, $keyword=null, $offset=0, $limit=10);
		$this->candidates = RegistrationTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
  }
  
  public function executeCreateTaskOrder(sfWebRequest $request)
  {
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$cat_id = $request->getParameter('cadidate_id');
		$class_id = PropertyClassCore::$VEHICLE;
		$unit_id = 1;
		$quantity = $request->getParameter('quantity');
		$unit_price = 5000;
		$vat = 1;
		$currency_id = 1;
		$amount = $unit_price * $quantity;
		$date = date('Y-m-d', time());
		$status = TaskCore::$ACTIVE;
		$description = 'task order';
		
		$flag = RegistrationTaskTable::processCreateTaskOrder ($task_id, $token_id, $cat_id, $class_id, $unit_id, $quantity, $unit_price, $vat, $currency_id, $amount, $date, $status, $description );
		
		return $flag;
  }
  
  public function executeDetail(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
	
	 $this->task_orders = TaskOrderTable::processSelection ($status=null, $keyword=null, $offset=0, $limit=10);
    $this->candidates = RegistrationTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
  }
  
  
  

  public function executeShow(sfWebRequest $request)
  {
    $this->registration_task = Doctrine_Core::getTable('RegistrationTask')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->registration_task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RegistrationTaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RegistrationTaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($registration_task = Doctrine_Core::getTable('RegistrationTask')->find(array($request->getParameter('id'))), sprintf('Object registration_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegistrationTaskForm($registration_task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($registration_task = Doctrine_Core::getTable('RegistrationTask')->find(array($request->getParameter('id'))), sprintf('Object registration_task does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegistrationTaskForm($registration_task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($registration_task = Doctrine_Core::getTable('RegistrationTask')->find(array($request->getParameter('id'))), sprintf('Object registration_task does not exist (%s).', $request->getParameter('id')));
    $registration_task->delete();

    $this->redirect('registration/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $registration_task = $form->save();

      $this->redirect('registration/edit?id='.$registration_task->getId());
    }
  }
}
