<?php

/**
 * Credential form base class.
 *
 * @method Credential getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCredentialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'account_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => false)),
      'credential_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CredentialType'), 'add_empty' => true)),
      'name'               => new sfWidgetFormInputText(),
      'internal_ip'        => new sfWidgetFormInputText(),
      'external_ip'        => new sfWidgetFormInputText(),
      'device'             => new sfWidgetFormInputText(),
      'url'                => new sfWidgetFormInputText(),
      'user'               => new sfWidgetFormInputText(),
      'pass'               => new sfWidgetFormInputText(),
      'notes'              => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'))),
      'credential_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CredentialType'), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'internal_ip'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'external_ip'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'device'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pass'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'notes'              => new sfValidatorString(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('credential[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Credential';
  }

}
