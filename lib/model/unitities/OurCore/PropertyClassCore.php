<?php 
class PropertyClassCore {
	//TaskTypes
	public static $ITEM= 1; 
	public static $DOCUMENT= 2;  
	public static $SPAREPART= 3; 
	public static $VEHICLE= 4; 	
	public static $OTHER= 5; 
	public static $ALL_ITEM_TYPES= array ( 1 => "Item", 1 => "Document", 3 => "Sparepart",  4 => "Vehicle", 5 => "Other" );
	public static $ALL_ITEM_DISPLAY_TYPES= array (1 => "Pinnable",  2 => "Document" , 3 => "Sparepart",  4 => "Vehicle", 5 => "Other" );
    
	public static function fetchItemTypeID ( $value ) {
        try {
            foreach( self::$ALL_ITEM_TYPES as $key=> $item ) {
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
            //throw new OutOfBoundException(" '$value'ዘይፍቀድ. "); 	
        } catch ( Exception $e ) {
            return null; 
        }
	}
	
	public static function fetchItemTypeValue ($id ){
        try {
            foreach( self::$ALL_ITEM_TYPES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
        //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ. ");             
        } catch ( Exception $e ) {
            return null; 
        }
	}
	public static function fetchPropertyIcon ($grp_id) {
		
		switch($grp_id) {			
			case self::$ITEM:
				return 'pinnable';
			break;
			case self::$DOCUMENT:
				return 'document';
			break;
			case self::$SPAREPART;
				return 'sparepart';
			break;
			case self::$VEHICLE:
				return 'vehicle';
			break;
			case self::$UNDERCONSTRUCTION:
				return 'underconstruction';
			break;
			case self::$OTHER:
				return 'other';
			break;
		}
	}
}
