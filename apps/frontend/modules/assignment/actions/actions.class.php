<?php

/**
 * assignment actions.
 *
 * @package    noradVMS
 * @subpackage assignment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class assignmentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		
		$this->tasks = AssignmentTaskTable::processSelection ($status, $keyword, $offset, $limit);
		//$this->candidates = AssignmentTaskTable::processCandidateSelection ($group_id, $class_id, $keyword, $offset, $limit);
  }

  public function executeCreateTask(sfWebRequest $request)
  {
		//$mode = $request->getParameter('mode');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		$pID = $this->getUser()->getAttribute('pID');
		
		$task = AssignmentTaskTable::processCreate ( $date, $description, $ref_no, $pID );
		
		$this->redirect('assignment/view?task_id='.$task->id.'&token_id='.$task->token_id);
    
  }
  public function executeUpdateTask(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		
		$flag = AssignmentTaskTable::processUpdate ( $_id, $token_id, $date, $description, $ref_no );
		
		return $flag; 
    
  }
  
  public function executeDeleteTask(sfWebRequest $request)
  {
		$_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$date = $request->getParameter('date');
		$ref_no = $request->getParameter('reference_no');
		$description = $request->getParameter('description');
		
		$flag = AssignmentTaskTable::processUpdate ( $_id, $token_id, $date, $description, $ref_no );
		
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
		
		$this->taskObj = AssignmentTaskTable::processObject ( $_id, $token_id );
		$this->attachments = AssignmentTaskTable::processTaskAttachmentSelection ($_id, $token_id, $keyword, $offset, $limit) ;
		$this->participants = AssignmentTaskTable::processTaskParticipantSelection ($_id, $token_id, $keyword, $offset, $limit) ;
    
  }
  
  public function executeTaskParticipant(sfWebRequest $request)
  { 
		$_id = $request->getParameter('taskID');
		$token_id = $request->getParameter('tokenID');
		//$part_id = $request->getParameter('participant_id');
		$part_role = $request->getParameter('participant_role');
		$description = $request->getParameter('description');
		
		$flag = AssignmentTaskTable::processCreateTaskParticipant ($_id, $token_id, 1, $part_role, $description);
		
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
		
		$flag = AssignmentTaskTable::processCreateTaskAttachment ( $_id, $token_id, $certificate_type, $ref_no, $num_pages, $folder_stored, $description);
		
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
		
		
		$this->task_orders = AssignmentTaskTable::processTaskOrderSelection ($task_id, $token_id, $status, $keyword, $offset, $limit);
		$this->vehicles = AssignmentTaskTable::processCandidateVehicleSelection ($type, $status, $keyword, $offset, $limit);
		$this->drivers = AssignmentTaskTable::processCandidateDriverSelection ($offset, $limit, $keyword, $type_id) ;
  }
  
  public function executeCreateTaskOrder(sfWebRequest $request)
  {
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$vehicle_id = $request->getParameter('vehicle_id');
		$driver_id = $request->getParameter('driver_id');
		$date = date('Y-m-d', time());
		$description = $request->getParameter('description');
		
		$flag = AssignmentTaskTable::processCreateTaskOrder ($task_id, $token_id, $vehicle_id, $driver_id, $description, $date );
		
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
	
		$this->task_orders = AssignmentTaskTable::processTaskOrderSelection ($task_id, $token_id, $status, $keyword, $offset, $limit);
		$this->vehicles = AssignmentTaskTable::processCandidateVehicleSelection ($type, $status, $keyword, $offset, $limit);
		$this->drivers = AssignmentTaskTable::processCandidateDriverSelection ($offset, $limit, $keyword, $type_id) ;
  }
  
   public function executeSelection(sfWebRequest $request)
	{
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
	
		$this->task_orders = AssignmentTaskTable::processTaskOrderSelection ($task_id, $token_id, $status, $keyword, $offset, $limit);
		$this->vehicles = AssignmentTaskTable::processCandidateVehicleSelection ($type, $status, $keyword, $offset, $limit);
		$this->drivers = AssignmentTaskTable::processCandidateDriverSelection ($offset, $limit, $keyword, $type_id) ;
		
		return $this->renderPartial('assignmentList', array('task_orders' => $this->task_orders));
  }
  
  public function executeChangeVehicle(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		 
		
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$vehicle_id = $request->getParameter('vehicle_id');
		$order_id = $request->getParameter('order_id');
		
		
		 
		$order = AssignmentOrderTable::processRevertVehicle($task_id, $token_id, $order_id, $vehicle_id);
	
		$this->task_orders = AssignmentTaskTable::processTaskOrderSelection ($task_id, $token_id, $status, $keyword, $offset, $limit);
		$this->vehicles = AssignmentTaskTable::processCandidateVehicleSelection ($type, $status, $keyword, $offset, $limit);
		$this->drivers = AssignmentTaskTable::processCandidateDriverSelection ($offset, $limit, $keyword, $type_id) ;
		
		return $this->renderPartial('assignmentList', array('task_orders' => $this->task_orders));
  }
  public function executeChangeDriver(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 10;
		$status = null;
		$keyword = null;
		 
		
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
		$driver = $request->getParameter('driver_id');
		$order_id = $request->getParameter('order_id');
		 
		$order = AssignmentOrderTable::processRevertDriver($task_id, $token_id, $order_id, $driver);
	
		$this->task_orders = AssignmentTaskTable::processTaskOrderSelection ($task_id, $token_id, $status, $keyword, $offset, $limit);
		$this->vehicles = AssignmentTaskTable::processCandidateVehicleSelection ($type, $status, $keyword, $offset, $limit);
		$this->drivers = AssignmentTaskTable::processCandidateDriverSelection ($offset, $limit, $keyword, $type_id) ;
		
		return $this->renderPartial('assignmentList', array('task_orders' => $this->task_orders));
  }
  
  public function executeComplete(sfWebRequest $request)
  {
		 
		$task_id = $request->getParameter('task_id');
		$token_id = $request->getParameter('token_id');
	
		$flag = AssignmentTaskTable::processComplete ($task_id, $token_id);
		$task = AssignmentTaskTable::processObject ($task_id, $token_id);
    
		$this->redirect('assignment/model?task_id='.$task->id.'&token_id='.$task->token_id);
  }
  
  public function executeModel(sfWebRequest $request)
  {
		$task = AssignmentTaskTable::processObject ($task_id, $token_id);
  }
  
}
