<?php

/**
 * TaskExpenseRequiredTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TaskExpenseRequiredTable extends PluginTaskExpenseRequiredTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TaskExpenseRequiredTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TaskExpenseRequired');
    }
}