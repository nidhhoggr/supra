<?php

/**
 * BaseAccount
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $client_id
 * @property integer $plan_id
 * @property string $title
 * @property string $domain_name
 * @property clob $description
 * @property boolean $active
 * @property Client $Client
 * @property Plan $Plan
 * @property Doctrine_Collection $AccountRate
 * @property Doctrine_Collection $Credential
 * @property Doctrine_Collection $AccountPlan
 * @property Doctrine_Collection $AccountInvoice
 * @property Doctrine_Collection $AccountRecord
 * @property Doctrine_Collection $Task
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method integer             getClientId()       Returns the current record's "client_id" value
 * @method integer             getPlanId()         Returns the current record's "plan_id" value
 * @method string              getTitle()          Returns the current record's "title" value
 * @method string              getDomainName()     Returns the current record's "domain_name" value
 * @method clob                getDescription()    Returns the current record's "description" value
 * @method boolean             getActive()         Returns the current record's "active" value
 * @method Client              getClient()         Returns the current record's "Client" value
 * @method Plan                getPlan()           Returns the current record's "Plan" value
 * @method Doctrine_Collection getAccountRate()    Returns the current record's "AccountRate" collection
 * @method Doctrine_Collection getCredential()     Returns the current record's "Credential" collection
 * @method Doctrine_Collection getAccountPlan()    Returns the current record's "AccountPlan" collection
 * @method Doctrine_Collection getAccountInvoice() Returns the current record's "AccountInvoice" collection
 * @method Doctrine_Collection getAccountRecord()  Returns the current record's "AccountRecord" collection
 * @method Doctrine_Collection getTask()           Returns the current record's "Task" collection
 * @method Account             setId()             Sets the current record's "id" value
 * @method Account             setClientId()       Sets the current record's "client_id" value
 * @method Account             setPlanId()         Sets the current record's "plan_id" value
 * @method Account             setTitle()          Sets the current record's "title" value
 * @method Account             setDomainName()     Sets the current record's "domain_name" value
 * @method Account             setDescription()    Sets the current record's "description" value
 * @method Account             setActive()         Sets the current record's "active" value
 * @method Account             setClient()         Sets the current record's "Client" value
 * @method Account             setPlan()           Sets the current record's "Plan" value
 * @method Account             setAccountRate()    Sets the current record's "AccountRate" collection
 * @method Account             setCredential()     Sets the current record's "Credential" collection
 * @method Account             setAccountPlan()    Sets the current record's "AccountPlan" collection
 * @method Account             setAccountInvoice() Sets the current record's "AccountInvoice" collection
 * @method Account             setAccountRecord()  Sets the current record's "AccountRecord" collection
 * @method Account             setTask()           Sets the current record's "Task" collection
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAccount extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('account');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('client_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('plan_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('domain_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Client', array(
             'local' => 'client_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('Plan', array(
             'local' => 'plan_id',
             'foreign' => 'id',
             'onDelete' => 'set null'));

        $this->hasMany('AccountRate', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $this->hasMany('Credential', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $this->hasMany('AccountPlan', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $this->hasMany('AccountInvoice', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $this->hasMany('AccountRecord', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $this->hasMany('Task', array(
             'local' => 'id',
             'foreign' => 'account_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}