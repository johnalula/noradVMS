<?php

/**
 * vehicle_type actions.
 *
 * @package    noradVMS
 * @subpackage vehicle_type
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehicle_typeActions extends sfActions
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
	  
	  $this->vehicle_types = VehicleTypeTable::processSelection ( $offset, $limit );
  }
  
  public function executeSelection(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $this->vehicle_types = VehicleTypeTable::processSelection ( $offset, $limit );
	  $this->vehicle_types = VehicleTypeTable::processSelection ( $offset, $limit );
		
		return $this->renderPartial('list', array('vehicle_types' => $this->vehicle_types));
  }
  
  public function executePagination(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $this->vehicle_types = VehicleTypeTable::processSelection ( $offset, $limit );
	  $this->vehicle_types = VehicleTypeTable::processSelection ( $offset, $limit );
		
		return $this->renderPartial('list', array('vehicle_types' => $this->vehicle_types));
  }
  
  public function executeCreateVehicleType(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $name = $request->getParameter('name');
	  $description = $request->getParameter('description');
	  
		$flags = VehicleTypeTable::processCreate ( $name, $description );
		
		//if($flag)
		return $flags;
  }
  
  public function executeUpdateVehicleType (sfWebRequest $request)
  {
	  $_id = $request->getParameter('vehicle_type_id');
	   $name = $request->getParameter('name');
	  $description = $request->getParameter('description');
	  
	  $flag = VehicleTypeTable::processUpdate ( $_id, $name, $description );
  }
  
  public function executeDeleteVehicleType (sfWebRequest $request)
  {
	  $_id = $request->getParameter('vehicle_type_id');
	  
	  $flags = VehicleTypeTable::processDelete ( $_id );
	  
	  return $flags;
  }
}
