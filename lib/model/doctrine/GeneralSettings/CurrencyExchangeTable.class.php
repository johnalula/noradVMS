<?php

/**
 * CurrencyExchangeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CurrencyExchangeTable extends PluginCurrencyExchangeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CurrencyExchangeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CurrencyExchange');
    }
}