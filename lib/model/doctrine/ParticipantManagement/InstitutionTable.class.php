<?php

/**
 * InstitutionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class InstitutionTable extends PluginInstitutionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object InstitutionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Institution');
    }
}