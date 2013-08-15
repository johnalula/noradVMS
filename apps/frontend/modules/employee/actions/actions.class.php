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
		$this->employees = EmployeeTable::processSelection($status=null, $keyword=null, $exclusion=null , $parent=null, $dept=null, $type=null, $offset=0, $limit=10 );
			 
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

  
}
