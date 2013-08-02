<?php

/**
 * CategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CategoryTable extends PluginCategoryTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CategoryTable
     */
	public static function getInstance()
	{
	  return Doctrine_Core::getTable('Category');
	}
    
 
	public static function isNameDuplicated( $name )
   {
		return self::findWtithName ( $name );
	}
   
   public static function processCreate ($name, $group_id, $class_id, $description )
	{
		$is_duplicated = self::isNameDuplicated ( $name );
		
		try {
			
			if($is_duplicated)
				return false;
				
			if(is_null($group_id))
				$group_id = CategoryCharacterization::$FIXED_ASSET;
				
			if(is_null($class_id))
				$class_id = PropertyClassCore::$VEHICLE;
				
			if(is_null($name) || empty($name))
				return false;
				
			$_nw = new Category();   
			$_nw->name = trim($name);   
			$_nw->category_group_id = $group_id;   
			$_nw->category_class_id = $class_id;   
			$_nw->description = trim($description); 
			$_nw->save(); 
			
			return true;
			
		} catch ( Exception $e ) {			
			return false; 
		}	 
		  
	}

	public static function processUpdate ($_id, $name, $group_id, $class_id, $description )
	{
		$q = Doctrine_Query::create( )
			->update('Category cat')
			->set('cat.name', '?', trim($name))  
			->set('cat.category_group_id', '?', $group_id)  
			->set('cat.category_class_id', '?', $class_id)  
			->set('cat.description', '?', trim($description))  
			->where('cat.id = ?', $_id)
			->execute();	

		return ( $q > 0 );   
	}
   
   public static function processDelete ( $_id ) 
   {
		$q = Doctrine_Query::create( )
			->delete ('Category cat')
			->where('cat.id=?', $_id)
			->execute ( );	
		return ( $q	> 0  );  
	}
	
	public static function processObject ( $_id ) 
	{
		$q = Doctrine_Query::create( )
					->select("cat.*, cat.name as categoryName")
					->from("Category cat") 
					->where("cat.id=?", $_id)
					->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
	
	public static function processClassSelection( ) 
	{
		$q = Doctrine_Query::create()
			->select("DISTINCT(cat.category_class_id) AS classID")
			->from("Category cat")
			->where("cat.id IS NOT NULL")
			->execute(); 
			 
		return $q; 
	}
	
	public static function processGroupSelection( ) 
	{
		$q= Doctrine_Query::create()
			->select("DISTINCT(cat.category_group_id) AS groupID")
			->from("Category cat")
			->where("cat.id IS NOT NULL")
			->execute(); 
			 
		return $q; 
	}
	
	public static function findWtithName ( $name ) 
	{
		$q = Doctrine_Query::create( )
							->select("cat.*")
							->from("Category cat") 
							->where("cat.name LIKE ?", trim($name))
							->fetchOne ( );
							
		return ( count($q) <= 0 ? null : $q); 
	}
    
	public static function processSelection ( $offset=0, $limit=100, $keyword=null, $group_id=null, $class_id=null  ) 
	{
		$q = Doctrine_Query::create( )
				->select("cat.*, cat.name as categoryName")
				->from("Category cat") 
				->offset($offset)
				->limit($limit);
				if(!is_null($group_id) )
					$q = $q->andWhere('cat.category_group_id = ? ', $group_id);				 
				if(! is_null($class_id) )
					$q = $q->andWhere('cat.category_class_id = ? ', $class_id);
				if(! is_null($keyword) )
					$q = $q->andWhere('cat.name LIKE ? OR cat.description LIKE ?', array( $keyword,$keyword));
				$q = $q->execute ( );
							
		return $q ; 
	}
	
	public static function processCount ( ) 
	{
		$q = Doctrine_Query::create( )
				->select("cat.*")
				->from("Category cat") 
				->execute ( );
							
		return count($q); 
	}
}
