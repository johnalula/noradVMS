<?php

/**
 * TemporaryAssignmentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TemporaryAssignmentTable extends PluginTemporaryAssignmentTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TemporaryAssignmentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TemporaryAssignment');
    }
}