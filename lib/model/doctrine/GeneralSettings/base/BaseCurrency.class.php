<?php

/**
 * BaseCurrency
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $alias
 * @property boolean $is_default
 * @property Doctrine_Collection $taskOrderCurrencies
 * @property Doctrine_Collection $tocurrencies
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCurrency extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('currency');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('alias', 'string', 40, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 40,
             ));
        $this->hasColumn('is_default', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('TaskOrder as taskOrderCurrencies', array(
             'local' => 'id',
             'foreign' => 'currency_id'));

        $this->hasMany('CurrencyExchange as tocurrencies', array(
             'local' => 'id',
             'foreign' => 'to_currency_id'));
    }
}