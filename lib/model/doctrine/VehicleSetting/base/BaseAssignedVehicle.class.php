<?php

/**
 * BaseAssignedVehicle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $task_id
 * @property string $token_id
 * @property integer $participant_id
 * @property integer $vehicle_id
 * @property integer $assignment_order_id
 * @property string $effective_date
 * @property datetime $assigned_date
 * @property boolean $maintenance_status
 * @property boolean $departure_status
 * @property boolean $return_status
 * @property boolean $reasigned_status
 * @property Task $Task
 * @property AssignmentOrder $AssignmentOrder
 * @property Participant $Participant
 * @property Vehicle $Vehicle
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAssignedVehicle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('assigned_vehicle');
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('participant_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('assignment_order_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('assigned_date', 'datetime', null, array(
             'type' => 'datetime',
             ));
        $this->hasColumn('maintenance_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('departure_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('return_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('reasigned_status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('AssignmentOrder', array(
             'local' => 'assignment_order_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Participant', array(
             'local' => 'participant_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Vehicle', array(
             'local' => 'vehicle_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}