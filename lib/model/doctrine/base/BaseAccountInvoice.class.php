<?php

/**
 * BaseAccountInvoice
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $account_id
 * @property string $ref_no
 * @property clob $description
 * @property boolean $paid_off
 * @property boolean $is_viewable
 * @property Account $Account
 * @property Doctrine_Collection $Deduction
 * @property Doctrine_Collection $Task
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getAccountId()   Returns the current record's "account_id" value
 * @method string              getRefNo()       Returns the current record's "ref_no" value
 * @method clob                getDescription() Returns the current record's "description" value
 * @method boolean             getPaidOff()     Returns the current record's "paid_off" value
 * @method boolean             getIsViewable()  Returns the current record's "is_viewable" value
 * @method Account             getAccount()     Returns the current record's "Account" value
 * @method Doctrine_Collection getDeduction()   Returns the current record's "Deduction" collection
 * @method Doctrine_Collection getTask()        Returns the current record's "Task" collection
 * @method AccountInvoice      setId()          Sets the current record's "id" value
 * @method AccountInvoice      setAccountId()   Sets the current record's "account_id" value
 * @method AccountInvoice      setRefNo()       Sets the current record's "ref_no" value
 * @method AccountInvoice      setDescription() Sets the current record's "description" value
 * @method AccountInvoice      setPaidOff()     Sets the current record's "paid_off" value
 * @method AccountInvoice      setIsViewable()  Sets the current record's "is_viewable" value
 * @method AccountInvoice      setAccount()     Sets the current record's "Account" value
 * @method AccountInvoice      setDeduction()   Sets the current record's "Deduction" collection
 * @method AccountInvoice      setTask()        Sets the current record's "Task" collection
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAccountInvoice extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('account_invoice');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('account_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('ref_no', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('paid_off', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
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
        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasMany('Deduction', array(
             'local' => 'id',
             'foreign' => 'account_invoice_id'));

        $this->hasMany('Task', array(
             'local' => 'id',
             'foreign' => 'account_invoice_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}