<?php

/**
 * BaseTimeLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $time_log_type_id
 * @property integer $staff_id
 * @property timestamp $time
 * @property clob $notes
 * @property Staff $Staff
 * @property TimeLogType $TimeLogType
 * 
 * @method integer     getId()               Returns the current record's "id" value
 * @method integer     getTimeLogTypeId()    Returns the current record's "time_log_type_id" value
 * @method integer     getStaffId()          Returns the current record's "staff_id" value
 * @method timestamp   getTime()             Returns the current record's "time" value
 * @method clob        getNotes()            Returns the current record's "notes" value
 * @method Staff       getStaff()            Returns the current record's "Staff" value
 * @method TimeLogType getTimeLogType()      Returns the current record's "TimeLogType" value
 * @method TimeLog     setId()               Sets the current record's "id" value
 * @method TimeLog     setTimeLogTypeId()    Sets the current record's "time_log_type_id" value
 * @method TimeLog     setStaffId()          Sets the current record's "staff_id" value
 * @method TimeLog     setTime()             Sets the current record's "time" value
 * @method TimeLog     setNotes()            Sets the current record's "notes" value
 * @method TimeLog     setStaff()            Sets the current record's "Staff" value
 * @method TimeLog     setTimeLogType()      Sets the current record's "TimeLogType" value
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTimeLog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('time_log');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('time_log_type_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('staff_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('time', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('notes', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Staff', array(
             'local' => 'staff_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('TimeLogType', array(
             'local' => 'time_log_type_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}