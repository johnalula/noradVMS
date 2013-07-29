<?php

/**
 * UnitTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UnitTable extends PluginUnitTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object UnitTable
     */
	public static function getInstance()
	{
	  return Doctrine_Core::getTable('Unit');
	}
    
   public static function processCreate ($name, $description )
	{
		$_nw = new Unit ();   
		$_nw->name = trim($name);   
		$_nw->description = trim($description); 
		$_nw->save(); 
		
		return true; 
	}

	public static function processUpdate($_id, $name, $description )
	{
		$q = Doctrine_Query::create( )
			->update('Unit cat')
			->set('cat.name', '?', trim($name))  
			->set('cat.description', '?', trim($description))  
			->where('cat.id = ?', $_id)
			->execute();	

		return ( $q > 0 );   
	}
	
	public static function processDelete ( $_id ) 
	{
		$q = Doctrine_Query::create( )
			->delete ('Unit cat')
			->where('cat.id=?', $_id)
			->execute ( );	
		return ( $q	> 0  );  	
	}

	public static function processObject ( $_id ) 
	{
		$q = Doctrine_Query::create( )
							->select("cat.*, cat.name as categoryName")
							->from("Unit cat") 
							->where("cat.id=?", $_id)
							->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
    
	public static function processSelection ( $offset=0, $limit=100 ) 
	{
		$q = Doctrine_Query::create( )
							->select("cat.*, cat.name as categoryName")
							->from("Unit cat") 
							->offset($offset)
							->limit($limit)
							->execute ( );
		return ( count($q) <= 0 ? null : $q ); 
	}
		
}
