<?php

/**
 * EmployeeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EmployeeTable extends PluginEmployeeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object EmployeeTable
     */
   public static $PRESIDENT = 1;
   public static $VICE_PRESIDENT = 2;
   public static $DIRECTOR = 3;
   public static $DEAN = 4;
   public static $HEAD = 5;
   public static $DRIVER = 6;
   public static $MECHANIC = 7;
   public static $ACADEMIC_STAFF = 8;
   public static $ADMINISTRATIVE_STAFF = 9;
   public static $TEAM_LEADER = 10;
   public static $OTHER = 11;
   
   public static $ALL_EMPLOYMENT_TYPES = array ( 1 => "President", 2 => "Vice President" , 3 => "Director" , 4 => "Dean",  5 => "Head", 6 => "Driver", 7 => "Mechanic" , 8 => "Academic ", 9 => "Administrative",10 => "Team Leader", 11 => "Other" );
   
   public static function fetchEmployeementTypeID ( $value ) 
	{
		try {
				foreach( self::$ALL_EMPLOYMENT_TYPES as $key=> $role ){
					if( strcmp($type, $value) == 0 )
					  return $key; 
			}			
			 return true; 
	  } catch ( Exception $e ) {
			return false; 
	  }
	}
	
	public static function fetchEmployeementTypeValue  ( $id )
	{
		try{
				foreach( self::$ALL_EMPLOYMENT_TYPES as $key=> $type ){
				  if( $key == $id )
						return $type; 
			}
			 return true; 
	  } catch ( Exception $e ) {
			 return false; 
	  }
	}
		
	public static function processObject($_id, $token_id)
	{
		$q= Doctrine_Query::create()
			->select("prt.* ")
			->from("Participant prt") // 
			->where("prt.id = ? AND prt.token_id = ?",array($_id, $token_id) )
			->fetchOne(); 
		return (! $q ? null : $q ); 	
		
	}

	public static function processSelection($status=null, $keyword=null, $exclusion=null , $parent=null, $dept=null, $type=null, $offset=0, $limit=10 ) 
	{
		$q= Doctrine_Query::create()
			->select("prt.*, prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName, prt.full_name as fullName")
			->from("Participant prt") 
			//->leftJoin("prt.Participant dept on dept.id = prt.dept_id")
			->offset($offset)
			->limit($limit)
			->where("prt.parent_id IS NOT NULL AND prt.participant_type = ?", ParticipantCore::$EMPLOYEE ); 
		$q= self::addStatusQuery($q, $status );
		$q= self::addKeywordQuery($q, $keyword );
		$q= self::addExclusionQuery($q, $exclusion );
		//$q= self::addUmbrellaQuery($q, $parent );
		if(! is_null($dept))
			$q=$q->andWhere("dept.id=?", $dept);
		$q= $q->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}

	public static function getCandidateParents()
	{
		
	}

	public static function processCreate($parent_id, $employment_type, $title, $name, $father_name, $grand_father_name, $id_no, $job_title, $birth_date, $status, $vat_number, $project_no, $description, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website)
	{
		try
		{
			if(!$parent_id)
				return false;
				
			if(!$name)
				return false;
			
			$full_name = $name.'-'.$father_name.'-'.$grand_father_name;
			$token = trim($name).trim($id_no).rand('11111', '99999');
			$_nw = new Employee(); //
			$_nw->token_id = MD5($token);
			$_nw->participant_type = ParticipantCore::$EMPLOYEE;
			$_nw->name = trim($name);
			$_nw->father_name = trim($father_name);
			$_nw->grand_father_name = trim($grand_father_name);
			$_nw->full_name = $full_name;
			$_nw->job_title = trim($job_title);
			$_nw->employment_type_id = $employment_type;
			$_nw->title = $title;
			$_nw->birth_date = $birth_date;  
			$_nw->status_id = $status; 
			$_nw->id_no = trim($id_no);
			$_nw->vat_number = trim($vat_number);
			$_nw->project_no = trim($project_no);
			$_nw->description = trim($description);
			$_nw->parent_id= $parent_id;
			$_nw->save(); 
			$_nw_id = $_nw->id;
				
				$contact = ParticipantContactTable::processCreate($_nw_id, null,null, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website);
				
			return true; 
		} catch ( Exception $e ) {			
			return false; 
		}	 
	 
	}

	public static function processUpdate($_id, $token_id, $parent_id, $employment_type, $title, $name, $father_name, $grand_father_name, $id_no, $job_title, $birth_date, $status, $vat_number, $project_no, $description, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website)
	{
		
			if(!$parent_id)
				return false;
				
			if(!$name)
				return false;
				
			$full_name= trim($name)." ".trim($father_name)." ".trim($grand_father_name);
			$q = Doctrine_Query::create( )
				->update('Employee prt')
				->set('prt.participant_type', '?', ParticipantTable::$EMPLOYEE)
				->set('prt.name', '?', trim($name))
				->set('prt.father_name', '?', trim($father_name))
				->set('prt.grand_father_name', '?', trim($grand_father_name))
				->set('prt.full_name', '?', trim($full_name))
				->set('prt.job_title', '?', trim($job_title))
				->set('prt.employment_type', '?', $employment_type )
				->set('prt.id_no', '?', trim($id_no))
				->set('prt.title', '?', trim($title))
				->set('prt.birth_date', '?', trim($birth_date))
				->set('prt.status_id', '?', trim($status)) 
				->set('prt.id_no', '?', trim($id_no)) 
				->set('prt.vat_number', '?', trim($vat_number)) 
				->set('prt.project_no', '?', trim($project_no)) 
				->set('prt.description', '?', trim($description)) 
				->set('prt.parent_id', '?', $parent_id) 
				->where('prt.id = ? AND prt.token_id = ?', array($_id, $token_id))
				->execute();	
				
				$contact = ParticipantContactTable::updateContact($_id, null, null, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website);
			
		return ( $q > 0 );   
	}

   public static function processDelete()
   {
		$q = Doctrine_Query::create()
			->select("prt.*, to.id as TOID")
			->from("Participant prt")
			->innerJoin("prt.taskParticipantParticipants to")
			->offset(0)
			->limit(4)
			->where("prt.id = ? ",  $id )
			->execute(); 
		if( count($q) > 0 )
			return false; 			

		$q2 = Doctrine_Query::create()
				->delete("*")
				->from("Participant prt")
				->where("prt.id=?", $id )
				->execute( );
		return ( $q2 > 0  ) ;
		//calculate relation => deletability 
	}
    
	public static function addKeywordQuery($q, $keyword)
	{
		if( is_null($keyword))
			return $q; 
		$q= $q->andWhere("prt.name LIKE ?", $keyword); 
		return $q; 
	}

	public static function addStatusQuery($q, $status)
	{
		if( is_null($status))
			return $q; 
		$q= $q->andWhere("prt.status_id=?",  $status); 
		return $q; 
	}

	public static function addExclusionQuery($q, $exclusion)
	{
		if(! is_array($exclusion) )
			return $q; 
		if( count($exclusion) <= 0 )
			return $q; 
		$q= $q->andWhereNotIn("prt.id",  $exclusion); 
		return $q; 
	}

	public static function addParentQuery($q, $parent_id)
	{
		if( is_null($parent_id))
			return $q; 
		$q = $q->andWhere("prt.parent_id=?",  $parent_id); 
		return $q; 
	}

	public static function fetchStatusList()
	{
		$q = Doctrine_Query::create()
			->select("DISTINCT(to.type_id) AS statuses")
			->from("Participant to")
			->where("to.id IS NOT NULL"); 
			
		$q = $q->andWhereIn("to.participant_type_id", ParticipantCore::$EMPLOYEE)
		  	->execute( ); 
		$st = array(); 
		$count= count($q);
		if ($count <= 0 )
			return $st; 
		foreach($q as $prt )
			$st[] = $prt->statuses; 
		return $st; 
	}
	
	public static function processParentSelection()
	{
		$q = Doctrine_Query::create()
			->select("DISTINCT(emp.parent_id) AS parentID")
			->from("Participant emp")
			//->leftJoin("emp.Participant prt")
			->where("emp.participant_type = ?", ParticipantCore::$EMPLOYEE)
			
		//$q = $q->andWhereIn("emp.participant_type", ParticipantCore::$EMPLOYEE)
		  	->execute( ); 
		  	
	/*	$emp = array(); 
		$count= count($q);
		if ($count <= 0 )
			return $st; 
		foreach($q as $prt )
			$emp[] = $prt->parent_id; */
			
		return $q; 
	}
	
	public static function processTypeSelection()
	{
		$q = Doctrine_Query::create()
			->select("DISTINCT(emp.parent_id) AS parentID")
			->from("Employee emp")
			//->leftJoin("emp.Participant prt")
			->where("emp.participant_type = ?", ParticipantCore::$EMPLOYEE)
			
		//$q = $q->andWhereIn("emp.participant_type", ParticipantCore::$EMPLOYEE)
		  	->execute( ); 
		  	
	/*	$emp = array(); 
		$count= count($q);
		if ($count <= 0 )
			return $st; 
		foreach($q as $prt )
			$emp[] = $prt->parent_id; */
			
		return $q; 
	}

	public static function fetchTypeList()
	{}

	public static function processSelect( $offset, $limit, $keyword, $type_id, $is_assigned )
	{
		$q= Doctrine_Query::create()
			->select("prt.*,  prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name  as grandFatherName ")
			->from("Participant prt") 
			//->innerJoin("dr.Participant prt")
			//->innerJoin("vh.TaskOrder tsko")
			//->innerJoin("vh.Category cat on vh.category_id = cat.id")
			//->innerJoin("tsko.Unit unt on tsko.unit_id = unt.id")
			//->innerJoin("tsko.Currency crr on tsko.currency_id = crr.id") 
			->offset($offset)
			->limit($limit);
			if(!is_null($is_assigned))
			$q = $q->addWhere('dr.is_assigned = ?', $is_assigned);
			
			$q = $q->execute( ); 
			

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function getInstance()
	{
	return Doctrine_Core::getTable('Employee');
	}
}
