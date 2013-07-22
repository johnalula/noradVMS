<?php


class CategoryCharacterization {
	public static $FIXED_ASSET= 1; 
	public static $SUPPLY= 2; 
	public static $NEITHER_FIXED_SUPPLY= 3; 
	public static $UNDER_CONSTRUCTION= 4; 
	public static $OTHER= 5; 
	public static $ALL= array (1=>"ቀዋሚ ንብረት ", 2=>"ሓላቒ ንብረት ", 3 => "ቀዋሚን  ሓላቒን ዘይኮነ ", 4=>"ኣብ ህንፀት ዝርከብ ", 5 => "ካሊእ"); 
    //, 5 => "ቕጥዓቕዒ"
	
	public static function getID ( $value ) {
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
	
	public static function getValue ( $id ) {
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
	public static function getDefaultID() {
		return self::$FIXED_ASSET; 
	}
	
	public static function getDefaultValue () {
		return self::getValue(self::getDefaultID()); 
	}
    
    public static $MODE_CONCRETE=0; 
    public static $MODE_GROUP=1; 
    public static $MODE_NONE=2; 
    
}
