<?php

class AcquisitionCore {
    public static $PURCHASED_ACQUISITION = 1; 
    public static $RETURNED_ACQUISITION= 2; 
    public static $DONATED_ACQUISITION= 3; 
    public static $OTHER= 4; 
    public static $ALL= array ( 1=> "ብዕደጋ  ዝመፀ", 2=>"ካብ ግልጋሎት ዝተመለሰ" , 3=>" ብውህብቶ ዝመፀ", 4=> "ካሊእ" ); 
    
	public static function getID ( $value ) {
        try {
            foreach ( self::$ALL as $key => $item ) {
                    if ( strcmp ( $item , $value ) == 0 )
                        return $key; 
            }
             return null;
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ ");
        } catch ( Exception $e){
            return null; 
        }
	}
	
	public static function getValue ( $id ) {
        try {
            foreach( self::$ALL as $key=> $item ) {
                    if( $key == $id )
                        return $item; 
            }
             return null; 
             //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ  "); 
        } catch ( Exception $e) {
            return null; 
        }
	}
	public static function getDefaultID ( ) {
		return self::$PURCHASED_ACQUISITION; 
	}
	
	public static function getDefaultValue ( ) {
		return self::getValue ( self::getDefaultID ( ) ); 
	}
}

