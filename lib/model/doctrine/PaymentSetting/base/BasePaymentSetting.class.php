<?php

/**
 * BasePaymentSetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $token_id
 * @property integer $payment_mode_id
 * @property float $cost_amount
 * @property integer $currency_id
 * @property clob $description
 * @property Currency $Currency
 * @property Doctrine_Collection $fleetPaymentModes
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePaymentSetting extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('payment_setting');
        $this->hasColumn('token_id', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('payment_mode_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('cost_amount', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('currency_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Currency', array(
             'local' => 'currency_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('FleetServiceTask as fleetPaymentModes', array(
             'local' => 'id',
             'foreign' => 'payment_mode_id'));
    }
}