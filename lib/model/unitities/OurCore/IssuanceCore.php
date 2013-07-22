<?php

class IssuanceCore {
    public static $ISSUANCE_FOR_USE= 1; 
    public static $ISSUANCE_FOR_RENT= 2; 
    public static $ISSUANCE_TO_GIFT= 3; 
    public static $ISSUANCE_TO_DISPOSE= 4; 
    public static $ISSUANCE_OF_BORROWED= 5; 
    public static $ISSUANCE_FOR_MAINTENANCE= 6; 
    public static $ISSUANCE_OF_TEMPORARY_STOCK=7; 
    public static $OTHER= 8; 

    public static $ALL= array ( 1=> "ዕደላ  ንብረት ንምጥቓም  ", 2 => "ዕደላ  ንብረት ንክራይ ", 3 => "ዕደላ  ንብረት ንውህብቶ ", 4 =>"ዕደላ  ንብረት ንምውጋድ ", 5 => "ዕደላ  ንብረትብልቓህ ", 6=> "ዕደላ  ንብረት ንፅገና ",  7=>"ዕደላ  ንብረት ካብ ግዚያዊ መኽዘን ", 8=> "ካሊእ "  ) ; 
    
    public static function getID ( string $value ) {
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
	
	public static function getValue ( int $id ){
        try{
            foreach( self::$ALL as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
             return null; 
             //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ ");             
        } catch ( Exception $e ) {
            return null;
        }

	}
	
	public static function getDefaultID() {
		return self::$ISSUANCE_FOR_USE; 
	}
	
	public static function getDefaultValue () {
		return self::getValue(self::getDefaultID()); 
	}
}




