<?php

/**
 * BaseVehicleFuelSetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $vehicle_id
 * @property float $fuel_ammount
 * @property integer $number_of_days
 * @property clob $description
 * @property Vehicle $Vehicle
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVehicleFuelSetting extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehicle_fuel_setting');
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('fuel_ammount', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('number_of_days', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Vehicle', array(
             'local' => 'vehicle_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}