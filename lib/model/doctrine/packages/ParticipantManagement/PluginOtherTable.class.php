<?php

/**
 * PluginOtherTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginOtherTable extends ParticipantTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginOtherTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginOther');
    }
}