<?php

/**
 * CollegeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CollegeTable extends PluginCollegeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CollegeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('College');
    }
}