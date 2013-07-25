<?php

/**
 * BaseTaskAccident
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $task_id
 * @property integer $vehicle_id
 * @property integer $accident_type_id
 * @property string $accident_location
 * @property string $accident_date
 * @property timestamp $accident_time
 * @property float $expense_required
 * @property string $description
 * @property Task $Task
 * @property Vehicle $Vehicle
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTaskAccident extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('task_accident');
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('accident_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('accident_location', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('accident_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('accident_time', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('expense_required', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('description', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Vehicle', array(
             'local' => 'vehicle_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}