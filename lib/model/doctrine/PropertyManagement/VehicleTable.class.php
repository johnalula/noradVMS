<?php

/**
 * VehicleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class VehicleTable extends PluginVehicleTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object VehicleTable
     */
   public static $ACTIVE = 1;
   public static $ON_FIELD = 2;
   public static $ON_MAINTENANCE = 3;
   public static $NOT_ASSIGNED = 4;
   public static $OTHER = 5;
   
   public static $ALL_STATUSES = array(1 => 'Active', 2 => 'On Field', 3 => 'On Maintenance', 4 => 'Not Assigned', 5 => 'Other');
   
   public static function fetchVehicleStatusID ( $value ) 
		{
			try {
					foreach( self::$ALL_STATUSES as $key => $status ){
						if( strcmp($status, $value) == 0 )
						  return $key; 
				}
			
				 return $ACTIVE; 
		  } catch ( Exception $e ) {
				return $ACTIVE; 
		  }
		}
	
		public static function fetchVehicleStatusValue ( $id )
		{
			try{
					foreach( self::$ALL_STATUSES as $key => $status ){
					  if( $key == $id )
							return $status; 
				}
				 return $ACTIVE; 
		  } catch ( Exception $e ) {
				 return $ACTIVE; 
		  }
		}
		
		public static function fetchDefaultParticipantStatusID() 
		{
			return self::$ACTIVE; 
		}
		
   public static function processCreate ( $order ) 
   {	
		if( ! $order )
			return false;
			
		$clss = $order->classID; 
		if( $clss != PropertyClassCore::$VEHICLE )
		return false; 

		$count = intval($order->actual_quantity);
		
		try{
			$i = 1;
			for( $i = 1; $i <= $count; $i ++ ) 
			{
				$token = $order->token_id.$order->task_id.rand('11111', '99999');
				$token_id = sha1($token);
				$_nw = new Vehicle ( ); 
				$_nw->task_id = $order->task_id; 
				$_nw->token_id = md5($token_id); 
				$_nw->task_order_id = $order->id; 
				$_nw->status = $order->status; 
				$_nw->effective_date = $order->effective_date; 
				$_nw->clss = PropertyClassCore::$VEHICLE; 
				$_nw->category_id = $order->category_id;  
				$_nw->vehicle_status = self::$NOT_ASSIGNED;  
				$_nw->vehicle_type_id = 1;  
				$_nw->fuel_type_id = 1;  
				$_nw->quantity = 1;  
				$_nw->is_present = true; 
				$_nw->save();
				 
				}
			 
			return true; 
		} catch ( Exception $e ) {
			return false; 
		}
	}
	
	//processUpdate ( $vehicle_id,$token_id,$plate_code,23411,$plate_code_no,$vehicle_type,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, $service_type,$fuel_type,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description  ) 
	
	public static function processUpdate ( $vehicle_id,$token_id,$plate_code,$plate_no,$plate_code_no,$vehicle_type,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, $service_type,$fuel_type,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description ) 
	{
		$is_duplicated = self::isDuplicated($plate_no);
		if($is_duplicated)
		{
			return self::processUpdateExisting ( $vehicle_id,$token_id,$plate_code,$plate_no,$plate_code_no,$vehicle_type,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, $service_type,$fuel_type,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description ) ;
		}
			
		$q = Doctrine_Query::create( )
			->update('Vehicle vh')
			->set('vh.serial_no', '?', trim($serial_no))  
			->set('vh.pin_num', '?', trim($pin_no))   
			->set('vh.plate_number', '?', trim($plate_no))   
			->set('vh.plate_code', '?', trim($plate_code))   
			->set('vh.plate_code_no', '?', trim($plate_code_no))   
			->set('vh.initial_mileage', '?', trim($purchased_mileage))   
			->set('vh.current_mileage', '?', trim($current_mileage))   
			->set('vh.vehicle_type_id', '?', $vehicle_type)   
			->set('vh.vehicle_make', '?', trim($vehicle_make))   
			->set('vh.litter_per_km', '?', trim($liter))   
			->set('vh.seating_capacity', '?', trim($seat_capacity))   
			->set('vh.no_of_doors', '?', trim($doors))   
			->set('vh.engine_number', '?', trim($engine_no))   
			->set('vh.chesis_number', '?', trim($chesis_no))  
			->set('vh.vehicle_model', '?', trim($vehicle_model))   
			->set('vh.vehicle_color', '?', trim($vehicle_color))   
			->set('vh.vehicle_weight', '?', trim($vehicle_weight))   
			->set('vh.service_type_id', '?', $service_type)   
			->set('vh.fuel_type_id', '?', $fuel_type)   
			->set('vh.service_year', '?', trim($vehicle_year))   
			->set('vh.purchased_date', '?', trim($purchased_date))   
			->set('vh.purchased_type', '?', trim($purchased_type))   
			//->set('vh.checkup_period_id', '?', trim($checkup_period_id))   
			//->set('vh.vehicle_status', '?', trim($vehicle_status))   
			//->set('vh.fuel_setting_id', '?', $fuel_type)   
			//->set('vh.is_assigned', '?', $is_assigned)   
			//->set('vh.description', '?', trim($description))   
			->where('vh.id = ? AND vh.token_id = ?', array($vehicle_id, $token_id))
			->execute();	

		return ( $q > 0 );   
		
	}
	
	public static function processUpdateExisting ( $vehicle_id,$token_id,$plate_code,$plate_no,$plate_code_no,$vehicle_type,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, $service_type,$fuel_type,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description ) 
	{
		
		$q = Doctrine_Query::create( )
			->update('Vehicle vh')
			->set('vh.serial_no', '?', trim($serial_no))  
			->set('vh.pin_num', '?', trim($pin_no))   
			//->set('vh.plate_number', '?', trim($plate_no))   
			->set('vh.plate_code', '?', trim($plate_code))   
			->set('vh.plate_code_no', '?', trim($plate_code_no))   
			->set('vh.initial_mileage', '?', trim($purchased_mileage))   
			->set('vh.current_mileage', '?', trim($current_mileage))   
			->set('vh.vehicle_type_id', '?', $vehicle_type)   
			->set('vh.vehicle_make', '?', trim($vehicle_make))   
			->set('vh.litter_per_km', '?', trim($liter))   
			->set('vh.seating_capacity', '?', trim($seat_capacity))   
			->set('vh.no_of_doors', '?', trim($doors))   
			->set('vh.engine_number', '?', trim($engine_no))   
			->set('vh.chesis_number', '?', trim($chesis_no))  
			->set('vh.vehicle_model', '?', trim($vehicle_model))   
			->set('vh.vehicle_color', '?', trim($vehicle_color))   
			->set('vh.vehicle_weight', '?', trim($vehicle_weight))   
			->set('vh.service_type_id', '?', $service_type)   
			->set('vh.fuel_type_id', '?', $fuel_type)   
			->set('vh.service_year', '?', trim($vehicle_year))   
			->set('vh.purchased_date', '?', trim($purchased_date))   
			->set('vh.purchased_type', '?', trim($purchased_type))   
			//->set('vh.checkup_period_id', '?', trim($checkup_period_id))   
			//->set('vh.vehicle_status', '?', trim($vehicle_status))   
			//->set('vh.fuel_setting_id', '?', $fuel_type)   
			//->set('vh.is_assigned', '?', $is_assigned)   
			//->set('vh.description', '?', trim($description))   
			->where('vh.id = ? AND vh.token_id = ? AND vh.plate_number = ?', array($vehicle_id, $token_id, $plate_no))
			->execute();	

		return ( $q > 0 );   
		
	}
	
	
	
	public static function processSelection ( $is_assigned=null, $type=null, $status=null, $keyword=null, $offset=0, $limit=10) 
	{
		$q = Doctrine_Query::create()
					->select("vh.*, vh.plate_code as plateCode, vh.plate_number as plateNo, vh.plate_code_no as plateCodeNo, vh.vehicle_make as vehicleMake, vh.is_assigned as isAssigned, vh.vehicle_color as vehicleColor, vh.serial_no as serialNo, vh.pin_num as pinNo, vh.seating_capacity as seatCapacity, vt.name as vehicleType, vh.vehicle_model as modelNo, vh.vehicle_make as vehicleMake, vh.engine_number as engineNo, vh.chesis_number as chesisNo, vh.vehicle_weight as vehicleWeight, vh.vehicle_model as vehicleModel, vt.id as vehicleTypeID, vt.name as vehicleType, ft.id as fuelTypeID, ft.name as fuelType, vh.serial_no as serialNo, vh.pin_num as pinNo, vh.service_year as serviceYear, vh.no_of_doors as noOfDoors, vh.initial_mileage as purchasedMileage, vh.current_mileage as currentMileage, vh.litter_per_km as literPerKM, vh.engine_number as engineNo, vh.chesis_number as chesisNo, vh.purchased_date as purchasedDate, vh.purchased_type as purchasedType, , vh.service_type_id as serviceTypeID,
				
					asvh.is_departed as isDeparted, 
					tsk.reference_no as refNo, tsk.id as taskID, tsk.start_date as startDate, tsk.effective_date as effectiveDate,
					(asvh.is_departed=false AND asvh.is_returned=false ) as activeVehicle,
					
					 asvh.participant_id as partyID, prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName, prt.full_name as fullName
				 
				")
				->from("Vehicle vh") 
				//->leftJoin("vh.assignmentTaskOrderVehicles asso")
				->innerJoin("vh.Category cat")
				->innerJoin("vh.FuelType ft")
				->innerJoin("vh.VehicleType vt")
				->leftJoin("vh.assignedVehicle asvh") 
				->leftJoin("asvh.Participant prt")
				->leftJoin("prt.participantDrivers dr")
				->leftJoin("vh.Task tsk")
				->offset($offset)
				->limit($limit)
				->where('vh.clss = ?', PropertyClassCore::$VEHICLE);
			 if(!is_null($type))
				$q = $q->addWhere('vh.vehicle_type_id = ?', $type);
			 if(!is_null($is_assigned))
				$q = $q->addWhere('vh.is_assigned = ?', $is_assigned);
			 if(!is_null($status))
				$q = $q->addWhere('vh.vehicle_status = ?', $status);
			if(!is_null($keyword) )
				$q = $q->andWhere("vh.plate_number LIKE ? OR vh.vehicle_model LIKE ? OR vh.vehicle_make LIKE ? OR ft.name LIKE ? OR vh.description LIKE ? OR prt.full_name LIKE ?", array($keyword,$keyword,$keyword,$keyword,$keyword,$keyword));
				
			$q = $q->execute( ); 

		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processObject ($_id, $token_id ) 
	{
		$q = Doctrine_Query::create()
					->select("vh.*, vh.plate_code as plateCode, vh.plate_number as plateNo, vh.plate_code_no as plateCodeNo, vh.vehicle_make as vehicleMake, vh.is_assigned as isAssigned, vh.vehicle_color as vehicleColor, vh.serial_no as serialNo, vh.pin_num as pinNo, vh.seating_capacity as seatCapacity, vt.name as vehicleType, vh.vehicle_model as modelNo, vh.vehicle_make as vehicleMake, vh.engine_number as engineNo, vh.chesis_number as chesisNo, vh.vehicle_weight as vehicleWeight, vh.vehicle_model as vehicleModel, vt.id as vehicleTypeID, vt.name as vehicleType, ft.id as fuelTypeID, ft.name as fuelType, vh.serial_no as serialNo, vh.pin_num as pinNo, vh.service_year as serviceYear, vh.no_of_doors as noOfDoors, vh.initial_mileage as purchasedMileage, vh.current_mileage as currentMileage, vh.litter_per_km as literPerKM, vh.engine_number as engineNo, vh.chesis_number as chesisNo, vh.purchased_date as purchasedDate, vh.purchased_type as purchasedType, , vh.service_type_id as serviceTypeID,
				
					asvh.is_departed as isDeparted, 
					tsk.reference_no as refNo, tsk.id as taskID, tsk.start_date as startDate, tsk.effective_date as effectiveDate,
					(asvh.is_departed=false AND asvh.is_returned=false ) as activeVehicle,
					
					 asvh.participant_id as partyID, prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName, prt.full_name as fullName
				 
				")
				->from("Vehicle vh") 
				->innerJoin("vh.assignmentTaskOrderVehicles asso")
				->innerJoin("vh.Category cat")
				->innerJoin("vh.FuelType ft")
				->innerJoin("vh.VehicleType vt")
				->leftJoin("vh.assignedVehicle asvh") 
				->leftJoin("asvh.Participant prt")
				->leftJoin("prt.participantDrivers dr")
				->leftJoin("vh.Task tsk")
			->where('vh.id = ? AND vh.token_id = ?', array($_id, $token_id))
			->fetchOne ( );
			
		return ( ! $q ? false : $q ); 
	}
	
	public static function findObject ($_id, $token_id ) 
	{
		$q= Doctrine_Query::create()
			->select("vh.*, vh.plate_code as plateCode, vh.plate_number as plateNo, vh.is_assigned as isAssigned, vh.vehicle_color as vehicleColor, vh.serial_no as serialNo, vh.pin_num as pinNo, vh.seating_capacity as seatCapacity, vh.vehicle_type_id as vehicleType, vh.fuel_type_id as fuelType, vh.vehicle_model as modelNo, vh.vehicle_make as vehicleMake, vh.engine_number as engineNo, vh.chesis_number as chesisNo, vh.vehicle_weight as vehicleWeight,  
			asso.participant_id as partID, asso.task_id as taskID, dr.employee_id as empID, prt.name as firstName, prt.father_name as fatherName, prt.grand_father_name as grandFatherName, prt.full_name as fullName, tsk.reference_no as refNo, tsk.start_date as startDate, tsk.effective_date as effectiveDate, asvh.is_departed as isDeparted")
			->from("Vehicle vh") 
			->leftJoin("vh.assignmentTaskOrderVehicles asso")
			->leftJoin("asso.Driver dr")
			->leftJoin("dr.Participant prt on prt.id = dr.employee_id")
			->leftJoin("vh.assignedVehicle asvh") 
			->leftJoin("vh.Task tsk")
			->where('vh.id = ? AND vh.token_id = ?', array($_id, $token_id))
			->fetchOne ( );
			
		return ( ! $q ? false : $q ); 
	}
	
	public static function  processVehicleTypeSelection ()  
	{
		$q = Doctrine_Query::create()
			->select("DISTINCT(vh.vehicle_type_id) AS vehicleType")
			->from("Vehicle vh") 
			->where("vh.vehicle_type_id IS NOT NULL")		
			->execute();
		
		$types = array();
		foreach( $q as $w)
			$types[] = $w->vehicleType;
	 
		return ( count ( $types ) <= 0 ? null : $types );
	}
	public static function  processFuelTypeSelection ()  
	{
		$q = Doctrine_Query::create()
			->select("DISTINCT(vh.vehicle_type_id) AS vehicleType")
			->from("Vehicle vh") 
			->where("vh.vehicle_type_id IS NOT NULL")		
			->execute();
		
		$types = array();
		foreach( $q as $w)
			$types[] = $w->vehicleType;
	 
		return ( count ( $types ) <= 0 ? null : $types );
	}
	
	public static function processVehicleAssignment( $order )
	{
		if( ! $order )
			return false;
			
		//try{
			
			$vehicle_id = $order->vehicleID;
			$token = $order->vehicleTokenID;
			$driver_id = $order->driverID;
			$dr_token = $order->driverTokenID;
			$part_id = $order->participant_id;
			$task_id =  $order->task_id;
			$token_id =  $order->token_id;
			$role =  ParticipantCore::$DRIVER;
			
			$driver = DriverTable::processObject ($driver_id, $dr_token );
			if(!$driver->isAssigned)
				$driver->assignDriver();
			
			$vehicle = self::processObject ($vehicle_id, $token );
			$vehicle->vehicle_status = self::$ACTIVE;
			$vehicle->save();
			
			if(!$vehicle->isAssigned)
			{
				$vehicle->assignVehicle();
				$vehicle->activateVehicle();
			}
				
			$_nw = new AssignedVehicle ( ); 
			$_nw->task_id = $order->task_id; 
			$_nw->token_id = $order->token_id; 
			$_nw->assignment_order_id = $order->id;  
			$_nw->effective_date = $order->effective_date; 
			$_nw->vehicle_id = $order->vehicle_id; 
			$_nw->participant_id = $order->participant_id;  
			$_nw->is_reasigned = false; 
			$_nw->save();

			$flag = AssignmentTaskTable::processCreateTaskParticipant ( $task_id, $token_id, $part_id, $role, null);
			
				
			 
			return true; 
		//} catch ( Exception $e ) {
		//	return false; 
		//}
	}
	
	public static function processAllVehicleSelection ($is_assigned=false, $type=null, $status=null, $keyword=null) 
	{
		$q= Doctrine_Query::create()
			->select("vh.*")
			->from("Vehicle vh") 
			->leftJoin("vh.assignmentTaskOrderVehicles asso")
			->leftJoin("vh.Category cat")
			->leftJoin("vh.FuelType ft")
			->leftJoin("vh.VehicleType vt")
			//->leftJoin("asso.Driver dr")
			->leftJoin("asso.Participant prt on prt.id = asso.participant_id")
			//->leftJoin("vh.assignedVehicle asvh")			 
			//->leftJoin("vh.Task tsk") 
			->where('vh.clss = ?', PropertyClassCore::$VEHICLE);
			 if(!is_null($type))
				$q = $q->addWhere('vh.vehicle_type_id = ?', $type);
			 if(!is_null($status))
				$q = $q->addWhere('vh.vehicle_status = ?', $status);
			if(! is_null($keyword) )
				$q = $q->andWhere("vh.plate_number LIKE ? OR vh.vehicle_model LIKE ? OR vh.vehicle_make LIKE ? OR ft.name LIKE ? OR vh.description LIKE ? OR prt.full_name LIKE ?", array($keyword,$keyword,$keyword,$keyword,$keyword,$keyword));
				
			$q = $q->execute( ); 


		return ( count ( $q ) <= 0 ? null : $q ); 
	}
	
	public static function processDeparture($vehicle)
	{
		
		
	}
	
	public static function isDuplicated($plate_no)
	{
		$q= Doctrine_Query::create()
			->select("vh.*")
			->from("Vehicle vh") 
			->where('vh.plate_number = ? ', $plate_no)
			->fetchOne ( );
			
		return ( ! $q ? false : $q ); 
		
	}
	
	public static function getInstance()
	{
	  return Doctrine_Core::getTable('Vehicle');
	}
}
