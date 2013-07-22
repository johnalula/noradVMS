<?php

class StorageCore { 
	public static $FENCED_STORE_TYPE= 1; 
	public static $ROOM_STORE_TYPE= 2; 
	public static $OTHER_STORE_TYPE= 3; 
	public static $ALL_STORE_TYPES= array ( 1=> "ዝተሓፀረ ", 2 => "መኽዘን ገዛ", 3 => "ካሊእ "); 
	
	public static function getDefaultStoreTypeID () {
		return self::ROOM_STORE_TYPE; 
	} 
	public static function getDefaultStoreTypeValue (){
		return self::getStoreTypeValue(self::ROOM_STORE_TYPE) ;  
	}
	public static function getStoreTypeID ( string $value ) {
		foreach( $ALL_STORE_TYPES as $key=> $item ){
				if( strcmp($item, $value) == 0 )
					return $key; 
		}
		throw new OutOfBoundException(" '$value' ካብ ዝተፈቐደ ወፃኢ "); 	
	}
	
	public static function getStoreTypeValue ( int $id ){
		foreach( $ALL_STORE_TYPES as $key=> $item ){
				if( $key == $id )
					return $item; 
		}
		throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}			
}

