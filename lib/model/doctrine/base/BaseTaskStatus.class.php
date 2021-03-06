<?php

/**
 * BaseTaskStatus
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $Task
 * 
 * @method integer             getId()   Returns the current record's "id" value
 * @method string              getName() Returns the current record's "name" value
 * @method Doctrine_Collection getTask() Returns the current record's "Task" collection
 * @method TaskStatus          setId()   Sets the current record's "id" value
 * @method TaskStatus          setName() Sets the current record's "name" value
 * @method TaskStatus          setTask() Sets the current record's "Task" collection
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTaskStatus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('task_status');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Task', array(
             'local' => 'id',
             'foreign' => 'task_status_id'));
    }
}