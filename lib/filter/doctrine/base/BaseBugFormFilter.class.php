<?php

/**
 * Bug filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBugFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'account_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => true)),
      'staff_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'add_empty' => true)),
      'bug_status_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BugStatus'), 'add_empty' => true)),
      'bug_type_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BugType'), 'add_empty' => true)),
      'bug_priority_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BugPriority'), 'add_empty' => true)),
      'ref_no'          => new sfWidgetFormFilterInput(),
      'name'            => new sfWidgetFormFilterInput(),
      'description'     => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'account_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Account'), 'column' => 'id')),
      'staff_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Staff'), 'column' => 'id')),
      'bug_status_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('BugStatus'), 'column' => 'id')),
      'bug_type_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('BugType'), 'column' => 'id')),
      'bug_priority_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('BugPriority'), 'column' => 'id')),
      'ref_no'          => new sfValidatorPass(array('required' => false)),
      'name'            => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('bug_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bug';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'account_id'      => 'ForeignKey',
      'staff_id'        => 'ForeignKey',
      'bug_status_id'   => 'ForeignKey',
      'bug_type_id'     => 'ForeignKey',
      'bug_priority_id' => 'ForeignKey',
      'ref_no'          => 'Text',
      'name'            => 'Text',
      'description'     => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
