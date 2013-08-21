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
		
    $this->tasks = RegistrationTaskTable::processSelection ($status, $keyword, $offset, $limit);
    $this->candidates = RegistrationTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
  }

  public function executeCreateTask(sfWebRequest $request)
  {
		//$mode = $request->getParameter('mode');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		$pID = $this->getUser()->getAttribute('PID');
		
		$task = RegistrationTaskTable::processCreate ( $date, $description, $ref_no, $pID );
		
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
  
  public function executeUpdateRegistrationVehicle(sfWebRequest $request)
  {	  
		$vehicle_id = $request->getParameter('vehicle_id');
		$token_id = $request->getParameter('token_id');
		$plate_code = $request->getParameter('plate_code');
		$plate_no = $request->getParameter('plate_no');
		$plate_code_no = $request->getParameter('plate_code_no');
		$vehicle_type = intval($request->getParameter('vehicle_type'));
		$vehicle_make = $request->getParameter('vehicle_make');
		$vehicle_model = $request->getParameter('vehicle_model');
		$vehicle_color = $request->getParameter('vehicle_color');
		$vehicle_weight = $request->getParameter('vehicle_weight');
		$vehicle_year = $request->getParameter('vehicle_year'); 
		$service_type = intval($request->getParameter('service_type')); 
		$fuel_type = intval($request->getParameter('fuel_type')); 
		$purchased_date = $request->getParameter('purchased_date'); 
		$purchased_type = intval($request->getParameter('purchased_type')); 
		$serial_no = $request->getParameter('serial_no'); 
		$pin_no = $request->getParameter('pin_no'); 
		$purchased_mileage = $request->getParameter('purchased_mileage'); 
		$current_mileage = $request->getParameter('current_mileage'); 
		$seat_capacity = $request->getParameter('seat_capacity'); 
		$doors = $request->getParameter('doors'); 
		$liter = $request->getParameter('liter'); 
		$engine_no = $request->getParameter('engine_no'); 
		$chesis_no = $request->getParameter('chesis_no'); 
		$description = $request->getParameter('description');
		
		$flag = RegistrationTaskTable::processUpdateRegistrationVehicle ( $vehicle_id,$token_id,$plate_code,$plate_no,$plate_code_no,1,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, 1,$fuel_type,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description) ;
		
		return $flag; 
    
  }
  
  
  public function executeView(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$limit = 10;
		$offset = 0;
		$keyword = null;
		//$this->getUser()->setFlash('saved.success', 0);
		
		$this->taskObj = RegistrationTaskTable::processObject ( $_id, $token_id );
		$this->attachments = RegistrationTaskTable::processTaskAttachmentSelection ($_id, $token_id, $keyword, $offset, $limit) ;
		$this->participants = RegistrationTaskTable::processTaskParticipantSelection ($_id, $token_id, $keyword, $offset, $limit) ;
    
  }
  
  public function executeTaskParticipant(sfWebRequest $request)
  { 
		$_id = $request->getParameter('taskID');
		$token_id = $request->getParameter('tokenID');
		//$part_id = $request->getParameter('participant_id');
		$part_role = $request->getParameter('participant_role');
		$description = $request->getParameter('description');
		
		$flag = RegistrationTaskTable::processCreateTaskParticipant ($_id, $token_id, 1, $part_role, $description);
		
		return $flag;
	  
	}
	
	public function executeTaskAttachment(sfWebRequest $request)
	{ 
		$_id = $request->getParameter('taskID');
		$token_id = $request->getParameter('tokenID');
		$certificate_type = $request->getParameter('certificate_type');
		$ref_no = $request->getParameter('reference_no');
		$num_pages = $request->getParameter('num_pages');
		$folder_stored = $request->getParameter('folder_stored');
		$description = $request->getParameter('description');
		
		$flag = RegistrationTaskTable::processCreateTaskAttachment ( $_id, $token_id, $certificate_type, $ref_no, $num_pages, $folder_stored, $description);
		
		return $flag;
	  
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
		$class_id = $request->getParameter('class_id');
		$unit_id = intval($request->getParameter('unit_id'));
		$quantity = $request->getParameter('quantity');
		$unit_price = $request->getParameter('unit_price');
		$vat = 1;
		$currency_id = intval($request->getParameter('currency_id'));
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
		$limit = 20;
		$status = null;
		$keyword = null;
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
	
		$this->task_orders = RegistrationTaskTable::processTaskOrderCandidateSelection ($task_id, $token_id, $offset, $limit);
    //$this->candidates = RegistrationTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
    //$this->vehicles = VehicleTable::processSelection ( $task_id, $token_id, $status, $keyword, $offset, $limit) ;
  }
  
  public function executeComplete(sfWebRequest $request)
  {
		 
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
	
		$flag = RegistrationTaskTable::processComplete ($task_id, $token_id);
		$task = RegistrationTaskTable::processObject ($task_id, $token_id);
    
		$this->redirect('registration/model?task_id='.$task->id.'&token_id='.$task->token_id);
  }
  
  public function executeModel(sfWebRequest $request)
  {
		$task = RegistrationTaskTable::processObject ($task_id, $token_id);
  }
  
  
  
}
