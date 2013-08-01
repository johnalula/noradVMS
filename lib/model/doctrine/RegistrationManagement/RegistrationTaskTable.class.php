<?php

/**
 * RegistrationTaskTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class RegistrationTaskTable extends PluginRegistrationTaskTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object RegistrationTaskTable
     */
     
	public static function processCreate ( $mode, $date, $description, $ref ) 
	{      
        $nw;
        try{
				
				$token = trim($date).trim($ref).rand('11111', '99999');
				$nw= new RegistrationTask(); 
				$nw->registration_mode = $mode  ; 
				$nw->token_id = md5($token)  ; 
				$nw->description = $description  ;  
				$nw->status_id = TaskCore::$ACTIVE; 
				$nw->start_date = $date ;   
				$nw->save(); 
				$task_id= $nw->id; 
		
            return $nw; 
        } catch ( Exception $e) {
            return null; 
        }
	}
	
	public static function processObject ( $_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select("tsk.*, tsk.token_id as tokenID, tsk.reference_no as referenceNo, tsk.start_date as startDate ")
			->from("Task tsk") 
			//->leftJoin("usr.participantUser prt on usr.particiapnt_id = prt.id")
			//->leftJoin("usr.userGroups grp on usr.group_id = grp.id")
			//->leftJoin("usr.userModulePermissions usrper on usrper.user_id = usr.id")
			//->leftJoin("grp.groupModulePermissions per on per.group_id = grp.id")
			->where("tsk.id=? AND tsk.token_id=?", array($_id, $token_id))
			->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
	
	public static function processSelection($username=null, $group_id=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("usr.*, usr.username as userName, usr.permission_mode as userPermissionMode, ((SELECT COUNT(grpper.id) FROM Permission grpper WHERE grpper.group_id = grp.id) > 0) AS hasPermission")
			->from("User usr") 
			->leftJoin("usr.participantUser prt on usr.particiapnt_id = prt.id")
			->leftJoin("usr.userGroups grp on usr.group_id = grp.id")
			->leftJoin("usr.userModulePermissions usrper on usrper.user_id = usr.id")
			->leftJoin("grp.groupModulePermissions per on per.group_id = grp.id")
			->offset($offset)
			->limit($limit)
			->execute( ); 

	return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	
	public static function getInstance()
	{
	  return Doctrine_Core::getTable('RegistrationTask');
	}
    
}
