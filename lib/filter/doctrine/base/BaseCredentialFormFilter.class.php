<?php

/**
 * Credential filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCredentialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'account_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => true)),
      'credential_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CredentialType'), 'add_empty' => true)),
      'name'               => new sfWidgetFormFilterInput(),
      'internal_ip'        => new sfWidgetFormFilterInput(),
      'external_ip'        => new sfWidgetFormFilterInput(),
      'device'             => new sfWidgetFormFilterInput(),
      'url'                => new sfWidgetFormFilterInput(),
      'user'               => new sfWidgetFormFilterInput(),
      'pass'               => new sfWidgetFormFilterInput(),
      'notes'              => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'account_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Account'), 'column' => 'id')),
      'credential_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CredentialType'), 'column' => 'id')),
      'name'               => new sfValidatorPass(array('required' => false)),
      'internal_ip'        => new sfValidatorPass(array('required' => false)),
      'external_ip'        => new sfValidatorPass(array('required' => false)),
      'device'             => new sfValidatorPass(array('required' => false)),
      'url'                => new sfValidatorPass(array('required' => false)),
      'user'               => new sfValidatorPass(array('required' => false)),
      'pass'               => new sfValidatorPass(array('required' => false)),
      'notes'              => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('credential_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Credential';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'account_id'         => 'ForeignKey',
      'credential_type_id' => 'ForeignKey',
      'name'               => 'Text',
      'internal_ip'        => 'Text',
      'external_ip'        => 'Text',
      'device'             => 'Text',
      'url'                => 'Text',
      'user'               => 'Text',
      'pass'               => 'Text',
      'notes'              => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
