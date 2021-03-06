<?php

/**
 * FuelTypeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FuelTypeTable extends PluginFuelTypeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object FuelTypeTable
     */
	public static function getInstance()
	{
	  return Doctrine_Core::getTable('FuelType');
	}
   
   public static function isNameDuplicated( $name )
   {
		return self::findWtithName ( $name );
	}
   
   public static function processCreate ($name, $description )
	{
		$is_duplicated = self::isNameDuplicated ( $name );
		
		try {
			
			if($is_duplicated)
				return false;
				
			if(is_null($name) || empty($name))
				return false;
				
			$_nw = new FuelType();   
			$_nw->name = trim($name);   
			$_nw->description = trim($description); 
			$_nw->save(); 
			
			return true;
			
		} catch ( Exception $e ) {
			
			return false; 
		}	
		//return true;
		  
	}

	public static function processUpdate ($_id, $name, $description )
	{
		$q = Doctrine_Query::create( )
			->update('FuelType ft')
			->set('ft.name', '?', trim($name))  
			->set('ft.description', '?', trim($description))  
			->where('ft.id = ?', $_id)
			->execute();	

		return ( $q > 0 );   
	}
   
   public static function processDelete ( $_id ) 
   {
		$q = Doctrine_Query::create( )
			->delete ('FuelType ft')
			->where('ft.id=?', $_id)
			->execute ( );	
		return ( $q	> 0  );  
		//return true;	
	}
	
	public static function processObject ( $_id ) 
	{
		$q = Doctrine_Query::create( )
							->select("ft.*, ft.name as fuelTypeName")
							->from("FuelType ft") 
							->where("ft.id=?", $_id)
							->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
	
	public static function findWtithName ( $name ) 
	{
		$q = Doctrine_Query::create( )
							->select("ft.*")
							->from("FuelType ft") 
							->where("ft.name LIKE ?", trim($name))
							->fetchOne ( );
							
		return ( count($q) <= 0 ? null : $q); 
	}
    
	public static function processSelection ( $keyword=null, $offset=0, $limit=100 ) 
	{
		$q = Doctrine_Query::create( )
							->select("ft.*, ft.name as fuelTypeName")
							->from("FuelType ft") 
							->offset($offset)
							->limit($limit)
							->where("ft.id IS NOT NULL");
							if(!is_null($keyword))
								$q = $q->andWhere("ft.name LIKE ?", trim($keyword));
							
							$q  = $q->execute ( );
							
		return ( count($q) <= 0 ? null : $q ); 
	}
	
	public static function processValue ( ) 
	{
		$q = Doctrine_Query::create( )
							->select("ft.*, ft.name as fuelType")
							->from("FuelType ft")  
							->execute ();
							
		return ( count($q) <= 0 ? null : $q ); 
	}
	 
}
