<?php

/**
 * BaseTaskLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $task_id
 * @property integer $task_work_id
 * @property integer $staff_id
 * @property string $title
 * @property clob $description
 * @property integer $gen_desc_id
 * @property clob $staff_comment
 * @property timestamp $clock_in
 * @property timestamp $clock_out
 * @property decimal $hours_logged
 * @property decimal $mileage
 * @property integer $percentage
 * @property boolean $is_billable
 * @property boolean $is_viewable
 * @property Task $Task
 * @property TaskWork $TaskWork
 * @property Staff $Staff
 * @property GenDesc $GenDesc
 * 
 * @method integer   getId()            Returns the current record's "id" value
 * @method integer   getTaskId()        Returns the current record's "task_id" value
 * @method integer   getTaskWorkId()    Returns the current record's "task_work_id" value
 * @method integer   getStaffId()       Returns the current record's "staff_id" value
 * @method string    getTitle()         Returns the current record's "title" value
 * @method clob      getDescription()   Returns the current record's "description" value
 * @method integer   getGenDescId()     Returns the current record's "gen_desc_id" value
 * @method clob      getStaffComment()  Returns the current record's "staff_comment" value
 * @method timestamp getClockIn()       Returns the current record's "clock_in" value
 * @method timestamp getClockOut()      Returns the current record's "clock_out" value
 * @method decimal   getHoursLogged()   Returns the current record's "hours_logged" value
 * @method decimal   getMileage()       Returns the current record's "mileage" value
 * @method integer   getPercentage()    Returns the current record's "percentage" value
 * @method boolean   getIsBillable()    Returns the current record's "is_billable" value
 * @method boolean   getIsViewable()    Returns the current record's "is_viewable" value
 * @method Task      getTask()          Returns the current record's "Task" value
 * @method TaskWork  getTaskWork()      Returns the current record's "TaskWork" value
 * @method Staff     getStaff()         Returns the current record's "Staff" value
 * @method GenDesc   getGenDesc()       Returns the current record's "GenDesc" value
 * @method TaskLog   setId()            Sets the current record's "id" value
 * @method TaskLog   setTaskId()        Sets the current record's "task_id" value
 * @method TaskLog   setTaskWorkId()    Sets the current record's "task_work_id" value
 * @method TaskLog   setStaffId()       Sets the current record's "staff_id" value
 * @method TaskLog   setTitle()         Sets the current record's "title" value
 * @method TaskLog   setDescription()   Sets the current record's "description" value
 * @method TaskLog   setGenDescId()     Sets the current record's "gen_desc_id" value
 * @method TaskLog   setStaffComment()  Sets the current record's "staff_comment" value
 * @method TaskLog   setClockIn()       Sets the current record's "clock_in" value
 * @method TaskLog   setClockOut()      Sets the current record's "clock_out" value
 * @method TaskLog   setHoursLogged()   Sets the current record's "hours_logged" value
 * @method TaskLog   setMileage()       Sets the current record's "mileage" value
 * @method TaskLog   setPercentage()    Sets the current record's "percentage" value
 * @method TaskLog   setIsBillable()    Sets the current record's "is_billable" value
 * @method TaskLog   setIsViewable()    Sets the current record's "is_viewable" value
 * @method TaskLog   setTask()          Sets the current record's "Task" value
 * @method TaskLog   setTaskWork()      Sets the current record's "TaskWork" value
 * @method TaskLog   setStaff()         Sets the current record's "Staff" value
 * @method TaskLog   setGenDesc()       Sets the current record's "GenDesc" value
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTaskLog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('task_log');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('task_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('task_work_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('staff_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('gen_desc_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('staff_comment', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('clock_in', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('clock_out', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('hours_logged', 'decimal', null, array(
             'type' => 'decimal',
             ));
        $this->hasColumn('mileage', 'decimal', null, array(
             'type' => 'decimal',
             ));
        $this->hasColumn('percentage', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('is_billable', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('is_viewable', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id'));

        $this->hasOne('TaskWork', array(
             'local' => 'task_work_id',
             'foreign' => 'id'));

        $this->hasOne('Staff', array(
             'local' => 'staff_id',
             'foreign' => 'id'));

        $this->hasOne('GenDesc', array(
             'local' => 'gen_desc_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}