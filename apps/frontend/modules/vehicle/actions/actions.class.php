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
    $is_assigned = null;
    
    $this->vehicles = VehicleTable::processSelection ( $is_assigned, $status, $keyword, $offset, $limit);
    //$this->log_files = UserGroupTable::processSelection($keyword, $offset, $limit);
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
}
