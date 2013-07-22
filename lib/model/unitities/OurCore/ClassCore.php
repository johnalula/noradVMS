<?php 
class ClassCore {
	//TaskTypes
	public static $ITEM= 0; 
	public static $DOCUMENT= 1; 
	public static $SPAREPART= 3; 
	public static $UNDERCONSTRUCTION= 4; 
	public static $VEHICLE= 5; 	
	public static $OTHER= 6; 
	public static $ALL_ITEM_TYPES= array ( 1=> "Pinnables", 2=> "Document" ,3=> "Spareparts" , 4=> "Infrastructure",  5=> "Vehicle", 6 =>"Other" );

	public static function getTaskTypeID ( $value ) {
        try {
            foreach( self::$ALL_ITEM_TYPES as $key=> $item ){
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
}
