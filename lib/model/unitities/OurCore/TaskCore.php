<?php 
class TaskCore {
	
	public static $REGISTRATION= 1; 
	public static $FLEET= 2; 
	public static $ASSIGNMENT= 3; 
	public static $FUELING= 4; 
	public static $RETURN= 5;
	public static $ALL_TASK_TYPES= array ( 1 => "Registration", 2 => "Fleet", 3 => "Assignment", 4 => "Fueling",  5 => "Return");

	public static function processTaskTypeID ( $value ) {
        try {
            foreach( self::$ALL_TASK_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
            //throw new OutOfBoundException(" '$value'ዘይፍቀድ. "); 	
        } catch ( Exception $e ) {
            return null; 
        }
	}
	
	public static function processTaskTypeValue ($id )
	{
        try {
            foreach( self::$ALL_TASK_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
        } catch ( Exception $e ) {
            return null; 
        }
	}
	 
	 

	public static $ACTIVE = 1;
	public static $ONFIELD = 2;
	public static $ONMAINTENANCE = 3; 
	public static $RETURNED = 4;
	public static $COMPLETED = 5;
	public static $ALL_TASK_STATUS_TYPES= array ( 1 => "Active", 2 => "On Field" ,  3 => "On Maintenance", 4 => "Returned", 5 => "Completed"  );

	public static function processTaskStatusTypeID ( $value ) {
        try {
            foreach( self::$ALL_TASK_STATUS_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null;
            //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e ) {
            return null; 
        }        
	}
	
	public static function processTaskStatusTypeValue ( $id ){
        try {
            foreach( self::$ALL_TASK_STATUS_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null;
            //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ  "); 
        } catch ( Exception $e ) {
            return null; 
        }    
	}
	
	public static function processTaskTypeIcon ($taskType) 
	{
		switch($taskType) {			
			case self::$FUELING:
				return 'fueling';
			break;
			case self::$ASSIGNMENT:
				return 'assignment';
			break;
			case self::$RETURN;
				return 'return';
			break;
			case self::$REGISTRATION:
				return 'registration';
			break;
			case self::$TRANSFER:
				return 'transfer';
			break; 
			default:
				return 'other';
		}
	}
	
	public static function processTaskStatusIcon ($taskStatus) {
		
		switch($taskStatus) {			
			case self::$ACTIVE:
				return 'active';
			break;
			case self::$ONFIELD:
				return 'on_field';
			break;
			case self::$ONMAINTENANCE;
				return 'on_maintenance';
			break;
			case self::$RETURNED:
				return 'returned';
			break;
			case self::$COMPLETED:
				return 'completed';
			break;
		}

	}
	
	public static function processTaskStatusTypeIcons($taskType, $taskStatus) {
	
		return self::processTaskTypeIcon($taskType).'_'.self::processTaskStatusIcon($taskStatus);
	}
}
