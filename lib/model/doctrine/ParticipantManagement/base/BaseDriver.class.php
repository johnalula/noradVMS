<?php

/**
 * BaseDriver
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $employee_id
 * @property integer $license_type
 * @property integer $work_experience
 * @property boolean $is_assigned
 * @property clob $desctiption
 * @property Participant $Participant
 * @property Employee $Employee
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDriver extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('driver');
        $this->hasColumn('token_id', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('employee_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('license_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('work_experience', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('is_assigned', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('desctiption', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Participant', array(
             'local' => 'employee_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Employee', array(
             'local' => 'employee_id',
             'foreign' => 'id'));
    }
}