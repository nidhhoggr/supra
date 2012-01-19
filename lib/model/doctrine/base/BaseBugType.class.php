<?php

/**
 * BaseBugType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $Bug
 * 
 * @method integer             getId()   Returns the current record's "id" value
 * @method string              getName() Returns the current record's "name" value
 * @method Doctrine_Collection getBug()  Returns the current record's "Bug" collection
 * @method BugType             setId()   Sets the current record's "id" value
 * @method BugType             setName() Sets the current record's "name" value
 * @method BugType             setBug()  Sets the current record's "Bug" collection
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBugType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('bug_type');
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
        $this->hasMany('Bug', array(
             'local' => 'id',
             'foreign' => 'bug_type_id'));
    }
}