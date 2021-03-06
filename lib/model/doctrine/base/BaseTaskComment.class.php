<?php

/**
 * BaseTaskComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $task_id
 * @property integer $staff_id
 * @property string $title
 * @property clob $comment
 * @property Staff $Staff
 * @property Task $Task
 * 
 * @method integer     getId()       Returns the current record's "id" value
 * @method integer     getTaskId()   Returns the current record's "task_id" value
 * @method integer     getStaffId()  Returns the current record's "staff_id" value
 * @method string      getTitle()    Returns the current record's "title" value
 * @method clob        getComment()  Returns the current record's "comment" value
 * @method Staff       getStaff()    Returns the current record's "Staff" value
 * @method Task        getTask()     Returns the current record's "Task" value
 * @method TaskComment setId()       Sets the current record's "id" value
 * @method TaskComment setTaskId()   Sets the current record's "task_id" value
 * @method TaskComment setStaffId()  Sets the current record's "staff_id" value
 * @method TaskComment setTitle()    Sets the current record's "title" value
 * @method TaskComment setComment()  Sets the current record's "comment" value
 * @method TaskComment setStaff()    Sets the current record's "Staff" value
 * @method TaskComment setTask()     Sets the current record's "Task" value
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTaskComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('task_comment');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('task_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('staff_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('comment', 'clob', null, array(
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

        $this->hasOne('Task', array(
             'local' => 'task_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}