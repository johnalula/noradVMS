<?php

/**
 * BaseUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $token_id
 * @property string $name
 * @property clob $description
 * @property Doctrine_Collection $userGroups
 * @property Doctrine_Collection $groupModulePermissions
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_group');
        $this->hasColumn('token_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('User as userGroups', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $this->hasMany('permission as groupModulePermissions', array(
             'local' => 'id',
             'foreign' => 'group_id'));
    }
}