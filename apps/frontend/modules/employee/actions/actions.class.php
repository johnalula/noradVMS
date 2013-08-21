<?php

/**
 * employee actions.
 *
 * @package    noradVMS
 * @subpackage employee
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class employeeActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$offset = 0;
		$limit = 10;
		
		$this->employees = EmployeeTable::processSelection($status, $keyword, $exclusion, $emp_type, $type, $offset, $limit );
		$this->parents = EmployeeTable::processUmbrellaSelection($status, $keyword, $exclusion, $type, $offset, $limit );
		$this->totalData = EmployeeTable::processUmbrellaSelection($status, $keyword, $exclusion, $type, $offset, 1000 );
		//$this->parents = CollegeTable::processSelection($status, $keyword, $exclusion, $type, $offset, $limit ) ;
			 
	}
	
	public function executeCreateEmployee(sfWebRequest $request)
	{		
		$name = $request->getParameter('name');
		$father_name = $request->getParameter('father_name');
		$g_father_name = $request->getParameter('g_father_name');
		$birth_date = $request->getParameter('birth_date');
		$gender = $request->getParameter('gender');
		$dept_id = $request->getParameter('department_id');
		$id_no = $request->getParameter('id_no');
		$project_no = $request->getParameter('project_no');
		$vat_no = $request->getParameter('vat_no');
		$status = $request->getParameter('status');
		$job_title = $request->getParameter('job_title');
		$emp_type = $request->getParameter('employment_type');
		$phone_no = $request->getParameter('phone_no');
		$mobile_no = $request->getParameter('mobile_no');
		$pobox = $request->getParameter('pobox');
		$fax_no = $request->getParameter('fax_no');
		$email = $request->getParameter('email');
		$website = $request->getParameter('website');
		$description = $request->getParameter('description');
		
		$flag = EmployeeTable::processCreate($dept_id, $emp_type, $title, $name, $father_name, $g_father_name, $id_no, $job_title, $birth_date, $status, $vat_no, $project_no, $description, $pobox, $mobile_no, $phone_no, $fax_no, $email, $website);
		
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
