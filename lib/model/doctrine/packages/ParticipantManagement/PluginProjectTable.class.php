<?php

/**
 * PluginProjectTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginProjectTable extends ParticipantTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginProjectTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginProject');
    }
}