<?php

/**
 * BaseVehicle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property VehicleType $VehicleType
 * @property VehicleServiceType $VehicleServiceType
 * @property FuelType $FuelType
 * @property ServiceType $ServiceType
 * @property Doctrine_Collection $assignedVehicle
 * @property Doctrine_Collection $vehicleCheckupSettings
 * @property Doctrine_Collection $vehicleCheckupPeriod
 * @property Doctrine_Collection $serviceVehicleCosts
 * @property Doctrine_Collection $serviceVehicleItemAcquiredAttachments
 * @property Doctrine_Collection $serviceVehicleAttachmentVehicles
 * @property Doctrine_Collection $serviceVehicleAccidentVehicles
 * @property Doctrine_Collection $assignmentTaskOrderVehicles
 * @property Doctrine_Collection $vehicleReplacementVehicle
 * @property Doctrine_Collection $vhicleCheckupSettingTaskOrders
 * @property Doctrine_Collection $taskAccidentVehicle
 * @property Doctrine_Collection $taskIncidentVehicle
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVehicle extends Item
{
    public function setUp()
    {
        parent::setUp();
        $this->hasOne('VehicleType', array(
             'local' => 'vehicle_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('VehicleServiceType', array(
             'local' => 'service_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('FuelType', array(
             'local' => 'fuel_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ServiceType', array(
             'local' => 'service_type_id',
             'foreign' => 'id'));

        $this->hasMany('AssignedVehicle as assignedVehicle', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('VehicleInsuranceSetting as vehicleCheckupSettings', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('VehicleChakupPeriod as vehicleCheckupPeriod', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('ServiceVehicleCost as serviceVehicleCosts', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('ServiceVehicleItemAcqAssignmentOrderuired as serviceVehicleItemAcquiredAttachments', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('ServiceVehicleAttachment as serviceVehicleAttachmentVehicles', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('ServiceVehicleAccident as serviceVehicleAccidentVehicles', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('AssignmentOrder as assignmentTaskOrderVehicles', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('ReplacementTask as vehicleReplacementVehicle', array(
             'local' => 'id',
             'foreign' => 'new_vehicle_id'));

        $this->hasMany('CheckUpOrder as vhicleCheckupSettingTaskOrders', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('TaskAccident as taskAccidentVehicle', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $this->hasMany('TaskIncident as taskIncidentVehicle', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));
    }
}