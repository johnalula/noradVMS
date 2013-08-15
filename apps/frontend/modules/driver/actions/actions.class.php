<?php

/**
 * driver actions.
 *
 * @package    noradVMS
 * @subpackage driver
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class driverActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	  $limit = 10;
	  $offset = 0;
	  $keyword = null;
	  $type_id = null;
	  $is_assigned = null;
	  
	  $this->employees = DriverTable::processCandidateEmployeeSelection ($type=null, $status=null, $keyword=null, $offset=0, $limit=10);
	  $this->drivers = DriverTable::processSelection( $offset, $limit, $keyword, $type_id, $is_assigned ); 
  }
  
  public function executeCreateDriver(sfWebRequest $request)
  {
	  $empID = $request->getParameter('employee_id');
	  $license_type = $request->getParameter('license_type');
	  $work_experience = $request->getParameter('work_experience');
	  $description = $request->getParameter('description');
	  
	  $flag = DriverTable::processCreate ( $empID, $license_type, $work_experience, $description ); 
	  
	  return $flag;
  }
}
