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
	  //$module = $request->getParameter('module');
	  
			$user_id = $this->getUser()->getAttribute('uid');
			//$this->getUser()->signIn($user);
			$action = SystemLogFileTable::$CREATE;
			$date = date('Y/m/d H:i:s', time());
			$ip =  gethostbyname($_SERVER['HTTP_HOST']) ; 
			$time = date('h:i:s A');
			$module  = 'Vehicle_type'; 
			//$user_id = $user->id;
	
	  
		$flags = VehicleTypeTable::processCreate ( $name, $description );
		
		$flag = SystemLogFileTable::processCreate(2, $module, $action, $time, $date, null,  null, null, null, $ip );
		

			
			
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
