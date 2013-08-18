<?php

/**
 * vehicle actions.
 *
 * @package    noradVMS
 * @subpackage vehicle
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehicleActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $offset = 0;
    $limit = 10;
    $keyword = null;
    $status = null;
    $type = null;
    $is_assigned = null;
    
    $this->vehicles = VehicleTable::processSelection ( $is_assigned, $type, $status, $keyword, $offset, $limit);
    $this->allVehicles = VehicleTable::processAllVehicleSelection ($is_assigned=false, $type=null, $status=null, $keyword=null);
  }
  
  public function executeView(sfWebRequest $request)
  {
		$offset = 0;
		$limit = 100;
		$_id = $request->getParameter('vehicle_id');
		$token_id = $request->getParameter('token_id');
		
		$this->vehicleobj = VehicleTable::processObject ($_id, $token_id );
		
		$this->vehicle = VehicleTable::processObject ($_id, $token_id );
		$this->types = VehicleTypeTable::processSelection ( $offset, $limit );
		$this->feul_types = FuelTypeTable::processSelection ( $offset, $limit );
			
		 
  }
  
	public function executePagination(sfWebRequest $request)
	{
		
		$offset = $request->getParameter('offset');
		$limit = $request->getParameter('limit');
		$status = intval($request->getParameter('status'));
		$type = intval($request->getParameter('type'));
		$keyword = $request->getParameter('keyword');
		//$keyword = '%'.$keyword;
		
		if(!$offset) $offset = 0;
		if(!$limit) $limit = 10;
		if(!$keyword) $keyword = null;
		if(!$status) $status = null;
		if(!$type)  $type = null;
		if(!$is_assigned)  $is_assigned = null;
		//$is_assigned =true;
		
		 $this->vehicles = VehicleTable::processSelection ( $is_assigned, $type, $status, $keyword, $offset, $limit );
		 $this->allVehicles = VehicleTable::processAllVehicleSelection($is_assigned, $type, $status, $keyword);
		 
		return $this->renderPartial('list', array('vehicles' => $this->vehicles, 'allVehicles' => $this->allVehicles ));		
	}
	
	public function executeSelection(sfWebRequest $request)
	{
		//$offset = $request->getParameter('offset');
		//$limit = intval($request->getParameter('limit'));
		//$status = intval($request->getParameter('status'));
		//$type = intval($request->getParameter('type'));
		//$keyword = $request->getParameter('keyword');
		//$keyword = '%'.$keyword.'%';
		
		//if(!$offset) $offset = 0;
		///if(!$limit) $limit = 15;
		//if(!$keyword) $keyword = null;
		//if(!$status) $status = null;
		//if(!$type)  $type = null;
		//if(!$is_assigned)  $is_assigned = null;
		//$is_assigned =true;
		
		 $this->vehicles = VehicleTable::processSelection ( $is_assigned, $type, $status, $keyword, 0, 15);
		 $this->allVehicles = VehicleTable::processAllVehicleSelection($is_assigned, $type, $status, $keyword);
		 
		return $this->renderPartial('list', array('vehicles' => $this->vehicles, 'allVehicles' => $this->allVehicles ));		
	}
}
