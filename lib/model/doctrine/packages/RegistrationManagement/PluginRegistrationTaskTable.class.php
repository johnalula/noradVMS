<?php

/**
 * PluginRegistrationTaskTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginRegistrationTaskTable extends TaskTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginRegistrationTaskTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginRegistrationTask');
    }
}