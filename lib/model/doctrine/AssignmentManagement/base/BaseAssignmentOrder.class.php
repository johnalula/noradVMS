<?php

/**
 * BaseAssignmentOrder
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $task_id
 * @property string $token_id
 * @property integer $vehicle_id
 * @property integer $participant_id
 * @property string $effective_date
 * @property integer $status
 * @property string $description
 * @property Task $Task
 * @property Participant $Participant
 * @property Vehicle $Vehicle
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAssignmentOrder extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('assignment_order');
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('participant_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('effective_date', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Task', array(
             'local' => 'task_id',
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

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}