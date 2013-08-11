<?php

/**
 * FleetOrderTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FleetOrderTable extends PluginFleetOrderTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object FleetOrderTable
     */
	public static function getInstance()
	{
		return Doctrine_Core::getTable('FleetOrder');
	}
	
	public static function processCreate ($task_id, $token_id, $vehicle_id, $fuel_acquired_id, $fuel_amount, $description, $no_of_passengers, $mileage ) 
	{      
        try{				
				$_nw = new FleetOrder(); 
				$_nw->token_id = $token_id; 
				$_nw->task_id = $task_id; 
				$_nw->vehicle_id = $vehicle_id;  
				$_nw->departure_mileage = $mileage; 
				$_nw->number_of_passangers = $no_of_passengers;  
				$_nw->fuel_acquire_type_id = $fuel_acquired_id; 
				$_nw->fuel_amount = $fuel_amount; 
				$_nw->description = $description ;   
				$_nw->save(); 
				
				$prt = new TaskParticipant ();
				$prt->token_id = $_nw->token_id;
				$prt->task_id = $_nw->id;
				$prt->participant_id = $_pid;
				$prt->participant_role = ParticipantCore::$DATA_INCODER;
				$prt->description = trim($description);
				$prt->save();
				
				$prt = new TaskParticipant ();
				$prt->token_id = $_nw->token_id;
				$prt->task_id = $_nw->id;
				$prt->participant_id = $customer_id;
				$prt->participant_role = ParticipantCore::$DEPARTEMENT;
				$prt->description = trim($description);
				$prt->save();
						
            return true; 
        } catch ( Exception $e) {
            return false; 
        }
	}
	
	 
   public static function processObject($_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select("tsko.*, vh.token_id as vehicleTokenID ")
			->from("AssignmentOrder tsko") 
			->innerJoin("tsko.Task tsk")
			->innerJoin("tsko.Driver dr on tsko.participant_id = dr.id")
			->innerJoin("tsko.Vehicle vh on tsko.vehicle_id = vh.id")   
			->where('tsko.id = ? AND tsko.token_id = ?', array($_id, $token_id))
			->fetchOne ( );
			
		return ( ! $q ? null : $q ); 
	}
	
	public static function processSelection ( $task_id, $token_id, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("ftsko.*, ftsko.departure_mileage as deprtMileage, tsk.departure_date as deprtDate, tsk.departure_time as deprtTime, vh.plate_number as plateNo, vh.plate_code_no as plateCodeNo, vh.plate_code as plateCode, vh.vehicle_make as vehicleMake, asor.assignment_order_id as orderID, drv.license_type as licenseType, prt.full_name as fullName, tsk.destination as fleetDestination")
			->from("FleetOrder ftsko")   
			->innerJoin("ftsko.Task tsk")
			->innerJoin("ftsko.Vehicle vh")    
			->innerJoin("vh.assignedVehicle asor ")    
			->innerJoin("asor.Driver drv")    
			->innerJoin("drv.Participant prt")    
			->offset($offset)
			->limit($limit)
			->where('ftsko.task_id = ? AND ftsko.token_id = ?', array($task_id, $token_id))
			->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
}
