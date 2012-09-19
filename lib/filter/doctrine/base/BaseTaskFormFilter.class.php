<?php

/**
 * Task filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'account_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => true)),
      'account_invoice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'), 'add_empty' => true)),
      'user_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'created_by'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'task_status_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskStatus'), 'add_empty' => true)),
      'task_type_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'), 'add_empty' => true)),
      'task_priority_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskPriority'), 'add_empty' => true)),
      'task_work_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => true)),
      'ref_no'             => new sfWidgetFormFilterInput(),
      'name'               => new sfWidgetFormFilterInput(),
      'description'        => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'account_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Account'), 'column' => 'id')),
      'account_invoice_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AccountInvoice'), 'column' => 'id')),
      'user_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'created_by'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'task_status_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskStatus'), 'column' => 'id')),
      'task_type_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskType'), 'column' => 'id')),
      'task_priority_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskPriority'), 'column' => 'id')),
      'task_work_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskWork'), 'column' => 'id')),
      'ref_no'             => new sfValidatorPass(array('required' => false)),
      'name'               => new sfValidatorPass(array('required' => false)),
      'description'        => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('task_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Task';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'account_id'         => 'ForeignKey',
      'account_invoice_id' => 'ForeignKey',
      'user_id'            => 'ForeignKey',
      'created_by'         => 'ForeignKey',
      'task_status_id'     => 'ForeignKey',
      'task_type_id'       => 'ForeignKey',
      'task_priority_id'   => 'ForeignKey',
      'task_work_id'       => 'ForeignKey',
      'ref_no'             => 'Text',
      'name'               => 'Text',
      'description'        => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
