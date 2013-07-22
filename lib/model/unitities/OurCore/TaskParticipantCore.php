<?php 

class TaskParticipantCore {
	public static $TASK_INITIATOR= 1; 
	public static $TASK_EXECUTOR= 2; 
	public static $TASK_CO_EXECUTOR= 3; 
	public static $TASK_CONFIRMER= 4; 
	public static $TASK_VIEWER= 5;
	public static $ALL_TASK_MGT_ROLES= array ( 1 => "ጀማሪ ስራሕ", 2 => "ዋና ስራሕ ፈፃሚ ", 3 => "ሓጋዚ ስራሕ ፈፃሚ", 4 => "ስራሕ መረጋገፂ", 5 =>"ዑደት  ስራሕ ዝገብር "); 

	public static function getID ( $value ) {
        try{
            foreach( self::$ALL  as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            return null; 
            //throw new OutOfBoundException(" '$value' ዘይፍቀድ  ");             
        } catch ( Exception $e ) {
            return null; 
        }
	}
	public static function getValue ( $id ){
        try {
            foreach( self::$ALL  as $key=> $item ){
                if( $key == $id )
                    return $item; 
            }
            return null;             
        } catch ( Exception $e ) {
            return null; 
        }
        //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
    
    public static $APPROVER=6; 
    public static $USER=7 ;
    public static $SUPPLIER=8 ;
    public static $MANUFACTURER=9;
    public static $INSPECTOR=10;
    public static $DISPOSER=11;
    public static $MAINTAINER=12;
    public static $TEMPORARY_STORAGE_USER=13;
    public static $WITNESS=14;
    public static $DONER=15;
    public static $GIFT_RECEIVER =16;
    public static $LENDER= 17;
    public static $VALUATOR=18;
    public static $FIXED_ASSET_IDENTIFIER=19 ;
    public static $ICC_CONDUCTOR=20;
    public static $CLIENT=21;
    public static $PURCHASER=22;
    public static $TENANT=23;
    public static $CONSULTANT=24;
    public static $TRANSPORTER=25;
    public static $TRANSFEREE=26;
    public static $TRANSFERER=27;
    public static $REPRESENTATIVE=28;
    public static $OTHER=29;
    public static $ALL_OTHER_TASK_ROLES= array ( 6 =>"መፅደቓይ ",  7=>"ተጠቃሚ ",  8=>"መቕረቢ " ,9=>" መምረቲ " , 10=>"ተቖፃፃሪ ", 11=>" መወገዳይ ",12 => "ፀጋናይ ",13 =>" ግዚያዊ ተጠቃሚ መኽዝን ",
    14=>"ምስክር ", 15=>" ለጋሲ ",16 =>"ሓገዝ ተቐባሊ ", 17=>" መለቃሓይ ", 18=>" ተመን ዋጋ ተማኒ ", 19=>"ቀዋሚ ንብረት ፈላዪ ", 20=>" ቖፀራ ምካየዳይ ", 21=>"ዓሚል ", 22=>" ዓዳጊ ", 23=>"ተካራዪ ",  24=>" መማኸሪ ", 25 => "መጓዓዚ", 26=>"ዝዘዋወር",27=>"መዛወሪ",28 => "ወኪል",29=>"ካሊእ "); 
	public static $ALL=  array ( 1 => "ጀማሪ ስራሕ ", 2 => "ዋና ስራሕ ፈፃሚ ", 3 => "ሓጋዚ ስራሕ ፈፃሚ", 4 => "ስራሕ መረጋገፂ ", 5 =>"ዑደት  ስራሕ ዝገብር ", 6 =>"መፅደቓይ ",  7=>"ተጠቃሚ ",  8=>"መቕረቢ " ,9=>" መምረቲ " , 10=>"ተቖፃፃሪ ", 11=>" መወገዳይ ",12 => "ፀጋናይ ",13 =>" ግዚያዊ ተጠቃሚ መኽዝን ",
    14=>"ምስክር ", 15=>" ለጋሲ ",16 =>"ሓገዝ ተቐባሊ ", 17=>" መለቃሓይ ", 18=>" ተመን ዋጋ ተማኒ ", 19=>"ቀዋሚ ንብረት ፈላዪ ", 20=>" ቖፀራ ምካየዳይ ", 21=>"ዓሚል ", 22=>" ዓዳጊ ", 23=>"ተካራዪ ",  24=>" መማኸሪ ", 25 => "መጓዓዚ", 26=>"ዝዘዋወር",27=>"መዛወሪ",28 => "ወኪል",29=>"ካሊእ "); 
	public static function getDefaultTaskParticipantTypeID( ){
		return self::$APPROVER; 
	}
	public static function getDefaultTaskParticipantTypeValue() {
		return self::getTransferTypeValue(self::getDefaultTaskParticipantTypeID()); 
	}
	
	public static function getTaskParticipantTypeID ( $value ) {
        try {
            foreach( self::$ALL_OTHER_TASK_ROLES as $key=> $item ){
                    if( strcmp($item, $value) == 0 )
                        return $key; 
            }
            //throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
            return null;             
        } catch ( Exception $e ) {
            return null; 
        }

	}
	
	public static function getTaskParticipantTypeValue ( $id ){
        try {
            foreach( self::$ALL_OTHER_TASK_ROLES as $key=> $item ){
                    if( $key == $id )
                        return $item; 
            }
            return null; 
            //throw new OutOfBoundException(" '$id' ካብ ዝተፈቐደ ወፃኢ  ");             
        } catch ( Exception $e ) {
            return null; 
        }

	}
}
