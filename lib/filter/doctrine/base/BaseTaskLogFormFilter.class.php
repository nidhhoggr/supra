<?php

/**
 * TaskLog filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskLogFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'task_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => true)),
      'task_work_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => true)),
      'staff_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'add_empty' => true)),
      'title'         => new sfWidgetFormFilterInput(),
      'description'   => new sfWidgetFormFilterInput(),
      'gen_desc_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GenDesc'), 'add_empty' => true)),
      'staff_comment' => new sfWidgetFormFilterInput(),
      'clock_in'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'clock_out'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'hours_logged'  => new sfWidgetFormFilterInput(),
      'mileage'       => new sfWidgetFormFilterInput(),
      'percentage'    => new sfWidgetFormFilterInput(),
      'is_billable'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_viewable'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'task_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Task'), 'column' => 'id')),
      'task_work_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskWork'), 'column' => 'id')),
      'staff_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Staff'), 'column' => 'id')),
      'title'         => new sfValidatorPass(array('required' => false)),
      'description'   => new sfValidatorPass(array('required' => false)),
      'gen_desc_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GenDesc'), 'column' => 'id')),
      'staff_comment' => new sfValidatorPass(array('required' => false)),
      'clock_in'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'clock_out'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'hours_logged'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mileage'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'percentage'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_billable'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_viewable'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('task_log_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskLog';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'task_id'       => 'ForeignKey',
      'task_work_id'  => 'ForeignKey',
      'staff_id'      => 'ForeignKey',
      'title'         => 'Text',
      'description'   => 'Text',
      'gen_desc_id'   => 'ForeignKey',
      'staff_comment' => 'Text',
      'clock_in'      => 'Date',
      'clock_out'     => 'Date',
      'hours_logged'  => 'Number',
      'mileage'       => 'Number',
      'percentage'    => 'Number',
      'is_billable'   => 'Boolean',
      'is_viewable'   => 'Boolean',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
