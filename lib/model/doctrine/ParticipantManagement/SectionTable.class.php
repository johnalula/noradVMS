<?php

/**
 * SectionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SectionTable extends PluginSectionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SectionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Section');
    }
}