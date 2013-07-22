<?php 
class TransferCore {
	public static $CUSTODY= 1; 
	public static $OWNERSHIP= 2; 
	public static $OWNERSHIP_AND_CUSTODY= 3; 
	public static $OTHER_TYPE= 4; 
	public static $ALL_TRANSFER_TYPES= array( 1=> "ዓቃብነት", 2=> "ዋንነት", 3 => "ዋንነትን ዓቃብነትን", 4=> "ካሊእ"); 
	
	public static function getDefaultTransferTypeID( ){
		return self::$CUSTODY; 
	}
	public static function getDefaultTransferTypeValue() {
		return self::getTransferTypeValue(self::$CUSTODY); 
	}
	
	public static function getTransferTypeID ( $value ) {
        try{
            foreach( self::$ALL_TRANSFER_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null;             
        } catch (Exception $e ) {
            return null; 
        }

        //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function getTransferTypeValue ( $id ){
        try{
            foreach( self::$ALL_TRANSFER_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
            
        } catch ( Exception $e ) {
            return null; 
        }
        //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}

	// Transfer purposes
	public static $USAGE =  1; 
	public static $PURCHASE =  2; 
	public static $SALE = 3 ; 
	public static $DONATION =  4; 
	public static $RENT = 5 ; 
	public static $DISPOSAL = 6 ; 
	public static $TEMPORARY_STORAGE =  7; 
	public static $MAINTENANCE = 8 ; 
	public static $STORAGE= 9;
    public static $OTHER_PURPOSE=10;
	public static $ALL_TRANSFER_PURPOSE_TYPES= array (  1=> "ንምጥቓም ",    2=>"ዕደጋ ",  3=>"መሸጣ",  4=>"ውህብቶ ",  5=>"ክራይ ",  6=>" ምውጋድ ",  7=>"ግዚያዊ መኽዝን ",  8=>" ፅገና ", 9 =>"ንኽዝን" ,10 =>"ካሊእ" ); 
	
	public static function getDefaultTransferPurposeID ( ) {
		return self::$USAGE;
	}
	public static function getDefaultTransferPurposeValue( ) {
		return self::getTransferPurposeValue(self::USAGE); 
	}
	public function getTransferPurposeID ( $value ) {
        try {
            foreach( self::$ALL_TRANSFER_PURPOSE_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
             return null; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	            
        } catch ( Exception $e) {
            return null; 
        }
	}
	
	public function getTransferPurposeValue ( $id ){
        try {
            foreach( self::$ALL_TRANSFER_PURPOSE_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null;
            //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
        } catch ( Exception $e ) {
            return null; 
        }
	}
}
