<?php


class CategoryCharacterization {
	public static $FIXED_ASSET= 1; 
	public static $SUPPLY= 2; 
	public static $NEITHER_FIXED_SUPPLY= 3; 
	public static $OTHER= 4; 
	public static $ALL= array (1 => "Fixed Asset ", 2 => "Supply ", 3 => "Neither Fixed Nor Supply ", 4 => "Other"); 
    //, 5 => "ቕጥዓቕዒ"
	
	public static function fetchID ( $value ) {
		try{
			foreach( self::$ALL as $key=> $item ) {
					if( strcmp($item, $value) == 0 )
						return $key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
		 //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function fetchValue ( $id ) {
		try{
			foreach( self::$ALL as $key=> $item ){
					if( $key == $id )
						return $item; 
			}			
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}

		 //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}	
	public static function fetchDefaultID() {
		return self::$FIXED_ASSET; 
	}
	
	public static function fetchDefaultValue () {
		return self::fetchValue(self::fetchDefaultID()); 
	}
    
    public static $MODE_CONCRETE=0; 
    public static $MODE_GROUP=1; 
    public static $MODE_NONE=2; 
    
}
