<?php

class MaintenanceCore {
	public static $RENEWAL = 1; 
	public static $REFURBISHMENT = 2; 
	public static $SERVICE = 3; 	
	public static $OTHER = 4; 
	public static $ALL_MAINTENANCE_TYPES= array ( 1 => "ሕድሳት " ,  2 => "ምሕዳስ " ,  3 => "ግልጋሎት " ,  4 => "ካሊእ " );

	public static function getDefaultID( ){
		return self::RENEWAL; 
	}
	public static function getDefaultValue() {
		return self::getValue(self::RENEWAL); 
	}
	
	public static function getTypeID ( string $value ) {
		foreach( $ALL_MAINTENANCE_TYPES as $key=> $item ){
				if( strcmp($item, $value) == 0 )
					return $key; 
		}
		throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function getTaskParticipantTypeValue ( int $id ){
		foreach( $ALL_MAINTENANCE_TYPES as $key=> $item ){
				if( $key == $id )
					return $item; 
		}
		throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ "); 
	}	
}
