<?php

/**
 * AssignedVehicleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AssignedVehicleTable extends PluginAssignedVehicleTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object AssignedVehicleTable
     */
	public static function getInstance()
	{
		return Doctrine_Core::getTable('AssignedVehicle');
	}
	
	public static function processSelection ( $is_departed=null, $is_returned=null, $exclusion=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("asvh.*, vh.plate_code as plateCode, vh.plate_number as plateNo ")
			->from("AssignedVehicle asvh") 
			->innerJoin("asvh.Vehicle vh") 
			->innerJoin("asvh.Driver drv on asvh.participant_id = drv.id") 
			->innerJoin("drv.Participant prt on prt.id = drv.employee_id") 
			->offset($offset)
			->limit($limit)
			->where('asvh.id IS NOT NULL'); 
			if(!is_null($is_departed))
				$q = $q->addWhere('asvh.is_departed = ?', $is_departed);
			if(!is_null($exclusion) && is_array($exclusion))
				$q=$q->andWhereNotIn("asvh.id", $exclusion ); 
				
			$q = $q->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processObject ( $_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select("asvh.*, vh.plate_code as plateCode, vh.plate_number as plateNo, vh.token_id as vehicleTokenID")
			->from("AssignedVehicle asvh") 
			->innerJoin("asvh.Vehicle vh") 
			->innerJoin("asvh.Driver drv on asvh.participant_id = drv.id") 
			->innerJoin("drv.Participant prt on prt.id = drv.employee_id") 
			->where("asvh.id=? AND asvh.token_id=?", array($_id, $token_id))
			->fetchOne ( );
		return ( ! $q ? null : $q ); 
	}
	
}
