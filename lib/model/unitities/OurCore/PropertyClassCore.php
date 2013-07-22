<?php 
class PropertyClassCore {
	//TaskTypes
	public static $ITEM= 0; 
	public static $DOCUMENT= 1; 
	public static $UNDERCONSTRUCTION= 2; 
	public static $SPAREPART= 3; 
	public static $VEHICLE= 4; 	
	public static $OTHER= 5; 
	public static $ALL_ITEM_TYPES= array ( 0=> "ፒን ዝወሃቦ", 1=> "ቕጥዓቕጥዒ" ,2=> " ህንፃን ህንፀት ኣቑሑት" , 3=> "መለዋወጢ",  4=> "ተሽከተርካሪ", 5 =>"ካሊእ" );
	public static $ALL_ITEM_DISPLAY_TYPES= array (0=> "ፒን ዝወሃቦ",  1=> "ቕጥዓቕጥዒ" , 3=> "መለዋወጢ",  4=> "ተሽከተርካሪ", 5 =>"ካሊእ" );
    
	public static function getItemTypeID ( $value ) {
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
	
	public static function getItemTypeValue ($id ){
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
	public static function getPropertyIcon ($grp_id) {
		
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
