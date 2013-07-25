<?php

/**
 * DriverTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DriverTable extends PluginDriverTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DriverTable
     */
	public static function getInstance()
	{
	  return Doctrine_Core::getTable('Driver');
	}
	
	 public static function addDriver ( $employee_id, $emp_token_id, $license_type, $work_experience, $description )
	{
		//$token = trim($name).trim($project_no).rand('11111', '99999');
		$_nw = new Driver (); //
		$_nw->token_id = $emp_token_id; 
		$_nw->employee_id = $employee_id;
		$_nw->license_type = trim($license_type); 
		$_nw->work_experience = trim($work_experience);  
		$_nw->description = trim($description); 
		$_nw->save(); 
		
		$_emp = EmployeeTable::getEmployeeObject($employee_id, $emp_token_id );
		$employment_type = EmployeeTable::$DRIVER;
		$_emp->changeEmploymentType($employment_type);
			 
		return true; 
	}

	public static function updateDriver($_id, $employee_id, $token_id, $license_type, $work_experience, $description )
	{
		$q = Doctrine_Query::create( )
			->update('Center prt')
			->set('prt.employee_id', '?', $employee_id )
			->set('prt.license_type', '?', trim($license_type)) 
			->set('prt.work_experience', '?', trim($work_experience))  
			->set('prt.description', '?', trim($description))  
			->where('prt.id = ? AND prt.token_id = ?', array($_id, $token_id))
			->execute();	
			
		return ( $q > 0 );   
	}
}
