<?php
class ParticipantCore {
    public static $ACTIVE= 1; 
    public static $BLOCKED= 2; 
    public static $BLACK_LISTED= 3; 
    public static $SUSPENDED= 4; 
    public static $IN_ACTIVE= 5; 
    public static $OTHER= 6; 

    public static $ALL= array ( 1=> "ንጡፍ ", 2 => "ዝተኸልከለ ", 3 => "ኣብ ፀሊም መዝገብ ዝሰፈረ ", 4 =>"ዝተኣገደ ", 5 => "ዘይንጡፍ ", 6 => "ካልእ"  ) ; 
    
    public static function getID (  $value ) {
       try{
            foreach( self::$ALL as $key=> $item ){
                if( strcmp($item, $value) == 0 )
                    return $key; 
            }
             return null; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e ) {
            return null; 
        }
	}
	public static function getValue (  $id ){
       try{
            foreach( self::$ALL as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
             return "Other Status Type"; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e ) {
            return "Unknown Status Type";  
        }
		 //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}
	
	public static function getDefaultID() {
		return self::$ACTIVE; 
	}
	
	public static function getDefaultValue () {
		return self::getValue(self::$ACTIVE); 
	}
	public static $PUBLIC_BODY= 1; 
	public static $INSTITUTION= 2; 
	public static $SECTOR= 3; 
	public static $NGO	= 4; 
	public static $DEPARTMENT= 5; 
	public static $SUB_DEPARTMENT= 6; 
	public static $PROJECT= 7; 
	public static $EMPLOYEE=  8; 
	public static $CITIZEN=  9; 
	public static $COMITTEE=  10; 	
	public static $PROCESS= 11; 
	public static $OTHER_PARTICIPANT= 12;  
	public static $ROOM= 13;  
	public static $SHELF= 14;  
    public static $OTHER_PARTICIPANT_TYPE= 15; 
	public static $ALL_PARTICIPANT_TYPES= array ( 1=> "ቤት ዕዮ", 2=> "ትካል" ,3=> "ሴክተር" , 4=> "NGO",  5=> "ዲፓርትመንት", 6=> "ንዑስ ዲፓርትመን", 7=> "ፕሮጀክት" , 8=> "ሰራሕተኛ " ,9=> "ዜግነት" ,10=> "ኮሚቴ", 11=> "ህንፃ" , 12=> "Store", 13=> "ክፍሊ", 14=> "ሸልፍ", 15 => "ካልእ ዓይነት ተሳታፋይ" );
	public static $ALL_LIST= array ( 1=> "ቤት ዕዮ", 2=> "ትካል" ,3=> "ሴክተር" , 4=> "NGO",  5=> "ዲፓርትመንት", 6=> "ንዑስ ዲፓርትመን", 7=> "ፕሮጀክት" , 8=> "ሰራሕተኛ " ,9=> "ዜግነት" ,10=> "ኮሚቴ", 15 => "ካልእ ዓይነት ተሳታፋይ" );
	public static $AQUISITION_PARTICIPANT_TYPES= array ( 1=> "ቤት ዕዮ ", 2=> "ትካል" ,3=> "ሴክተር" , 4=> "NGO",  5=> "ዲፓርትመንት", 6=> "ንዑስ ዲፓርትመንት", 7=> "ፕሮጀክት " ,8=> "ሰራሕተኛ " ,9=> "ዜጋ",10=> "ኮሚቴ", 15 => "ካልእ ዓይነት ተሳታፋይ" );
	public static $ISSUANCE_PARTICIPANT_TYPES= array ( 1=> "ቤት ዕዮ ", 2=> "ትካል" ,3=> "ሴክተር" , 4=> "NGO",  5=> "ዲፓርትመንት", 6=> "ንዑስ ዲፓርትመንት", 7=> "ፕሮጀክት " ,8=> "ሰራሕተኛ " ,9=> "ዜጋ",10=> "ኮሚቴ", 15 => "ካልእ ዓይነት ተሳታፋይ" );



    public static $parCollaborators; 
    public static function getParticipantID (  $value ) {
       try{
            foreach( self::$ALL_PARTICIPANT_TYPES as $key=> $item ){
                if( strcmp($item, $value) == 0 )
                    return $key; 
            }
			
             return 15; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e ) {
            return 15; 
        }
	}
	
	public static function getParticipantValue  (  $id ){
       try{
            foreach( self::$ALL_PARTICIPANT_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
             return "Other Participant Type"; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e ) {
             return "Other Participant Type"; 
        }
		 //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}
	
	public static function getDefaultParticipantID() {
		return self::$PUBLIC_BODY; 
	}
	
	public static function getDefaultParticipantValue () {
		return self::getParticipantValue(self::getDefaultParticipantID() ); 
	}    
    public static function hasFilledCollaborators() {
        try{
            return ( count ( self::$parCollaborators ) >= 1 ? true :false ); 
        } catch ( Exception $e ) {
            return false; 
        }
    }
    public static function fillCollaborators () {
        self::$parCollaborators= array(); 
        self::$parCollaborators[]=ParticipantTable::getInstance() ; 
        self::$parCollaborators[]=EmployeeParticipantTable::getInstance() ; 
        self::$parCollaborators[]=ProjectParticipantTable::getInstance() ; 
        self::$parCollaborators[]=CitizenParticipantTable::getInstance() ; 
        self::$parCollaborators[]=InstitutionParticipantTable::getInstance() ; 
        self::$parCollaborators[]=NGOParticipantTable::getInstance() ; 
        self::$parCollaborators[]=CommitteeParticipantTable::getInstance() ; 
        self::$parCollaborators[]=StoreParticipantTable::getInstance() ; 
        self::$parCollaborators[]=BuildingTable::getInstance() ; 
        self::$parCollaborators[]=ParticipantPBLocationTable::getInstance() ; 
        self::$parCollaborators[]=ParticipantContactAddressTable::getInstance() ; 
        self::$parCollaborators[]=ParticipantLocationTable::getInstance() ; 
        self::$parCollaborators[]=ParticipantCodeTable::getInstance() ; 
        self::$parCollaborators[]=PublicbureauParticipantTable::getInstance() ; 
        self::$parCollaborators[]=TaskPlayerSettingTable::getInstance() ; 
        self::$parCollaborators[]=UserTable::getInstance() ; 
        return self::$parCollaborators; 
    }
    public static function queryAllCollaborators() {
        if( !  self::hasFilledCollaborators() )
            self::fillCollaborators(); 

        return self::$parCollaborators;  
    }
	public static function queryViableCollaborators ($participant) {
		$temp=array(); 
		$allColls= self::queryAllCollaborators(); 
		if( ! $allColls )
			return null; 
		try {
			foreach( $allColls as $collaborator )
				if( ($collaborator) && ($collaborator->canCollaborate($participant) ) )
					$temp[]= $collaborator;
			return ( count($temp) <= 0 ? null: $temp); 
		} catch ( Exception $e ) {
			return null; 
		}
	}
		public static function queryAllAspectCollaborators () {
			$temp= array(); 
			$temp[]=ParticipantPBLocationTable::getInstance() ; 
			$temp[]=ParticipantContactAddressTable::getInstance() ; 
			$temp[]=ParticipantCodeTable::getInstance() ; 
			$temp[]=PublicbureauParticipantTable::getInstance() ; 
			$temp[]=TaskPlayerSettingTable::getInstance() ; 
			$temp[]=UserTable::getInstance() ; 
			return $temp; 
		}
		public static function queryAspectCollaborators ( $participant ) {
			$temp=array(); 
			$allColls= self::queryAllAspectCollaborators(); 
			if( ! $allColls )
				return null; 
			try {
				foreach( $allColls as $collaborator )
					if( ($collaborator) && ($collaborator->canCollaborate($participant) ) )
						$temp[]= $collaborator;
				return ( count($temp) <= 0 ? null: $temp); 
			} catch ( Exception $e ) {
				return null; 
			}			
		}
		public static function hasAspectCollaborators ( $participant ) {
			if(! $participant )
				return false; 
			return ( ! self::queryAspectCollaborators($participant) ? false : true ); 
		}
		public static function queryAllGrossCollaborators () {
			$temp= array(); 
			$temp[]=EmployeeParticipantTable::getInstance() ; 
			$temp[]=ProjectParticipantTable::getInstance() ; 
			$temp[]=CitizenParticipantTable::getInstance() ; 
			$temp[]=InstitutionParticipantTable::getInstance() ; 
			$temp[]=NGOParticipantTable::getInstance() ; 
			$temp[]=CommitteeParticipantTable::getInstance() ; 
			$temp[]=StoreParticipantTable::getInstance() ; 
			$temp[]=BuildingTable::getInstance() ; 
			$temp[]=TaskPlayerSettingTable::getInstance() ; 
			$temp[]=UserTable::getInstance() ; 
			return $temp; 			
			
		}
		public static function queryGrossCollaborators ($participant ) {
			if( ! $participant )
				return null; 
			try{
				return ($participant->isPublicBody() ? self::queryAllGrossCollaborators ()  : null );
			} catch ( Exception $e ) {
				return null; 
			}
		}
		public static function hasGrossCollaborators ( $participant ) {
			if(! $participant )
				return false; 
			return ( ! self::queryGrossCollaborators($participant) ? false : true ); 
		}
		
		public static function getParticipantTypeIcon ($type) {
    
		if(is_null($type))
			return 'other';
			
		switch($type) {			
			case self::$PUBLIC_BODY:
				return 'public_body';
			break;
			case self::$INSTITUTION:
				return 'institution';
			break;
			case self::$SECTOR;
				return 'sector';
			break;
			case self::$NGO:
				return 'ngo';
			break;
			case self::$DEPARTMENT:
				return 'department';
			break;
			case self::$SUB_DEPARTMENT:
				return 'sub_department';
			break;			
			case self::$PROJECT:
				return 'project';
			break;			
			case self::$ROOM:
				return 'room';
			break;			
			case self::$SHELF:
				return 'shelf';
			break;			
			case self::$EMPLOYEE:
				return 'employee';
			break;			
			case self::$CITIZEN:
				return 'citizen';
			break;			
			case self::$COMITTEE:
				return 'committee';
			break;			
			default:
				return 'other_participant';
			break;
		}
		
	}
	
	public static function getParticipantStatusIcon ($status) {
		
		switch($status) {			
			case self::$ACTIVE:
				return 'active';
			break;
			case self::$PENDING:
				return 'pending';
			break;
			case self::$CANCELLED;
				return 'trashed';
			break;
			case self::$POSTPOND:
				return 'postpond';
			break;
			case self::$COMPLETED:
				return 'completed';
			break;
		}
		
	}
	
	public static function getTaskTypeStatusIcon($taskType, $taskStatus) {
	
		return self::getTaskType($taskType).'_'.self::getTaskStatus($taskStatus);
	}
}


