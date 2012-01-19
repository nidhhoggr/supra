<?php

/**
 * Bug form base class.
 *
 * @method Bug getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBugForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'account_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => false)),
      'staff_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'add_empty' => true)),
      'bug_status_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BugStatus'), 'add_empty' => false)),
      'bug_type_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BugType'), 'add_empty' => false)),
      'bug_priority_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BugPriority'), 'add_empty' => false)),
      'ref_no'          => new sfWidgetFormInputText(),
      'name'            => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'))),
      'staff_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'required' => false)),
      'bug_status_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BugStatus'))),
      'bug_type_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BugType'))),
      'bug_priority_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BugPriority'))),
      'ref_no'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'     => new sfValidatorString(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Bug', 'column' => array('ref_no')))
    );

    $this->widgetSchema->setNameFormat('bug[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bug';
  }

}
