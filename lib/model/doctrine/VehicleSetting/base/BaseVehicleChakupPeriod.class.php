<?php

/**
 * BaseVehicleChakupPeriod
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $vehicle_id
 * @property integer $service_period
 * @property integer $period_frequency
 * @property Vehicle $Vehicle
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVehicleChakupPeriod extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehicle_chakup_period');
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('service_period', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('period_frequency', 'integer', null, array(
             'type' => 'integer',
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