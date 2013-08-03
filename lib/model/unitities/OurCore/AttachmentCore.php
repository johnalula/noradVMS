<?php


class AttachmentCore {
	public static $RECEIPT = 1 ;
	public static $LETTER = 2; 
	public static $TIN_NUMBER = 3; 
	public static $LIBRE = 4; 
	public static $AUCTION_DOCUMENT = 5; 
	public static $PROFORMA = 6;
	public static $GATE_PASS = 7;
	public static $ICC_REPORT = 8; 
	public static $INSPECTION_REPORT = 9;
	public static $TRANSFER_DOCUMENT =10;    
	public static $MODEL_22 = 11; 
	public static $MODEL_20 = 12; 
	public static $MODEL_19 = 13; 
	public static $OTHER= 14; 
	public static $ALL_ATTACHMENTS= array (1 => "Receipt", 2 => "Letter", 3 => "Tin Number", 4 => "Libre", 5 => "Auction Document", 6 => "Proforma", 
	7 => "Gate Pass", 8 => "ICC Report", 9 => "Inspection Report", 10 => "Transfer Document", 11 => "Model 22", 12 => "Model 20", 13 => "Model 19", 14=>"Other");

	public static function fetchAttachmentID ( $value ) {
	  try{
			foreach( self::$ALL_ATTACHMENTS as $key=> $attachment ){
					  if( strcmp($attachment, $value) == 0 )
							return $key; 
			}
			return true; 
	  } catch ( Exception $e ) {
			return false; 
	  }

	}

	public static function fetchAttachmentValue ( $_id ){
	  try{
			foreach( self::$ALL_ATTACHMENTS as $key=> $attachment ){
					  if( $key == $_id )
							return $attachment; 
			}
			 return true; 
	  } catch ( Exception $e ) {
			return false;
	  }

	}

	public static function fetchAttachmentDefaultID() {
	return self::$LETTER; 
	}

	public static function fetchAttachmentDefaultValue () {
	return self::fetchAttachmentValue(self::fetchAttachmentDefaultID()); 
	}
}
