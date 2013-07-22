<?php

class CategoryCore {
	public static $SCHEME= 1; 
	public static $AGGREGATE= 2; 
	public static $GENERIC= 3; 
	public static $SPECIFIC= 4; 
	public static $MODEL= 5; 
	
	public static $ALL= array (1=> "ሜላ ኣወቓቕራ", 2=>  "ብጥሙር ", 3=> "ሓፈሻዊ", 4 => "ውስን ", 5=> "ሞዴል" ); 
	
	public static function getCandidatesParented (  $id ){
		if ( $id > 5 || $id < 1 )
			return null; 
		switch ( $id ){
			case 1: return array (2=> "ብጥሙር", 3=>"ሓፈሻዊ", 4 =>"ውስን", 5 => "ሞዴል" ); 
			case 2: return array (2=> "ብጥሙር", 3=>"ሓፈሻዊ", 4 =>"ውስን", 5 => "ሞዴል" ); 
			case 3: return array (3=>"ሓፈሻዊ", 4 =>"ውስን", 5 => "ሞዴል"); 
			case 4: return array (4 =>"ውስን", 5 => "ሞዴል" ); 
			case 5: return new ParentshipProhibitedException ( "ከምዚ ሞዴል ዓይነት መደብ የለን");
			default: 
				return null; 
		}
		
		return null; 
	}
	public static function getCandidatesParentedByName (  $name ){
		try{
			switch ( $name ) {
				case "Scheme": return array(2=> "ብጥሙር", 3=>"ሓፈሻዊ", 4 =>"ውስን", 5 => "ሞዴል" ); 
				case "Aggregate": return array (2=> "ብጥሙር", 3=>"ሓፈሻዊ", 4 =>"ውስን", 5 => "ሞዴል" ); 
				case "Generic": return array (3=>"ሓፈሻዊ", 4 =>"ውስን", 5 => "ሞዴል"); 
				case "Specific": return array (4,  "ውስን", "ሞዴል" );
				default: 
					return null; 
			}
			return null;
		} catch ( Exception $e ) {
			return null;			
		}
	}
	public static function getID ( string $value ) {
		foreach( $ALL as $key=> $item ){
				if( strcmp($item, $value) == 0 )
					return $key; 
		}
		 throw new OutOfBoundException(" '$value' ዘይፍቀድ "); 	
	}
	
	public static function getValue ( int $id ){
		try {
			foreach( self::$ALL as $key=> $item ){
					if( $key == $id )
						return $item; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function getDefaultID() {
		return self::$GENERIC; 
	}
	
	public static function getDefaultValue () {
		return self::getValue(self::$GENERIC); 
    }
    
    public static $catCollaborators; 
    public static function isInstantiated() {
        try{
            return ( count ( self::$catCollaborators ) >= 1 ? true :false ); 
        } catch ( Exception $e ) {
            return false; 
        }
    }
    public static function fillCollaborators () {
        self::$catCollaborators= array(); 
        self::$catCollaborators[]=CategoryCodingTable::getInstance() ; 
       // self::$catCollaborators[]=CategoryFinancialCodingTable::getInstance() ; 
        self::$catCollaborators[]=CategoryGroupsTable::getInstance() ; 
        self::$catCollaborators[]=PropertyPreferredUnitTable::getInstance() ; 
        self::$catCollaborators[]=PropertyDepreciationRateTable::getInstance() ; 
        self::$catCollaborators[]=StockStandardTable::getInstance() ; 

        return self::$catCollaborators; 
    }
    public static function getCategoryCollaborators() {
        if( !  self::isInstantiated() )
            self::fillCollaborators(); 

        return self::$catCollaborators;  
    }
    public static function getCategoryViableCollaborators ( $cat ) {
		if( (! $cat) || ( ! $cat instanceof Category ) )
			return null; 
		$temp= array (); 
		$colls= self::getCategoryCollaborators(); 
		foreach( $colls as $col )
			if( ( $col->isConfigurableCat ( $cat ) ) && ( strcmp ($col->getConfigURL ( $cat ) ,"") != 0  ) )
				$temp[]= $col; 
		return ( count ( $temp ) <= 0 ? null : $temp ); 
	}
}


