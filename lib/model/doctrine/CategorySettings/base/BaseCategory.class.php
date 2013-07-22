<?php

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property integer $parent_category_id
 * @property Category $Category
 * @property Doctrine_Collection $itemCategorys
 * @property Doctrine_Collection $categoryCategories
 * @property Doctrine_Collection $categoryGroupsCategories
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
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('parent_category_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'parent_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Item as itemCategorys', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('Category as categoryCategories', array(
             'local' => 'id',
             'foreign' => 'parent_category_id'));

        $this->hasMany('CategoryGroups as categoryGroupsCategories', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('TaskOrder as taskOrderCategories', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}