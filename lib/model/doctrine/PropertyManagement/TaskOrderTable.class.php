<?php

/**
 * TaskOrderTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TaskOrderTable extends PluginTaskOrderTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TaskOrderTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TaskOrder');
    }
}