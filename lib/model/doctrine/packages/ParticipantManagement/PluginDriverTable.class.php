<?php

/**
 * PluginDriverTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginDriverTable extends ParticipantTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginDriverTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginDriver');
    }
}