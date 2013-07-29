<?php

/**
 * BasePermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $group_id
 * @property integer $user_id
 * @property integer $module_id
 * @property boolean $create_action
 * @property boolean $delete_action
 * @property boolean $edit_action
 * @property boolean $view_action
 * @property UserGroup $UserGroup
 * @property User $User
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('permission');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('module_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('create_action', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('delete_action', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('edit_action', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('view_action', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UserGroup', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}