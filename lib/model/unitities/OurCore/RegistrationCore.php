<?php

class RegistrationCore {
    public static $IN_STORE = 1; 
    public static $OUT_IN_USE= 2; 
    public static $ALL= array ( 1=> "ኣብ መኽዘን ዘሎ", 2=>"ኣብ ግልጋሎት ዘሎ"); 
    
	public static function getID ( $value ) {
        try {
            foreach( self::$ALL as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
             return null; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        } catch ( Exception $e){
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
             //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ  "); 
        } catch ( Exception $e) {
            return null; 
        }
	}
	public static function getDefaultID() {
		return self::$IN_STORE; 
	}
	
	public static function getDefaultValue () {
		return self::getValue(self::getDefaultID()); 
	}
}

