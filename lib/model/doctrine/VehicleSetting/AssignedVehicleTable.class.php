<?php

/**
 * AssignedVehicleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AssignedVehicleTable extends PluginAssignedVehicleTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object AssignedVehicleTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AssignedVehicle');
    }
}