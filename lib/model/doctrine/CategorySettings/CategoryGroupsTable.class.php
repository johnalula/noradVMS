<?php

/**
 * CategoryGroupsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CategoryGroupsTable extends PluginCategoryGroupsTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CategoryGroupsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CategoryGroups');
    }
}