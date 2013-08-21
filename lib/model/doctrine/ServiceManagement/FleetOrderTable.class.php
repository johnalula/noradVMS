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
				$_nw->assigned_id = $vehicle_id;  
				$_nw->departure_mileage = $mileage; 
				$_nw->number_of_passangers = $no_of_passengers;  
				$_nw->fuel_acquire_type_id = $fuel_acquired_id; 
				$_nw->fuel_amount = $fuel_amount; 
				$_nw->is_departed = true; 
				$_nw->description = $description ;   
				$_nw->save(); 
				$_id = $_nw->id;
				
				/*$order = self::processObject($_id, $token_id);
				$order->isVDeparted = true;
				$order->save();*/
				
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
				
				//$obj = VehicleTable::findObject($vehicle_id, $);
				
            return true; 
        } catch ( Exception $e) {
            return false; 
        }
	}
	
	 
   public static function processObject($_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select("ftsko.*, avh.is_departed as isDeparted,prt.full_name as fullName, 
			vh.plate_number as plateNo, vh.plate_code as plateCode, vh.plate_code_no as plateCodeNo, vh.vehicle_make as vehicleMake,
			tsk.destination as fleetDestination, tsk.departure_date as departDate, tsk.departure_time as departTime,
			ftsko.departure_mileage as departMileage, ftsko.return_mileage as returnMileage, ftsko.difference_mileage as diffMileage, ftsko.number_of_passangers as noOfPassengers, ftsko.fuel_amount as fuelAmount, ftsko.fuel_acquire_type_id as acquiredFuelType, 
			vt.id as vehicleTypeID, vt.name as vehicleType, ft.id as fuelTypeID, ft.name as fuelType,
			avh.id as assignedID, avh.token_id as assignedTokenID
			")
			->from("FleetOrder ftsko")   
			->innerJoin("ftsko.Task tsk")
			->innerJoin("ftsko.AssignedVehicle avh")    
			->innerJoin("avh.Vehicle vh")     
			->innerJoin("avh.Participant drv")    
			->innerJoin("avh.Participant prt")  
			->innerJoin("vh.FuelType ft")    
			->innerJoin("vh.VehicleType vt")     
			->where('ftsko.id = ? AND ftsko.token_id = ?', array($_id, $token_id))
			->fetchOne ( );
			
		return ( ! $q ? null : $q ); 
	}
	
	public static function processSelection ( $task_id, $token_id, $is_departed=null, $is_returned=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select("ftsko.*, avh.is_departed as isDeparted,prt.full_name as fullName, 
			vh.plate_number as plateNo, vh.plate_code as plateCode, vh.plate_code_no as plateCodeNo, vh.vehicle_make as vehicleMake,
			tsk.destination as fleetDestination, tsk.departure_date as departDate, tsk.departure_time as departTime,
			ftsko.departure_mileage as departMileage, ftsko.return_mileage as returnMileage, ftsko.difference_mileage as diffMileage, tsk.departure_time as departTime, tsk.departure_date as departDate, tsk.return_time as returnTime,tsk.return_date as returnDate, ftsko.number_of_passangers as noOfPassengers, ftsko.fuel_amount as fuelAmount, ftsko.fuel_acquire_type_id as acquiredFuelType, 
			vt.id as vehicleTypeID, vt.name as vehicleType, ft.id as fuelTypeID, ft.name as fuelType,
			avh.id as assignedID, avh.token_id as assignedTokenID
			")
			->from("FleetOrder ftsko")   
			->innerJoin("ftsko.Task tsk")
			->innerJoin("ftsko.AssignedVehicle avh")    
			->innerJoin("avh.Vehicle vh")     
			->innerJoin("avh.Participant drv")    
			->innerJoin("avh.Participant prt")  
			->innerJoin("vh.FuelType ft")    
			->innerJoin("vh.VehicleType vt")    
			->offset($offset)
			->limit($limit)
			->where('ftsko.task_id = ? AND ftsko.token_id = ?', array($task_id, $token_id));
			if(!is_null($is_departed))
				$q = $q->addWhere('ftsko.is_departed = ?', $is_departed);
			if(!is_null($is_returned))
				$q = $q->addWhere('ftsko.is_returned = ?', $is_returned);
			
			$q = $q->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processFleetTaskOrderSelection ( $task_id, $token_id, $is_departed=null, $is_returned=null, $status=null, $keyword=null, $offset=0, $limit=100) 
	{
		return self::processSelection ( $task_id, $token_id, $is_departed, $is_returned, $status, $keyword, $offset, $limit);
	}
	
	public static function processReturnFleetOrder ($task_id, $token_id, $order_id, $mileage ) 
	{	
		$order = self::processObject($order_id, $token_id);
			
		if(!$order)
			return false;	
					
			$depart_mileage = $order->departure_mileage;
			$diff_mileage = intval($mileage)-intval($depart_mileage);
		
			$order->return_mileage = $mileage;
			$order->difference_mileage = $diff_mileage;
			$order->is_returned = true;
			$order->save();		
			
		return true;
	}
	
	
}
