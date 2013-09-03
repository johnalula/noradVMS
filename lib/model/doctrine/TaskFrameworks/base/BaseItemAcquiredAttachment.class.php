<?php

/**
 * BaseItemAcquiredAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $task_id
 * @property string $token_id
 * @property integer $fleet_order_id
 * @property string $item_name
 * @property float $quantity
 * @property string $attachment_purpose
 * @property clob $description
 * @property Task $Task
 * @property FleetOrder $FleetOrder
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseItemAcquiredAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('item_acquired_attachment');
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('fleet_order_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('item_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('quantity', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('attachment_purpose', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('FleetOrder', array(
             'local' => 'fleet_order_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}