<?php 
 class TaskApprovalCore {
	public static $NONE = 1 ; 
	public static $APPROVED = 2; 
	public static $DENIED = 3; 
	
	public static $ALL = array ( 1 => "ምንም " , 2 => "ዝተፈቒደ ",  3 => " ዘይተፈቐደ "  );	
	
	public static function getDefaultID () {
		return self::NONE; 
	}
	public static function getDefaultValue () {
		return self::getValue ( self::NONE); 
	}
	public static function getValue ( int $id ){
		foreach( $ALL as $key=> $item ){
				if( $key == $id )
					return $item; 
		}
		throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}
	public static function getID ( string $value ) {
		foreach( $ALL as $key=> $item ){
				if( strcmp($item, $value) == 0 )
					return $key; 
		}
		throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
}



