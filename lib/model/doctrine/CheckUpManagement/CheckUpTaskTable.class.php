<?php

/**
 * CheckUpTaskTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CheckUpTaskTable extends PluginCheckUpTaskTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CheckUpTaskTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CheckUpTask');
    }
}