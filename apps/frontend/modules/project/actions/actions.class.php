<?php

/**
 * project actions.
 *
 * @package    noradVMS
 * @subpackage project
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
   	$offset = 0;
		$limit = 10;
		
   	
		$this->projects = ProjectTable::processSelection($status, $keyword, $exclusion, $type, $offset, $limit )  ;
		//$this->directors = ProjectTable::processCandidateDirectorsSelection($status, $keyword, $exclusion, $emp_type, $type, $offset, $limit );
		$this->parents = ProjectTable::processUmbrellaSelection($status, $keyword, $exclusion, $type, $offset, $limit );
  }

   public function executeCreateProject(sfWebRequest $request)
	{		
		$parent_id = $request->getParameter('parent_id');
		$name = $request->getParameter('name');
		$alias = $request->getParameter('alias');
		$project_code = $request->getParameter('project_code');
		$project_no = $request->getParameter('project_no');
		$vat_no = $request->getParameter('vat_no');
		$status = $request->getParameter('status');
		$phone_no = $request->getParameter('phone_no');
		$mobile_no = $request->getParameter('mobile_no');
		$pobox = $request->getParameter('pobox');
		$fax_no = $request->getParameter('fax_no');
		$email = $request->getParameter('email');
		$website = $request->getParameter('website');
		$description = $request->getParameter('description');
		
		$flag = ProjectTable::processCreate ( $parent_id, $name, $project_code, $status, $project_no, $alias, $description, $street_no, $house_no, $pobox, $mobile_no, $phone_no, $fax_no, $email, $website);
		
		return $flag;
			 
	}
	
	public function executePagination(sfWebRequest $request)
	{ 
		$offset = $request->getParameter('offset');
		$limit = intval($request->getParameter('limit'));
		//$status = $request->getParameter('status_id');
		$type = intval($request->getParameter('type_id'));
		$keyword = $request->getParameter('keyword');
		//$keyword = '%'.$keyword.'%';
		
		if(!$offset || $offset=='')	$offset = 0;			
		if(!$limit || $limit=='' ) $limit = 10;			
		if(!$type || $type=='' ) $type = null;			
		if(!$status || $status=='' )	$status = null;			
		if(!$keyword || $keyword=='' )	$keyword = null;
		if(!$exclusion || $exclusion=='' )	$exclusion = null;
		if(!$emp_type || $emp_type=='' )	$emp_type = null;
		
		$this->employees = EmployeeTable::processSelection($status, $keyword, $exclusion, $emp_type, $type, $offset, $limit );

		return $this->renderPartial('list', array('employees' => $this->employees));	 
	}

	public function executeParentPagination(sfWebRequest $request)
	{ 
		$offset = $request->getParameter('offset');
		$limit = intval($request->getParameter('limit'));
		//$status = $request->getParameter('status_id');
		$type = intval($request->getParameter('type_id'));
		$keyword = $request->getParameter('keyword');
		//$keyword = '%'.$keyword.'%';
		
		if(!$offset || $offset=='')	$offset = 0;			
		if(!$limit || $limit=='' ) $limit = 10;			
		if(!$type || $type=='' ) $type = null;			
		if(!$status || $status=='' )	$status = null;			
		if(!$keyword || $keyword=='' )	$keyword = null;
		if(!$exclusion || $exclusion=='' )	$exclusion = null;
		
		$this->parents = EmployeeTable::processUmbrellaSelection($status, $keyword, $exclusion, $type, $offset, $limit );

		return $this->renderPartial('departmentList', array('parents' => $this->parents));	 
	}

  
}
