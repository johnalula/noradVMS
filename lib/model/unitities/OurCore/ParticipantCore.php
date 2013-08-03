<?php
class ParticipantCore {
    	public static $OFFICE = 1; 
		public static $COLLEGE = 2; 
		public static $INSTITUTION = 3; 
		public static $CENTER	= 4; 
		public static $DEPARTEMENT = 5; 
		public static $SECTION = 6; 
		public static $PROJECT = 7; 
		public static $EMPLOYEE =  8; 
		public static $DRIVER =  9; 
		public static $COMITTEE =  10; 	
		public static $COMPANY = 11;  
		public static $PASSENGER = 12;
		public static $OTHER = 13;  
		public static $ALL_PARTICIPANTS = array ( 1 => "Office", 2 => "College" , 3 => "Institution" , 4 => "Center",  5 => "Department", 6 => "Section", 7 => "Project" , 8 => "Eployee ", 9 => "Driver",10 => "Committee", 11 => "Company" , 12=> "Passanger", 13 => "Other");
		
		public static function fetchParticipantID ( $value ) 
		{
			try {
					foreach( self::$ALL_PARTICIPANTS as $key=> $participant ){
						if( strcmp($participant, $value) == 0 )
                    return $key; 
            }
			
             return $OTHER; 
        } catch ( Exception $e ) {
            return $OTHER; 
        }
		}
	
		public static function fetchParticipantValue  (  $id )
		{
			try{
					foreach( self::$ALL_PARTICIPANTS as $key=> $participant ){
                    if( $key == $id )
                        return $participant; 
            }
             return $OTHER; 
        } catch ( Exception $e ) {
             return $OTHER; 
        }
		}
	
		public static function fetchDefaultParticipantID() 
		{
			return self::$OFFICE; 
		}
		
		public static $ACTIVE =  1; 
		public static $BLOCKED =  2; 	
		public static $TERMINATED = 3;  
		public static $OTHER_STATUS = 4;  
	
		public static $ALL_STATUSES = array ( 1 => "Active", 2 => "Blocked" , 3 => "Terminated" , 4 => "Other Status");
			
		public static function fetchParticipantStatusID ( $value ) 
		{
			try {
					foreach( self::$ALL_STATUSES as $key=> $status ){
						if( strcmp($status, $value) == 0 )
						  return $key; 
				}
			
				 return $OTHER; 
		  } catch ( Exception $e ) {
				return $OTHER; 
		  }
		}
	
		public static function fetchParticipantStatusValue  (  $id )
		{
			try{
					foreach( self::$ALL_STATUSES as $key=> $status ){
					  if( $key == $id )
							return $status; 
				}
				 return $ACTIVE; 
		  } catch ( Exception $e ) {
				 return $ACTIVE; 
		  }
		}
		
		public static function fetchDefaultParticipantStatusID() 
		{
			return self::$ACTIVE; 
		}
		
		public static $PRESIDENT = 1;
		public static $DIRECTOR = 2;
		public static $DEAN = 3;
		public static $HEAD = 4;
		public static $PORJECT_LEADER = 5;
		public static $STAFF = 6;
		public static $COMMITTE_LEADER = 7;
		public static $APPROVAL = 8;
		public static $AUTHORIZE = 9;
		public static $SECTION_LEADER = 10;
		public static $VEHICLE_DRIVER = 11;
		public static $CUSTOMER = 12;
		public static $COMPANY_OWNER = 13;
		public static $PASSANGER = 14;
		public static $COORDINATOR = 15;
		public static $WITNES = 16;
		public static $DATA_INCODER = 17;
		public static $OTHER_ROLE = 18;
		public static $ALL_PARTICIPANT_ROLES = array( 1 => "President", 2 => "Director", 3 => "Dean", 4 => "Head", 5 => "Project Leader", 6 => "Staff", 7 => "Committee Leader", 8 => "Approval ", 9 => "Authorize",10 => "Section Leader", 11 => "Vehicle Driver" , 12 => "Customer", 13 => "Company Owner", 14 => "Passanger", 15 => "Cordinator", 16 => "Witnes", 17 => "Data Incoder", 18 => "Other Role");
		
		public static function fetchParticipantRoleID ( $value ) 
		{
			try {
					foreach( self::$ALL_PARTICIPANT_ROLEs as $key=> $role ){
						if( strcmp($role, $value) == 0 )
						  return $key; 
				}			
				 return true; 
		  } catch ( Exception $e ) {
				return false; 
		  }
		}
	
		public static function fetchParticipantRoleValue  (  $id )
		{
			try{
					foreach( self::$ALL_PARTICIPANT_ROLEs as $key=> $role ){
					  if( $key == $id )
							return $role; 
				}
				 return true; 
		  } catch ( Exception $e ) {
				 return false; 
		  }
		}
		
		public static function fetchDefaultParticipantRoleID() 
		{
			return self::$ACTIVE; 
		}
		
		public static function fetchParticipantIcon ($type) {
    
		if(is_null($type))
			return 'OTHER';
			
		switch($type) {			
			case self::$OFFICE:
				return 'office';
			break;
			case self::$COLLEGE:
				return 'college';
			break;
			case self::$INSTITUTION;
				return 'institution';
			break;
			case self::$CENTER:
				return 'center';
			break;
			case self::$DEPARTMENT:
				return 'department';
			break;
			case self::$SECTION:
				return 'section';
			break;			
			case self::$PROJECT:
				return 'project';
			break;			
			case self::$DRIVER:
				return 'driver';
			break;			
			case self::$COMPANY:
				return 'company';
			break;			
			case self::$EMPLOYEE:
				return 'employee';
			break;			
			case self::$PASSANGER:
				return 'passanger';
			break;			
			case self::$COMITTEE:
				return 'committee';
			break;			
			default:
				return 'other';
			break;
		}
		
	}
	
	public static function fetchParticipantStatusIcon ($status) 
	{
		if(is_null($status))
			return $OTHER;
			
		switch($status) {			
			case self::$ACTIVE:
				return 'active';
			break;
			case self::$BLOCKED:
				return 'blocked';
			break;
			case self::$TERMINATED;
				return 'terminated';
			break;
			default:
				return 'other';
			break;
		}
		
	}
	
	public static function fetchParticipantTypeStatusIcon($participant, $status) {
	
		return self::fetchParticipantIcon($participant).'_'.self::fetchParticipantStatusIcon($taskStatus);
	}
}


