<?php 

class InspectionCore {
    public static $NEW=1;
    public static $USED=2; 
    public static $MIXED=3; 

    public static $ALL= array ( 1=> "New" ,2=>"Used", 3=>"New and Used" );
    
	public static function getDefaultID () {
		return self::$NEW; 
	}
	public static function getDefaultValue (){
		return self::getValue(self::getDefaultID ()); 
	}
	public static function getID ( $value ) {
        try{
            foreach( self::$ALL as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
        } catch ( Exception $e ) {
            return null; 
        }
	}
	
	public static function getValue ( $id ){
        try {
            foreach( self::$ALL as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
        } catch ( Exception $e ) {
            return null; 
        }
	}	
	
	// physicalStatus
    
	public static $DIRECTLY_USABLE_PHYSICAL_STATUS = 1; 
	public static $NEEDS_MAINTENANCE_PHYSICAL_STATUS = 2; 
	public static $NEEDS_DISPOSAL_PHYSICAL_STATUS = 3; 
    public static $UNKNOWN_PHYSICAL_STATUS = 4; 
	public static $OTHER_PHYSICAL_STATUS = 5; 
	public static $ALL_PHYSICAL_STATUSES= array ( 1=> "ብቕጥታ ኣብ ጥቕሚ ዝውዕል ንብረት" , 2 => "ፅገና ዝደሊ ንብረት", 3=> "ዝውገድ ንብረት", 4=>"ኣይፍለጥን" ,  5=> "ካሊእ ኩነታት  ዓይነት ንብረት"); 	
	
	public static function getDefaultPhysicalStatusID () {
		return self::$DIRECTLY_USABLE_PHYSICAL_STATUS; 
	}
	public static function getDefaultPhysicalStatusValue (){
		return self::getDefaultPhysicalStatusValue(self::getDefaultPhysicalStatusID()); 
	}
	public static function getPhysicalStatusID ( $value ) {
        try {
            foreach( self::$ALL_PHYSICAL_STATUSES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
        } catch ( Exception $e ) {
            return null; 
        }
	}
	
	public static function getPhysicalStatusValue ( $id ){
        try {
            foreach( self::$ALL_PHYSICAL_STATUSES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
             return null; 
        } catch ( Exception $e ) {
            return null; 
        }
	}		
	
	public static $QUANTITATIVE_INSPECTION= 1; 
	public static $QUALITATIVE_INSPECTION= 2; 
	public static $OTHER_INSPECTION= 3; 
	public static $ALL_INSPECTIONS= array ( 1=> "ቁፅፅር ብበዝሒ", 2=> "ቁፅፅር ብፅርየት", 3=> "ካሊእ ዓይነት ቁፅፅር"); 
	
	public static function getDefaultInspectionTypeID () {
		return self::$QUANTITATIVE_INSPECTION; 
	} 
	public static function getDefaultInspectionTypeValue (){
		return self::getDefaultInspectionTypeValue(self::getDefaultInspectionTypeValue()); 
	}
	public static function getInspectionTypeID ( $value ) {
        try {
            foreach( self::$ALL_INSPECTIONS as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ ");             
        } catch ( Exception $e ) {
                return null; 
        }
	}
	
	public static function getInspectionTypeValue ( $id ){
        try {
            foreach( self::$ALL_INSPECTIONS as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
             return null;
        } catch ( Exception $e ) {
                return null; 
        }        
	}			
}
