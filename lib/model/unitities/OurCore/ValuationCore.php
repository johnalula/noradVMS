<?php
class ValuationTaskCore {
	public static $PURCHASE_COST_TYPE= 1; 
	public static $MAINTENANCE_COST_TYPE= 2; 
	public static $TRANSPORTATION_COST_TYPE= 3; 
	public static $OTHER_COST_TYPE= 4; 
	public static $ALL_COST_TYPES= array ( 1 => "ዋጋ ፅደጋ " ,  2 => "ዋጋ ፅገና  " ,  3 => "ዋጋ መጓዐዣ ", 4=> "ካሊእ " ); 

	public static function getCostTypeID (  $value ) {
		foreach( self::$ALL_COST_TYPES as $key=> $item ){
				if( strcmp($item, $value) == 0 )
					return $key; 
		}
		 //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
        return null; 
	}
	
	public static function getCostTypeValue (  $id ){
		foreach( $ALL_COST_TYPES as $key=> $item ){
				if( $key == $id )
					return $item; 
		}
		 //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
        return null; 
	}	
	public static function getDefaultCostTypeID() {
		return self::PURCHASE_COST_TYPE; 
	}
	
	public static function getDefaultCostTypeValue () {
		return self::getValue(self::PURCHASE_COST_TYPE); 
	}	
	
	public static $ESTIMATED_VALUATION= 1; 
	public static $CALCULATED_VALUATION= 2; 
	public static $PURCHASE_VALUATION= 3;
	public static $OTHER_VALUATION_TYPE= 4; 
	public static $ALL_VALUATION_TYPES= array ( 1=> "ግምታዊ ዋጋ ", 2 => " ብቀመር ዝተረኸበ ዋጋ ", 3=> " ዝተዓደገሉ ዋጋ ", 4 => "ካሊእ ");
	
	public static function getValuationTypeID (  $value ) {
		foreach( self::$ALL_VALUATION_TYPES as $key=> $item ){
				if( strcmp($item, $value) == 0 )
					return $key; 
		}
        return null; 
        //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function getValuationTypeValue ( $id ){
		foreach( self::$ALL_VALUATION_TYPES as $key=> $item ){
				if( $key == $id )
					return $item; 
		}
		return null; 
        // throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}	
	public static function getDefaultValuationTypeID() {
		return self::$PURCHASE_VALUATION; 
	}
	
	public static function getDefaultValuationTypeValue () {
		return self::getValue(self::$PURCHASE_VALUATION); 
	}		
}


