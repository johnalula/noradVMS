<?php

/**
 * FuelingTaskTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FuelingTaskTable extends PluginFuelingTaskTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object FuelingTaskTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('FuelingTask');
    }
}