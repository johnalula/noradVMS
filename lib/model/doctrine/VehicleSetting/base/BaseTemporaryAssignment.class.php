<?php

/**
 * BaseTemporaryAssignment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $vehicle_id
 * @property integer $participant_id
 * @property string $from_date
 * @property string $to_date
 * @property string $effective_date
 * @property clob $reasignment_reason
 * @property Vehicle $Vehicle
 * @property Participant $Participant
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTemporaryAssignment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('temporary_assignment');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('vehicle_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('participant_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('from_date', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('to_date', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('effective_date', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('reasignment_reason', 'clob', null, array(
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

        $this->hasOne('Participant', array(
             'local' => 'participant_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}