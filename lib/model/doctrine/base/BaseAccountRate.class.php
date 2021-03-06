<?php

/**
 * BaseAccountRate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $account_id
 * @property integer $task_work_id
 * @property string $title
 * @property clob $description
 * @property decimal $hour_qouta
 * @property decimal $rate_before
 * @property decimal $rate_after
 * @property Account $Account
 * @property TaskWork $TaskWork
 * 
 * @method integer     getId()           Returns the current record's "id" value
 * @method integer     getAccountId()    Returns the current record's "account_id" value
 * @method integer     getTaskWorkId()   Returns the current record's "task_work_id" value
 * @method string      getTitle()        Returns the current record's "title" value
 * @method clob        getDescription()  Returns the current record's "description" value
 * @method decimal     getHourQouta()    Returns the current record's "hour_qouta" value
 * @method decimal     getRateBefore()   Returns the current record's "rate_before" value
 * @method decimal     getRateAfter()    Returns the current record's "rate_after" value
 * @method Account     getAccount()      Returns the current record's "Account" value
 * @method TaskWork    getTaskWork()     Returns the current record's "TaskWork" value
 * @method AccountRate setId()           Sets the current record's "id" value
 * @method AccountRate setAccountId()    Sets the current record's "account_id" value
 * @method AccountRate setTaskWorkId()   Sets the current record's "task_work_id" value
 * @method AccountRate setTitle()        Sets the current record's "title" value
 * @method AccountRate setDescription()  Sets the current record's "description" value
 * @method AccountRate setHourQouta()    Sets the current record's "hour_qouta" value
 * @method AccountRate setRateBefore()   Sets the current record's "rate_before" value
 * @method AccountRate setRateAfter()    Sets the current record's "rate_after" value
 * @method AccountRate setAccount()      Sets the current record's "Account" value
 * @method AccountRate setTaskWork()     Sets the current record's "TaskWork" value
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAccountRate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('account_rate');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('account_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('task_work_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('hour_qouta', 'decimal', null, array(
             'type' => 'decimal',
             ));
        $this->hasColumn('rate_before', 'decimal', null, array(
             'type' => 'decimal',
             ));
        $this->hasColumn('rate_after', 'decimal', null, array(
             'type' => 'decimal',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('TaskWork', array(
             'local' => 'task_work_id',
             'foreign' => 'id',
             'onDelete' => 'set null'));
    }
}