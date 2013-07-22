<?php


class AttachmentCore {
    public static $MODEL_22= 1; 
    public static $MODEL_20= 2; 
    public static $MODEL_19= 3; 
    public static $RECEIPT=4 ;
    public static $LETTER= 5; 
    public static $TIN_NUMBER= 6; 
    public static $LIBRE= 7; 
    public static $AUCTION_DOCUMENT= 8; 
    public static $PROFORMA=9;
    public static $GATE_PASS=10;
    public static $ICC_REPORT= 11; 
    public static $INSPECTION_REPORT= 12;
    public static $TRANSFER_DOCUMENT=13;
    public static $OTHER= 14; 
    public static $ALL= array (1=>"ሞዴል 22", 2 => "ሞዴል 20", 3 => "ሞዴል 19", 4 => "ረሲፕት", 5 => "ደብዳቤ", 6 => "ቲን ቁጽሪ", 
    7 => "ሊብሬ", 8 => "ናይ ጨረታ ዶክመንት", 9 => "ፕሮፎርማ", 10 => "በሪ መውፀኢ",   
    11 => "ኣይሲሲ ሪፖርት", 12 => "ኢንስፔክሽን ሪፖርት",   
    13 => "ንብረት መዛወሪ ቅጥኢ", 14=>"ካልእ");
    // inspection
    public static function getID ( $value ) {
        try{
            foreach( self::$ALL as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
             //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	            
        } catch ( Exception $e ) {
            return null; 
        }

	}
	
	public static function getValue ( $id ){
        try{
            foreach( self::$ALL as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
             return null; 
             //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ ");             
        } catch ( Exception $e ) {
            return null;
        }

	}
	
	public static function getDefaultID() {
		return self::$LETTER; 
	}
	
	public static function getDefaultValue () {
		return self::getValue(self::getDefaultID()); 
    }
}
