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
    
    $this->vehicles = VehicleTable::processSelection ( $is_departed, $is_returned,$is_assigned, $exclusion, $type, $status, $keyword, $offset, $limit);
    $this->allVehicles = VehicleTable::processAllVehicleSelection ($is_assigned, $type, $status, $keyword);
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
  public function executeUpdateVehicle(sfWebRequest $request)
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
		
		$flag = VehicleTable::processUpdate ( $vehicle_id,$token_id,$plate_code,$plate_no,$plate_code_no,$vehicle_type,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, $service_type,$fuel_type,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description  ) ;
		
		return $flag;
			
  }
  
	public function executePagination(sfWebRequest $request)
	{
		
		$offset = $request->getParameter('offset');
		$limit = $request->getParameter('limit');
		$status = intval($request->getParameter('status'));
		$type = intval($request->getParameter('type'));
		$keyword = $request->getParameter('keyword');
		$keyword = '%'.$keyword.'%';
		
		if(!$offset) $offset = 0;
		if(!$limit) $limit = 10;
		if(!$keyword) $keyword = null;
		if(!$status) $status = null;
		if(!$type)  $type = null;
		if(!$is_assigned)  $is_assigned = null;
		if(!$is_departed)  $is_departed = null;
		if(!$is_returned)  $is_returned = null;
		if(!$exclusion)  $exclusion = null;
		//$exclusion =true;
		
		$this->vehicles = VehicleTable::processSelection ( $is_departed, $is_returned, $is_assigned, $exclusion, $type, $status, $keyword, $offset, $limit);
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
