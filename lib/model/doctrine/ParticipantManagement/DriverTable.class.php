<?php

/**
 * DriverTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DriverTable extends PluginDriverTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DriverTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Driver');
    }
}