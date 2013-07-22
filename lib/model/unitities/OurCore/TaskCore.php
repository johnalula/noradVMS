<?php 
class TaskCore {
	//TaskTypes
	public static $REGISTRATION= 1; 
	public static $ACQUISITION= 2; 
	public static $TEMPORARY_ACQUISITION= 3; 
	public static $ISSUANCE= 4; 
	public static $RETURN= 5; 
	public static $INSPECTION= 6; 
	public static $MAINTENANCE= 7; 
	public static $TRANSFER= 8; 
	public static $VALUATION= 9; 
	public static $DEPRECIATION= 10; 
	public static $MOVEMENT= 11;
	public static $DISPOSAL=  12; 
	public static $ALL_TASK_TYPES= array ( 1=> "ንብረት ምዝገባ", 2=> "ንብረት ቕበላ" ,3=> "ግዚያዊ ንብረት ቕበላ" , 4=> "ንብረት ዕደላ",  5=> "Return", 6=> "ንብረት ቁፅፅር ", 7=> "ንብረት ፅገና " ,8=> " ንብረት ዝ ውውር " , 9=> "ተመን ግምት ንብረት ", 10=> "እርጋን ቕነሳ ንብረት ", 11=> "ንብረት ምንቅስቓስ ",12=> "ንብረት ምውጋድ " );
	public static $ALL_TASK_TYPE_ALIAS= array ( 1=> "ምዝገባ", 2=> "ቕበላ" ,3=> "ግዚያዊ ቕበላ" , 4=> "ዕደላ",  5=> "Return", 6=> "ቁፅፅር ", 7=> "ፅገና " ,8=> " ዝ ውውር " , 9=> "ተመን ግምት", 10=> "እርጋን ቕነሳ", 11=> "ምንቅስቓስ ",12=> "ምውጋድ " );

	public static function getTaskTypeID ( $value ) {
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
	
	public static function getTaskTypeValue ($id ){
        try {
            foreach( self::$ALL_TASK_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
        //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ. ");             
        } catch ( Exception $e ) {
            return null; 
        }
	}
	public static function getTaskAlias ($id ){
        try {
            foreach( self::$ALL_TASK_TYPE_ALIAS as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
        //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ. ");             
        } catch ( Exception $e ) {
            return null; 
        }
	}
	// Task Status Types
	public static $ACTIVE= 1;
	public static $PENDING= 2;
	public static $CANCELLED= 3;
	public static $POSTPOND= 5;
	public static $COMPLETED= 4;
	public static $ALL_TASK_STATUS_TYPES= array ( 1 => "ንጡፍ ስራሕ", 2 => "ዘይተፈፀመ ስራሕ" ,  3 => "ዝተሰረዘ ስራሕ", 5 =>"ከይተፈፀመ ዝተረፈ ስራሕ", 4=>  "ዝተውደእ ስራሕ"  );

	public static function getTaskStatusTypeID ( $value ) {
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
	
	public static function getTaskStatusTypeValue ( $id ){
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
	
    // Task Priority Types
    public static $HIGH_PRIORITY= 1; 
    public static $MEDIUM_PRIORITY= 2; 
    public static $LOW_PRIORITY= 3;  
    public static $ALL_TASK_PRIORITY_TYPES= array( 1 => "ዝለዓለ " , 2 => "ማእኸላይ" , 3 => "ዝተሓተ"); 

	public static function getTaskPriorityTypeID ( $value ) {
        try {
            foreach( self::$ALL_TASK_PRIORITY_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null;
            //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e ) {
            return null; 
        }
	}
	
	public static function getTaskPriorityTypeValue ( $id ){
        try {
            foreach( self::$ALL_TASK_PRIORITY_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
            return null; 
        } catch ( Exception $e ) {
            return null; 
        }        
	}   
	public static function getDefaultTaskPriorityTypeID( ){
		return self::$HIGH_PRIORITY; 
	}
	public static function getDefaultTaskPriorityTypeValue() {
		return self::getTransferTypeValue(self::getDefaultTaskPriorityTypeID( )); 
	}
	
	public static function getTaskTypeIcon ($taskType) {
		
		 
		
		switch($taskType) {			
			case self::$ACQUISITION:
				return 'acquisition';
			break;
			case self::$ISSUANCE:
				return 'issuance';
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
			case self::$DISPOSAL:
				return 'disposal';
			break;
			default:
				return 'other';
		}
	}
	
	public static function getTaskStatusIcon ($taskStatus) {
		
		switch($taskStatus) {			
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
				return 'postponed';
			break;
			case self::$COMPLETED:
				return 'completed';
			break;
		}

	}
	
	public static function getTaskStatusTypeIcons($taskType, $taskStatus) {
	
		return self::getTaskTypeIcon($taskType).'_'.self::getTaskStatusIcon($taskStatus);
	}
}
