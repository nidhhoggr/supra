<?php

/**
 * BaseDeductions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $description
 * @property decimal $deduction
 * @property boolean $approved
 * 
 * @method integer    getId()          Returns the current record's "id" value
 * @method string     getTitle()       Returns the current record's "title" value
 * @method clob       getDescription() Returns the current record's "description" value
 * @method decimal    getDeduction()   Returns the current record's "deduction" value
 * @method boolean    getApproved()    Returns the current record's "approved" value
 * @method Deductions setId()          Sets the current record's "id" value
 * @method Deductions setTitle()       Sets the current record's "title" value
 * @method Deductions setDescription() Sets the current record's "description" value
 * @method Deductions setDeduction()   Sets the current record's "deduction" value
 * @method Deductions setApproved()    Sets the current record's "approved" value
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDeductions extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('deductions');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('deduction', 'decimal', null, array(
             'type' => 'decimal',
             ));
        $this->hasColumn('approved', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}