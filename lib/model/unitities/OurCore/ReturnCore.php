<?php

class ReturnTaskCore {
	public static $USED=1; 
	public static $RENTED= 2; 
	public static $BORROWED= 3; 
	public static $MAINTAINED= 4; 
	public static $OTHER= 5; 
	public static $ALL_RETURN_TYPES= array (1=> "ዘገልገለ ",  2 => "ዝተካረየ " , 3 => "ብልቓሕ ዝተረኸበ " , 4 => "ዝተፀገነ", 5 => "ካሊእ " ); 
	
	public static function getDefaultID( ){
		return self::$USED; 
	}
	public static function getDefaultValue() {
		return self::getValue(self::$USED); 
	}
	
	public static function getTypeID ( $value ) {
        try {
            foreach( self::$ALL_RETURN_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
            
        } catch ( Exception $e ) {
            return null; 
        }
		//throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function getTaskParticipantTypeValue ( $id ){
        try {
            foreach( self::$ALL_RETURN_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null;
        } catch ( Exception $e ) {
            return null; 
        }
        //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}	
}
