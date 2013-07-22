<?php

/**
 * BaseReturnTask
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Participant $Participant
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReturnTask extends Task
{
    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Participant', array(
             'local' => 'returnee_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}