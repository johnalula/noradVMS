<?php

/**
 * BaseServiceVehicleItemAcquired
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $task_id
 * @property integer $vehicle_id
 * @property integer $item_id
 * @property integer $item_name
 * @property integer $serial_no
 * @property Task $Task
 * @property Vehicle $Vehicle
 * @property Item $Item
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseServiceVehicleItemAcquired extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('service_vehicle_item_acquired');
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('item_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('item_name', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('serial_no', 'integer', null, array(
             'type' => 'integer',
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

        $this->hasOne('Item', array(
             'local' => 'item_id',
             'foreign' => 'id'));
    }
}