<?php

/**
 * CheckUpSettingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CheckUpSettingTable extends PluginCheckUpSettingTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CheckUpSettingTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CheckUpSetting');
    }
}