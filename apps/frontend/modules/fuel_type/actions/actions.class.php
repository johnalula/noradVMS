<?php

/**
 * fuel_type actions.
 *
 * @package    noradVMS
 * @subpackage fuel_type
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fuel_typeActions extends sfActions
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
	  
	  $this->fuel_types = FuelTypeTable::processSelection ( $offset, $limit );
  }
  
 /* public function executeSelection(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $this->fuel_types = FuelTypeTable::processSelection ( $offset, $limit );
	  $this->fuel_types = FuelTypeTable::processSelection ( $offset, $limit );
		
		return $this->renderPartial('list', array('fuel_types' => $this->fuel_types));
  }*/
  
 /* public function executePagination(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $this->fuel_types = FuelTypeTable::processSelection ( $offset, $limit );
	  $this->fuel_types = FuelTypeTable::processSelection ( $offset, $limit );
		
		return $this->renderPartial('list', array('fuel_types' => $this->fuel_types));
  }*/
  
  public function executeCreateFuelType(sfWebRequest $request)
  {
	  $offset = 0;
	  $limit = 10;
	  
	  $name = $request->getParameter('name');
	  $description = $request->getParameter('description');
	  
		$flags = FuelTypeTable::processCreate ( $name, $description );
		
		//if($flag)
		return $flags;
  }
  
  public function executeUpdateFuelType (sfWebRequest $request)
  {
	  $_id = $request->getParameter('fuel_type_id');
	   $name = $request->getParameter('name');
	  $description = $request->getParameter('description');
	  
	  $flag = FuelTypeTable::processUpdate ( $_id, $name, $description );
  }
  
  public function executeDeleteFuelType (sfWebRequest $request)
  {
	  $_id = $request->getParameter('fuel_type_id');
	  
	  $flags = FuelTypeTable::processDelete ( $_id );
	  
	  return $flags;
  }
  
  
}
