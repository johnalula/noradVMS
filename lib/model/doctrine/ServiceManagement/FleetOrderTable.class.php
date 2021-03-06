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
      // try{				
				$_nw = new FleetOrder(); 
				$_nw->token_id = $token_id; 
				$_nw->task_id = $task_id; 
				$_nw->vehicle_id = $vehicle_id;  
				$_nw->departure_mileage = $mileage; 
				$_nw->number_of_passengers = $no_of_passengers;  
				$_nw->fuel_acquire_type_id = $fuel_acquired_id; 
				$_nw->fuel_amount = $fuel_amount; 
				$_nw->is_departed = true; 
				$_nw->description = $description ;   
				$_nw->save(); 
				$_id = $_nw->id;
				
				$order = self::processObject($_id, $token_id);
				//.$order->isVDeparted = true;
				//$order->save();*/
				
				$prt = new TaskParticipant ();
				$prt->token_id = $_nw->token_id;
				$prt->task_id = $_nw->task_id;
				$prt->vehicle_id = $_nw->vehicle_id;
				$prt->participant_id = $order->partyID;
				$prt->participant_role = ParticipantCore::$VEHICLE_DRIVER;
				$prt->description = trim($description);
				$prt->save();
				
            return true; 
        //} catch ( Exception $e) {
         //   return false; 
        //}
	}
	
	public static function appendQueryFields()
	{
		$queryFields = "ftsko.*, vh.is_departed as isDeparted, 
			vh.plate_number as plateNo, vh.plate_code as plateCode, vh.plate_code_no as plateCodeNo, vh.vehicle_make as vehicleMake,
			vh.token_id as vehicleTokenID, vh.current_mileage as currentMileage,
			tsk.destination as fleetDestination, tsk.departure_date as departDate, tsk.departure_time as departTime,
			ftsko.departure_mileage as departMileage, ftsko.return_mileage as returnMileage, ftsko.difference_mileage as diffMileage, tsk.departure_time as departTime, tsk.departure_date as departDate, tsk.return_time as returnTime,tsk.return_date as returnDate, ftsko.number_of_passengers as noOfPassengers, ftsko.fuel_amount as fuelAmount, ftsko.fuel_acquire_type_id as acquiredFuelType, 
			vt.id as vehicleTypeID, vt.name as vehicleType, vt.id as vehicleID, ft.id as fuelTypeID, ft.name as fuelType,
			asvh.id as assignedID, asvh.token_id as assignedTokenID, 
			prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName, (prt.name AND prt.father_name AND prt.grand_father_name) as fullName, prt.id as partyID, ftsko.vehicle_id as vehicleID,
			
			tsk.service_number_of_days as fieldDays, tsk.number_of_delay_days as delayedDays 
		 
			";
			
			return $queryFields;
	}
	 
   public static function processObject($_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select(self::appendQueryFields())
			
			->from("FleetOrder ftsko")   
			->innerJoin("ftsko.Task tsk")
			->innerJoin("ftsko.Vehicle vh")     
			->innerJoin("vh.assignmentTaskOrderVehicles asvh")     
			->innerJoin("asvh.Participant prt")    
			->leftJoin("prt.Participant dr")  
			->innerJoin("vh.FuelType ft")    
			->innerJoin("vh.VehicleType vt")              
			->where('ftsko.id = ? AND ftsko.token_id = ?', array($_id, $token_id))
			->fetchOne ( );
			
		return ( ! $q ? null : $q ); 
	}
	
	public static function processSelection ( $task_id, $token_id, $is_departed=null, $is_returned=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q= Doctrine_Query::create()
			->select(self::appendQueryFields())
			->from("FleetOrder ftsko")   
			->innerJoin("ftsko.Task tsk")
			->innerJoin("ftsko.Vehicle vh")     
			->innerJoin("vh.assignmentTaskOrderVehicles asvh")     
			->innerJoin("asvh.Participant prt")    
			->leftJoin("prt.Participant dr")  
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
	
	public static function processCandidateVehicles ( $task_id, $token_id, $is_departed=null, $is_returned=null, $exclusion=null, $offset=0, $limit=10) 
	{
		 ///$ord = FleetOrderTable::processSelection ($task_id, $token_id, true, false, $status, $keyword, $offset, $limit );
	   // if        
		$q= Doctrine_Query::create()
			->select("ftsko.*, vh.is_departed as isDeparted, 
			vh.plate_number as plateNo, vh.plate_code as plateCode, vh.plate_code_no as plateCodeNo, vh.vehicle_make as vehicleMake, vh.current_mileage as currentMileage,
			tsk.destination as fleetDestination, tsk.departure_date as departDate, tsk.departure_time as departTime,
			ftsko.departure_mileage as departMileage, ftsko.return_mileage as returnMileage, ftsko.difference_mileage as diffMileage, tsk.departure_time as departTime, tsk.departure_date as departDate, tsk.return_time as returnTime,tsk.return_date as returnDate, ftsko.number_of_passengers as noOfPassengers, ftsko.fuel_amount as fuelAmount, ftsko.fuel_acquire_type_id as acquiredFuelType, 
			ftsko.number_of_passengers as passengerValue,
			asvh.id as assignedID, asvh.token_id as assignedTokenID,
			prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName, (prt.name AND prt.father_name AND prt.grand_father_name) as fullName, prt.id as partyID,
			
			tskpas.id AS passengerID
			")
			->from("FleetOrder ftsko")   
			->innerJoin("ftsko.Task tsk")
			->leftJoin("ftsko.fleetOrderPassengers tskpas")
			->innerJoin("ftsko.Vehicle vh") 
			->innerJoin("vh.assignmentTaskOrderVehicles asvh")
			->innerJoin("asvh.Participant prt")    
			->innerJoin("prt.Participant dr")      
			->offset($offset)
			->limit($limit)
			->where("ftsko.task_id = ? AND ftsko.token_id = ? ", array($task_id, $token_id));
			if(! is_null($exclusion))
				$q = $q->andWhereNotIn("ftsko.id", $exclusion ); 
		 
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
