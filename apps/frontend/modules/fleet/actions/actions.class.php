<?php

/**
 * fleet actions.
 *
 * @package    noradVMS
 * @subpackage fleet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fleetActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		
		 $this->tasks = FleetServiceTaskTable::processSelection ($status, $keyword, $offset, $limit); 
		 $this->customers = FleetServiceTaskTable::processCandidateCustomerSelection ($status, $keyword, $offset, $limit); 
  }

    public function executeCreateTask(sfWebRequest $request)
  {
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		$destination = $request->getParameter('destination');
		$no_of_days = $request->getParameter('no_of_days');
		$departure_date = $request->getParameter('departure_date');
		$departure_time = $request->getParameter('departure_time');
		$payment_mode = $request->getParameter('payment_mode');
		$service_type = $request->getParameter('service_type');
		$service_reason = $request->getParameter('service_reason');
		$customer_id = $request->getParameter('customer_id');
		$pID = $this->getUser()->getAttribute('pID');
		
		$task = FleetServiceTaskTable::processCreate ( $date, $description, $ref_no, $customer_id, $destination, $no_of_days, $service_type, $service_reason, $pID, $payment_mode, $departure_date, $departure_time );
		
		$this->redirect('fleet/view?task_id='.$task->id.'&token_id='.$task->token_id);
  }
  
  public function executeView(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$limit = 10;
		$offset = 0;
		$keyword = null;
		//$this->getUser()->setFlash('saved.success', 0);
		
		$this->taskObj = FleetServiceTaskTable::processObject ( $_id, $token_id );
		$this->attachments = FleetServiceTaskTable::processTaskAttachmentSelection ($_id, $token_id, $keyword, $offset, $limit) ;
		$this->participants = FleetServiceTaskTable::processTaskParticipantSelection ($_id, $token_id, $keyword, $offset, $limit) ;
		$this->customers = FleetServiceTaskTable::processCandidateCustomerSelection ($status, $keyword, $offset, $limit);
  }
  
  public static function executeSelectCustomer(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$customer_id = $request->getParameter('customer_id');
		$offset = $request->getParameter('offset');
		$limit = $request->getParameter('limit');
		$keyword = $request->getParameter('keyword');
		 $offset = 0;
		 $limit =10;
		
		$this->customers = FleetServiceTaskTable::processCandidateCustomerSelection ($status, $keyword, $offset, $limit);
		
		return $this->renderPartial('list', array('customers' => $this->customers));
	}
  
  public function executeTaskParticipant(sfWebRequest $request)
  { 
		$_id = $request->getParameter('taskID');
		$token_id = $request->getParameter('tokenID');
		//$part_id = $request->getParameter('participant_id');
		$part_role = $request->getParameter('participant_role');
		$description = $request->getParameter('description');
		
		$flag = FleetServiceTaskTable::processCreateTaskParticipant ($_id, $token_id, 1, $part_role, $description);
		
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
		
		$flag = FleetServiceTaskTable::processCreateTaskAttachment ( $_id, $token_id, $certificate_type, $ref_no, $num_pages, $folder_stored, $description);
		
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
		
		$this->task_orders = FleetServiceTaskTable::processTaskOrderSelection ($task_id, $token_id, $status, $keyword, $offset, $limit);
		$this->candidates = FleetServiceTaskTable::processCandidateVehicleSelection($departure_status, $status, $keyword, $offset, $limit);
  }
  
  public function executeCreateTaskOrder(sfWebRequest $request)
  {
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$vehicle_id = $request->getParameter('vehicle_id');
		$mileage = $request->getParameter('departure_mileage');
		$departure_date = $request->getParameter('departure_date');
		$departure_time = $request->getParameter('departure_time');
		$fuel_acquired_id = $request->getParameter('fuel_acquired_id');
		$fuel_amount = $request->getParameter('fuel_amount'); 
		$description = $request->getParameter('description'); 
		$no_of_passengers = $request->getParameter('no_of_passengers'); 
		
		$flag = FleetServiceTaskTable::processCreateTaskOrder ($task_id, $token_id, $vehicle_id, $fuel_acquired_id, $fuel_amount, $description, $no_of_passengers, $mileage );
		
		return $flag;
  }
  
  public function executeDetail(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
	
	/// $this->task_orders = TaskOrderTable::processSelection ($status=null, $keyword=null, $offset=0, $limit=10);
    //$this->candidates = FleetServiceTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
    $this->vehicles = FleetOrderTable::processSelection ( $task_id, $token_id, $status, $keyword, $offset, $limit) ;
  }
  
  public function executeReturn(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
	
	/// $this->task_orders = TaskOrderTable::processSelection ($status=null, $keyword=null, $offset=0, $limit=10);
    //$this->candidates = FleetServiceTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
   // $this->vehicles = VehicleTable::processSelection ( $task_id, $token_id, $status, $keyword, $offset, $limit) ;
  }
}
