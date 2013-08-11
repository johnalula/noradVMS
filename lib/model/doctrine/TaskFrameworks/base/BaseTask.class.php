<?php

/**
 * BaseTask
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property string $start_date
 * @property string $end_date
 * @property string $effective_date
 * @property integer $status_id
 * @property integer $reference_no
 * @property clob $description
 * @property string $type
 * @property integer $agreement_participant_id
 * @property float $service_agreement_cost
 * @property integer $payment_mode_id
 * @property integer $service_type_id
 * @property string $service_reason
 * @property string $destination
 * @property integer $service_number_of_days
 * @property boolean $service_delay_status
 * @property integer $number_of_delay_days
 * @property string $departure_date
 * @property string $departure_time
 * @property boolean $departure_status
 * @property string $return_date
 * @property string $return_time
 * @property boolean $return_status
 * @property clob $delay_reason
 * @property integer $registration_mode
 * @property integer $driver_id
 * @property integer $transferer_id
 * @property integer $transferee_id
 * @property integer $new_vehicle_id
 * @property integer $returnee_id
 * @property Doctrine_Collection $itemTasks
 * @property Doctrine_Collection $vehicleAssignmentTasks
 * @property Doctrine_Collection $taskCostTransactions
 * @property Doctrine_Collection $taskOrderTasks
 * @property Doctrine_Collection $fleetTaskOrderTasks
 * @property Doctrine_Collection $serviceVehicleCostTasks
 * @property Doctrine_Collection $serviceVehicleAttachmentTasks
 * @property Doctrine_Collection $serviceVehicleAccidentTasks
 * @property Doctrine_Collection $ServiceAccident
 * @property Doctrine_Collection $taskParticipantsTasks
 * @property Doctrine_Collection $taskAttachmentTasks
 * @property Doctrine_Collection $taskAttachmentTask
 * @property Doctrine_Collection $taskAccidents
 * @property Doctrine_Collection $taskIncident
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
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('start_date', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('end_date', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('effective_date', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('status_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('reference_no', 'integer', null, array(
             'type' => 'integer',
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
        $this->hasColumn('service_agreement_cost', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('payment_mode_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('service_type_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('service_reason', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('destination', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('service_number_of_days', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('service_delay_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('number_of_delay_days', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('departure_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('departure_time', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('departure_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('return_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('return_time', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('return_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('delay_reason', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('registration_mode', 'integer', null, array(
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
        $this->hasMany('Item as itemTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('AssignedVehicle as vehicleAssignmentTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskTransaction as taskCostTransactions', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskOrder as taskOrderTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('FleetOrder as fleetTaskOrderTasks', array(
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

        $this->hasMany('TaskParticipant as taskParticipantsTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskAttachment as taskAttachmentTasks', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskExpenseRequired as taskAttachmentTask', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskAccident as taskAccidents', array(
             'local' => 'id',
             'foreign' => 'task_id'));

        $this->hasMany('TaskIncident as taskIncident', array(
             'local' => 'id',
             'foreign' => 'task_id'));
    }
}