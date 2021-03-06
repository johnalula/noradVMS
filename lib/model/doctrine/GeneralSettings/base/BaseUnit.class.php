<?php

/**
 * BaseUnit
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $alias
 * @property string $description
 * @property Doctrine_Collection $itemUnits
 * @property Doctrine_Collection $taskOrderUnits
 * @property Doctrine_Collection $taskExpenseUnit
 * @property Doctrine_Collection $units
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUnit extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('unit');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 40, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 40,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Item as itemUnits', array(
             'local' => 'id',
             'foreign' => 'unit_id'));

        $this->hasMany('TaskOrder as taskOrderUnits', array(
             'local' => 'id',
             'foreign' => 'unit_id'));

        $this->hasMany('TaskExpenseRequired as taskExpenseUnit', array(
             'local' => 'id',
             'foreign' => 'unit_id'));

        $this->hasMany('UnitConversion as units', array(
             'local' => 'id',
             'foreign' => 'from_unit_id'));
    }
}