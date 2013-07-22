<?php
class DisposalCore {
	public static $TRANSFER_TO_OTHER_PARTY= 1;	
	public static $SALE_BY_BID= 2;
   public static  $SALE_BY_SALVAGE=3;
   public static  $DISMANTLE_FOR_SPAREPART=4;
	public static $SCRUBING=5;
	public static $DONATION=6;
	public static $BURNING=7;
	public static $OTHER=8;

	public static $ALL_DISPOSAL_TYPES= array ( 1 => "ንካሊእ ወገን ብምዝዋር", 2 => "መሸጣ(ብጨረታ)", 3 => "መሸጣ(ብሓራጅ)", 4 =>  "ፈታቲሕካ ንመለዋወጢ ምጥቃም", 5 => "ብምጉሓፍ(Scrub)", 6 => "ብውህብቶ",7 => "ብምቕባር/ብምቅጻል",8 => "ካሊእ" ); 
	
	public static function getDefaultDisposalTypeID( ){
		return self::$TRANSFER_TO_OTHER_PARTY; 
	}
	public static function getDefaultDisposalTypeValue() {
		return self::getValue(self::$TRANSFER_TO_OTHER_PARTY); 
	}
	
	public static function getDisposalTypeID ( $value ) {
        try{
            foreach( self::$ALL_DISPOSAL_TYPES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }          
            return null; 
        } catch (Exception $e ) {
            return null; 
        }
	}
	
	public static function getDisposalTypeValue ( $id ){
        try{
            foreach( self::$ALL_DISPOSAL_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
            
        } catch (Exception $e ) {
            return null; 
        }
		//throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}		
	
	public static $UNSERVICEABLE= 1; 
	public static $OBSOLATE=2; 
	public static $ABANDONED=3; 
	public static $SURPLUS=4; 
	public static $OTHER_REASON= 5; 
	public static $ALL_DISPOSAL_REASONS= array(1=>"ግልጋሎት ዘይህብ", 2 => "ግዘ ዝሓለፎ ", 3=>" ዝተኣገደ", 4=>" ካብ መጠን ዝሓለፈ", 5 =>"ካሊእ"); 

	public static function getDefaultDisposalReasonID( ){
		return self::$UNSERVICEABLE; 
	}
	public static function getDefaultDisposalReasonValue() {
		return self::getValue(self::$UNSERVICEABLE); 
	}
	
	public static function getDisposalReasonID ( $value ) {
        try {
            foreach( self::$ALL_DISPOSAL_REASONS as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
            
        } catch (Exception $e ) {
            return null; 
        }
		//throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function getDisposalReasonValue ( $id ){
        try{
            foreach( self::$ALL_DISPOSAL_REASONS as $key=> $item ){
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
