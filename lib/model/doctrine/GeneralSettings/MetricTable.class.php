<?php

/**
 * MetricTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MetricTable extends PluginMetricTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MetricTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Metric');
    }
}