<?php

/**
 * AccountInvoice filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccountInvoiceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'account_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => true)),
      'ref_no'      => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'paid_off'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_viewable' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tasks_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Task')),
    ));

    $this->setValidators(array(
      'account_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Account'), 'column' => 'id')),
      'ref_no'      => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'paid_off'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_viewable' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tasks_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Task', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('account_invoice_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addTasksListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.AccountInvoiceTask AccountInvoiceTask')
      ->andWhereIn('AccountInvoiceTask.task_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'AccountInvoice';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'account_id'  => 'ForeignKey',
      'ref_no'      => 'Text',
      'description' => 'Text',
      'paid_off'    => 'Boolean',
      'is_viewable' => 'Boolean',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'tasks_list'  => 'ManyKey',
    );
  }
}
