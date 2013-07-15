<?php

/**
 * BaseTask
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $vehicle_id
 * @property integer $token_id
 * @property date $start_date
 * @property date $end_date
 * @property date $effective_date
 * @property integer $status
 * @property clob $description
 * @property string $type
 * @property integer $agreement_participant_id
 * @property date $departure_date
 * @property time $departure_time
 * @property integer $departure_status
 * @property date $return_date
 * @property time $return_time
 * @property integer $return_status
 * @property integer $no_of_passangers
 * @property float $service_agreement_cost
 * @property string $service_reason
 * @property integer $departure_mileage
 * @property integer $return_mileage
 * @property integer $difference_mileag
 * @property integer $service_type_id
 * @property integer $duel_acquire_id
 * @property string $destination
 * @property integer $service_no_days
 * @property integer $driver_id
 * @property integer $transferer_id
 * @property integer $transferee_id
 * @property integer $new_vehicle_id
 * @property integer $returnee_id
 * @property Vehicle $Vehicle
 * @property Doctrine_Collection $itemTasks
 * @property Doctrine_Collection $vehicleAssignmentTasks
 * @property Doctrine_Collection $serviceVehicleCostTasks
 * @property Doctrine_Collection $serviceVehicleAttachmentTasks
 * @property Doctrine_Collection $serviceVehicleAccidentTasks
 * @property Doctrine_Collection $ServiceAccident
 * @property Doctrine_Collection $taskAttachmentTasks
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTask extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('task');
        $this->hasColumn('vehicle_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('token_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('start_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('end_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('effective_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('agreement_participant_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('departure_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('departure_time', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('departure_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('return_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('return_time', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('return_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('no_of_passangers', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('service_agreement_cost', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('service_reason', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('departure_mileage', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('return_mileage', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('difference_mileag', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('service_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('duel_acquire_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('destination', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('service_no_days', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('driver_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('transferer_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('transferee_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('new_vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('returnee_id', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->setSubClasses(array(
             'FleetServiceTask' => 
             array(
              'type' => 1,
             ),
             'MaintenanceTask' => 
             array(
              'type' => 2,
             ),
             'RegistrationTask' => 
             array(
              'type' => 3,
             ),
             'FuelingTask' => 
             array(
              'type' => 4,
             ),
             'AccidentTask' => 
             array(
              'type' => 5,
             ),
             'AssignmentTask' => 
             array(
              'type' => 6,
             ),
             'TransferTask' => 
             array(
              'type' => 7,
             ),
             'ReplacementTask' => 
             array(
              'type' => 8,
             ),
             'ReturnTask' => 
             array(
              'type' => 9,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Vehicle', array(
             'local' => 'vehicle_id',
             'foreign' => 'id'));

        $this->hasMany('Item as itemTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('AssignedVehicle as vehicleAssignmentTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('ServiceVehicleCost as serviceVehicleCostTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('ServiceVehicleItemAcquired as serviceVehicleAttachmentTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('ServiceVehicleAccident as serviceVehicleAccidentTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('ServiceAccident', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskParticipant as taskAttachmentTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));
    }
}