<?php

/**
 * BaseItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token
 * @property integer $task_id
 * @property integer $task_order_id
 * @property integer $category_id
 * @property integer $category_group_id
 * @property integer $clss
 * @property integer $unit_id
 * @property float $quantity
 * @property float $used_quantity
 * @property float $current_quantity
 * @property string $serial_no
 * @property string $old_pin
 * @property string $new_pin
 * @property integer $pin_num
 * @property boolean $is_present
 * @property integer $effective_date
 * @property integer $status
 * @property clob $description
 * @property string $type
 * @property string $plate_number
 * @property string $plate_code
 * @property integer $initial_mileage
 * @property integer $current_mileage
 * @property integer $vehicle_type_id
 * @property float $litter_per_km
 * @property integer $seatng_capacity
 * @property string $engine_number
 * @property string $chesis_number
 * @property string $vehicle_model
 * @property string $vehicl_color
 * @property float $weight
 * @property integer $service_type_id
 * @property integer $fuel_type_id
 * @property date $purchased_date
 * @property integer $service_year
 * @property integer $checkup_period_id
 * @property integer $vehicle_status
 * @property integer $fuel_setting_id
 * @property boolean $is_assigned
 * @property string $spare_Identification
 * @property Category $Category
 * @property Task $Task
 * @property TaskOrder $TaskOrder
 * @property CategoryGroups $CategoryGroups
 * @property Unit $Unit
 * @property Doctrine_Collection $ServiceVehicleItemAcquired
 * @property Doctrine_Collection $tasAttachmentItems
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('item');
        $this->hasColumn('token', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('task_order_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('category_group_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('clss', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('unit_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('quantity', 'float', null, array(
             'type' => 'float',
             'default' => 0,
             ));
        $this->hasColumn('used_quantity', 'float', null, array(
             'type' => 'float',
             'default' => 0,
             ));
        $this->hasColumn('current_quantity', 'float', null, array(
             'type' => 'float',
             'default' => 0,
             ));
        $this->hasColumn('serial_no', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('old_pin', 'string', 255, array(
             'type' => 'string',
             'default' => 'NA',
             'length' => 255,
             ));
        $this->hasColumn('new_pin', 'string', 255, array(
             'type' => 'string',
             'default' => 'NA',
             'length' => 255,
             ));
        $this->hasColumn('pin_num', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('is_present', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('effective_date', 'integer', null, array(
             'type' => 'integer',
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
        $this->hasColumn('plate_number', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('plate_code', 'string', 255, array(
             'type' => 'string',
             'default' => 'ET',
             'length' => 255,
             ));
        $this->hasColumn('initial_mileage', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('current_mileage', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vehicle_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('litter_per_km', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('seatng_capacity', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('engine_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('chesis_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('vehicle_model', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('vehicl_color', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('weight', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('service_type_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('fuel_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('purchased_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('service_year', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('checkup_period_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vehicle_status', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('fuel_setting_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('is_assigned', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('spare_Identification', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));

        $this->setSubClasses(array(
             'Vehicle' => 
             array(
              'type' => 1,
             ),
             'Sparepart' => 
             array(
              'type' => 2,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('TaskOrder', array(
             'local' => 'task_order_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('CategoryGroups', array(
             'local' => 'category_group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Unit', array(
             'local' => 'unit_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('ServiceVehicleItemAcquired', array(
             'local' => 'id',
             'foreign' => 'item_id'));

        $this->hasMany('ItemAcquiredAttachment as tasAttachmentItems', array(
             'local' => 'id',
             'foreign' => 'item_id'));
    }
}