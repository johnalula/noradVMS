<?php

/**
 * ServiceVehicleCostTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ServiceVehicleCostTable extends PluginServiceVehicleCostTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ServiceVehicleCostTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ServiceVehicleCost');
    }
}