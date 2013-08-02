<?php

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $category_group_id
 * @property integer $category_class_id
 * @property string $description
 * @property Doctrine_Collection $itemCategorys
 * @property Doctrine_Collection $taskOrderCategories
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('category_group_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('category_class_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 4,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Item as itemCategorys', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('TaskOrder as taskOrderCategories', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}