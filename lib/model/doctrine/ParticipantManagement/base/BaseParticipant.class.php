<?php

/**
 * BaseParticipant
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property string $name
 * @property string $alias
 * @property integer $participant_type
 * @property integer $status_id
 * @property integer $parent_id
 * @property integer $participant_leader_id
 * @property string $vat_number
 * @property integer $project_no
 * @property integer $campus_id
 * @property string $description
 * @property string $type
 * @property string $title
 * @property string $father_name
 * @property string $grand_father_name
 * @property string $full_name
 * @property integer $gender
 * @property datetime $birth_date
 * @property string $birth_place
 * @property string $id_no
 * @property string $job_title
 * @property integer $employment_type_id
 * @property integer $section_no
 * @property integer $project_code
 * @property date $established_date
 * @property string $company_owner
 * @property integer $company_license_type
 * @property Participant $Participant
 * @property Campus $Campus
 * @property Employee $Employee
 * @property Doctrine_Collection $vehicleDriverParticipants
 * @property Doctrine_Collection $fleetTaskParticipants
 * @property Doctrine_Collection $vehicleAssignDriverParticipant
 * @property Doctrine_Collection $assignmentTaskOrderParticipants
 * @property Doctrine_Collection $transferTaskTransferee
 * @property Doctrine_Collection $vehicleReturnParticipants
 * @property Doctrine_Collection $taskParticipants
 * @property Doctrine_Collection $participantParentParticipants
 * @property Doctrine_Collection $participantContacts
 * @property Doctrine_Collection $participantDrivers
 * @property Doctrine_Collection $participantUser
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParticipant extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('participant');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('participant_type', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('status_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('parent_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('participant_leader_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vat_number', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('project_no', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('campus_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('father_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('grand_father_name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('full_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('gender', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('birth_date', 'datetime', null, array(
             'type' => 'datetime',
             ));
        $this->hasColumn('birth_place', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('id_no', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('job_title', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('employment_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('section_no', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('project_code', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('established_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('company_owner', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('company_license_type', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->setSubClasses(array(
             'Employee' => 
             array(
              'type' => 1,
             ),
             'College' => 
             array(
              'type' => 2,
             ),
             'Center' => 
             array(
              'type' => 3,
             ),
             'Institution' => 
             array(
              'type' => 4,
             ),
             'Department' => 
             array(
              'type' => 5,
             ),
             'Section' => 
             array(
              'type' => 6,
             ),
             'Office' => 
             array(
              'type' => 7,
             ),
             'Project' => 
             array(
              'type' => 8,
             ),
             'Other' => 
             array(
              'type' => 9,
             ),
             'Company' => 
             array(
              'type' => 10,
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Participant', array(
             'local' => 'parent_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Campus', array(
             'local' => 'campus_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Employee', array(
             'local' => 'participant_leader_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('AssignedVehicle as vehicleDriverParticipants', array(
             'local' => 'id',
             'foreign' => 'participant_id'));

        $this->hasMany('FleetServiceTask as fleetTaskParticipants', array(
             'local' => 'id',
             'foreign' => 'customer_id'));

        $this->hasMany('AssignmentTask as vehicleAssignDriverParticipant', array(
             'local' => 'id',
             'foreign' => 'driver_id'));

        $this->hasMany('AssignmentOrder as assignmentTaskOrderParticipants', array(
             'local' => 'id',
             'foreign' => 'participant_id'));

        $this->hasMany('TransferTask as transferTaskTransferee', array(
             'local' => 'id',
             'foreign' => 'transferee_id'));

        $this->hasMany('ReturnTask as vehicleReturnParticipants', array(
             'local' => 'id',
             'foreign' => 'returnee_id'));

        $this->hasMany('TaskParticipant as taskParticipants', array(
             'local' => 'id',
             'foreign' => 'participant_id'));

        $this->hasMany('Participant as participantParentParticipants', array(
             'local' => 'id',
             'foreign' => 'parent_id'));

        $this->hasMany('ParticipantContact as participantContacts', array(
             'local' => 'id',
             'foreign' => 'participant_id'));

        $this->hasMany('Driver as participantDrivers', array(
             'local' => 'id',
             'foreign' => 'employee_id'));

        $this->hasMany('User as participantUser', array(
             'local' => 'id',
             'foreign' => 'participant_id'));
    }
}