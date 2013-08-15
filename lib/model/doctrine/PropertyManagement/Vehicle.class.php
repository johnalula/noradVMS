<?php

/**
 * Vehicle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Vehicle extends PluginVehicle
{
	
	public function assignVehicle()
	{
		$this->is_assigned = true;
		$this->save();
			
	}
	public function activateVehicle()
	{
		$this->vehicle_status = VehicleTable::$ACTIVE;
		$this->save();
			
	}
	public function fieldVehicle()
	{
		$this->vehicle_status = VehicleTable::$ON_FIELD;
		$this->save();
			
	}
	public function maintainVehicle()
	{
		$this->vehicle_status = VehicleTable::$ON_MAINTENANCE;
		$this->save();
			
	}
	
	public function processDeparure()
	{
		$this->is_departed = true;
		$this->save();
	}
	
	public function processReturn()
	{
		$this->is_departed = false;
		$this->save();
	}
}
