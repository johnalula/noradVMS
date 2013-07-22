<?php

/**
 * BaseTaskAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $task_id
 * @property integer $certificate_type_id
 * @property string $reference_number
 * @property integer $num_pages
 * @property string $folder_stored
 * @property string $description
 * @property Task $Task
 * @property CertificateType $CertificateType
 * 
 * @package    noradVMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTaskAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('task_attachment');
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('certificate_type_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('reference_number', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('num_pages', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
             ));
        $this->hasColumn('folder_stored', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('CertificateType', array(
             'local' => 'certificate_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}