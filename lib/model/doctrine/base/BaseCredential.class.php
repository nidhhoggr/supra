<?php

/**
 * BaseCredential
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $account_id
 * @property integer $credential_type_id
 * @property string $name
 * @property string $internal_ip
 * @property string $external_ip
 * @property string $device
 * @property string $url
 * @property string $user
 * @property string $pass
 * @property clob $notes
 * @property Account $Account
 * @property CredentialType $CredentialType
 * 
 * @method integer        getId()                 Returns the current record's "id" value
 * @method integer        getAccountId()          Returns the current record's "account_id" value
 * @method integer        getCredentialTypeId()   Returns the current record's "credential_type_id" value
 * @method string         getName()               Returns the current record's "name" value
 * @method string         getInternalIp()         Returns the current record's "internal_ip" value
 * @method string         getExternalIp()         Returns the current record's "external_ip" value
 * @method string         getDevice()             Returns the current record's "device" value
 * @method string         getUrl()                Returns the current record's "url" value
 * @method string         getUser()               Returns the current record's "user" value
 * @method string         getPass()               Returns the current record's "pass" value
 * @method clob           getNotes()              Returns the current record's "notes" value
 * @method Account        getAccount()            Returns the current record's "Account" value
 * @method CredentialType getCredentialType()     Returns the current record's "CredentialType" value
 * @method Credential     setId()                 Sets the current record's "id" value
 * @method Credential     setAccountId()          Sets the current record's "account_id" value
 * @method Credential     setCredentialTypeId()   Sets the current record's "credential_type_id" value
 * @method Credential     setName()               Sets the current record's "name" value
 * @method Credential     setInternalIp()         Sets the current record's "internal_ip" value
 * @method Credential     setExternalIp()         Sets the current record's "external_ip" value
 * @method Credential     setDevice()             Sets the current record's "device" value
 * @method Credential     setUrl()                Sets the current record's "url" value
 * @method Credential     setUser()               Sets the current record's "user" value
 * @method Credential     setPass()               Sets the current record's "pass" value
 * @method Credential     setNotes()              Sets the current record's "notes" value
 * @method Credential     setAccount()            Sets the current record's "Account" value
 * @method Credential     setCredentialType()     Sets the current record's "CredentialType" value
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCredential extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('credential');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('account_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('credential_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('internal_ip', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('external_ip', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('device', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('user', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('pass', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('notes', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('CredentialType', array(
             'local' => 'credential_type_id',
             'foreign' => 'id',
             'onDelete' => 'set null'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}