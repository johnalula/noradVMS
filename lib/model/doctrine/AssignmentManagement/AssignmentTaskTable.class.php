<?php

/**
 * AssignmentTaskTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AssignmentTaskTable extends PluginAssignmentTaskTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object AssignmentTaskTable
     */
     
     
	public static function processCreate($date, $description, $ref, $owner, $_pid) 
	{      
       // try{
				$token = trim($date).trim($ref).rand('11111', '99999');
				$_nw = new AssignmentTask(); 
				$_nw->token_id = md5($token); 
				$_nw->owner_id = $owner;  
				$_nw->description = $description  ;  
				$_nw->status_id = TaskCore::$ACTIVE; 
				$_nw->reference_no = $ref; 
				$_nw->start_date = $date ;   
				$_nw->save(); 
				
				//default task attachment			
				$att = new TaskAttachment ();
				$att->token_id = $_nw->token_id;
				$att->task_id = $_nw->id;
				$att->certificate_type = AttachmentCore::$LETTER;
				$att->reference_number = $ref;
				$att->save();
				
				//default task participant
				$prt = new TaskParticipant ();
				$prt->token_id = $_nw->token_id;
				$prt->task_id = $_nw->id;
				$prt->participant_id = $_pid;
				$prt->participant_role = ParticipantCore::$DATA_INCODER;
				$prt->description = trim($description);
				$prt->save();
				
				$prt = new TaskParticipant ();
				$prt->token_id = $_nw->token_id;
				$prt->task_id = $_nw->id;
				$prt->participant_id = $owner;
				$prt->participant_role = ParticipantCore::$OWNER;
				$prt->description = trim($description);
				$prt->save();
				
            return $_nw; 
      //  } catch ( Exception $e) {
            //return false; 
       // }
	}
	
	public static function processUpdate ($_id, $token_id, $date, $description, $ref )
	{		
		$q = Doctrine_Query::create( )
			->update('RegistrationTask tsk')
			->set('tsk.start_date', '?', trim($date))  
			//->set('tsk.status_id', '?', TaskCore::$ACTIVE)  
			->set('tsk.description', '?', trim($description))  
			->where('tsk.id = ? AND tsk.token_id = ?', array($_id, $token_id))
			->execute();	

		return ( $q > 0 );   
	}
	
	public static function processObject ( $_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select("tsk.*, tsk.token_id as tokenID, tsk.reference_no as referenceNo, tsk.start_date as startDate, tsk.description as description, tsk.owner_id as ownerID,
				prt.name as ownerName, prt.alias as ownerAlias,
				tprt.id asa participantID, tskatt.id as attachmentID
			
			")
			->from("AssignmentTask tsk") 
			->leftJoin("tsk.taskParticipantsTasks tprt ")
			->leftJoin("tsk.taskAttachmentTasks tskatt")
			->leftJoin("tsk.Participant prt")
			->where("tsk.id=? AND tsk.token_id=?", array($_id, $token_id))
			->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
	
	public static function processSelection($status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("tsk.*, tsk.token_id as tokenID, tsk.reference_no as referenceNo, tsk.start_date as startDate, tsk.description as description, tsk.owner_id as ownerID,
				prt.name as ownerName, prt.alias as ownerAlias,
				tprt.id asa participantID, tskatt.id as attachmentID
			
			")
			->from("AssignmentTask tsk") 
			->leftJoin("tsk.taskParticipantsTasks tprt ")
			->leftJoin("tsk.taskAttachmentTasks tskatt")
			->leftJoin("tsk.Participant prt")
			->offset($offset)
			->limit($limit)
			//->where('tsk.type = ?'. TaskCore::$ASSIGNMENT)
			->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processOwnerSelection($status=null, $keyword=null, $exclusion=null, $type=null, $offset=0, $limit=10 )
	{
		$q = Doctrine_Query::create()
				->select("prt.*, prt.name as firstName, pt.father_name as fatherName, pt.grand_father_name as grandFatherName, pt.full_name as fullName, prt.participant_leader_id as leaderID, prt.project_no as projectNo, prt.vat_number as vatNo, prt.status_id as partyStatus, prt.campus_id, campusID, prt.alias as partyAlias, prt.parent_id as parentID, prt.token_id as tokenID, prt.participant_type as typeID, prtcnt.mobile_number as mobileNo, prtcnt.phone_number as phoneNo, prtcnt.pobox as pobox, prtcnt.email as email, prtcnt.website as website, cmps.name as campusName, pt.alias as parentAlias")
				->from("Participant prt") 
				->leftJoin("prt.Participant pt") 
				->leftJoin("prt.participantContacts prtcnt")
				->leftJoin("prt.Campus cmps")
				->offset($offset)
				->limit($limit)
				->where("prt.participant_type <> ? AND prt.participant_type <> ? AND prt.participant_type <> ? AND prt.participant_type <> ? AND prt.participant_type <> ? ", array(ParticipantCore::$EMPLOYEE, ParticipantCore::$SECTION, ParticipantCore::$COMPANY,ParticipantCore::$DRIVER, ParticipantCore::$OTHER));
				if(! is_null($status))
					$q = $q->andWhere("prt.status_id=?", $status);
				if(! is_null($type))
					$q = $q->andWhere("prt.participant_type=?", $type);
				if(!is_null($keyword) )
					$q = $q->andWhere("prt.name LIKE ? AND prt.project_no LIKE ? AND prt.alias LIKE ?", array( $keyword, $keyword, $keyword));
					
				$q = $q->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processTaskParticipantSelection($task_id, $token_id, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("tskprt.*, prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName ")
			->from("TaskParticipant tskprt") 
			->innerJoin("tskprt.Participant prt on tskprt.participant_id = prt.id")
			->offset($offset)
			->limit($limit)
			->where('tskprt.task_id = ? AND tskprt.token_id = ?', array($task_id, $token_id))
			->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processTaskAttachmentSelection ($task_id, $token_id, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("tskatt.*, tskatt.reference_number as referenceNo, tskatt.certificate_type as certificateTypeID, tskatt.num_pages as noOfPages ")
			->from("TaskAttachment tskatt") 
			->offset($offset)
			->limit($limit)
			->where('tskatt.task_id = ? AND tskatt.token_id = ?', array($task_id, $token_id))
			->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processCandidateVehicleSelection ($type=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		return VehicleTable::processSelection ( $is_departed, $is_returned, false, $exclusion, $type, $status, $keyword, $offset, $limit) ; 
	}
	
	public static function processCandidateDriverSelection($task_id, $token_id, $offset=0, $limit=10, $keyword=null, $parent_id, $type_id=null) 
	{
		$task = self::processObject ( $task_id, $token_id );
		$parent_id = $task->ownerID;
		return DriverTable::processSelection( $offset, $limit, $keyword, $type_id, $parent_id, false); 
	}
	
	public static function processCreateTaskOrder ($task_id, $token_id, $vehicle_id, $driver_id, $description, $date )
	{
		return AssignmentOrderTable::processCreate ($task_id, $token_id, $vehicle_id, $driver_id, $description, $date);
	}
	
	public static function processTaskOrderSelection ($task_id, $token_id, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		return AssignmentOrderTable::processSelection($task_id, $token_id, $status, $keyword, $offset, $limit) ;
	}
	public static function processRevertDriver($task_id, $token_id, $order_id, $vehicle_id)
	{
		return AssignmentOrderTable::processRevertDriver($task_id, $token_id, $order_id, $vehicle_id);
	}
	
	public static function processCreateTaskAttachment ( $task_id, $token_id, $certificate_type, $ref_no, $num_pages, $folder_stored, $description)
	{
		try {
			//$refer_no = trim($ref_no);
			//if(is_null($refer_no))
				//return false;
				
			$att = new TaskAttachment ();
			$att->task_id = $task_id;
			$att->token_id = $token_id;
			$att->certificate_type = $certificate_type;
			$att->reference_number = trim($ref_no);
			$att->num_pages = trim($num_pages);
			$att->folder_stored = trim($folder_stored);
			$att->description = trim($description);
			$att->save();
			
			return true;
		}
		catch ( Exception $e) 
		{
			return false;
		}
		
	}
	
	public static function processCreateTaskParticipant ( $task_id, $token_id, $participant_id, $participant_role, $description)
	{
		try {
				
			$prt = new TaskParticipant ();
			$prt->task_id = $task_id;
			$prt->token_id = $token_id;
			$prt->participant_id = $participant_id;
			$prt->participant_role = $participant_role;
			$prt->description = trim($description);
			$prt->save();
			
			 
			return true;
		}
		catch ( Exception $e) 
		{
			return false;
		}
		
	}
	
	public static function processComplete ( $task_id, $token_id)
	{
		try {
			$current_date = $date = date('Y/m/d', time());
			$task = 	self::processObject($task_id, $token_id);
			$task->effective_date = $current_date;
			$task->end_date = $current_date;
			$task->status_id = TaskCore::$COMPLETED;
			$task->save();
			return true;
		}
		catch ( Exception $e) {
			return false;
		}
	}
	public static function getInstance()
	{
		return Doctrine_Core::getTable('AssignmentTask');
	}
}
