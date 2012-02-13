<?php

/**
 * Task form base class.
 *
 * @method Task getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'account_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => false)),
      'staff_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'add_empty' => true)),
      'task_status_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskStatus'), 'add_empty' => false)),
      'task_type_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'), 'add_empty' => false)),
      'task_priority_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskPriority'), 'add_empty' => false)),
      'task_work_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => false)),
      'ref_no'               => new sfWidgetFormInputText(),
      'name'                 => new sfWidgetFormInputText(),
      'description'          => new sfWidgetFormTextarea(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'account_invoice_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'AccountInvoice')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'))),
      'staff_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'required' => false)),
      'task_status_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskStatus'))),
      'task_type_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'))),
      'task_priority_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskPriority'))),
      'task_work_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'))),
      'ref_no'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'          => new sfValidatorString(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'account_invoice_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'AccountInvoice', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Task', 'column' => array('ref_no')))
    );

    $this->widgetSchema->setNameFormat('task[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Task';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['account_invoice_list']))
    {
      $this->setDefault('account_invoice_list', $this->object->AccountInvoice->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAccountInvoiceList($con);

    parent::doSave($con);
  }

  public function saveAccountInvoiceList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['account_invoice_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->AccountInvoice->getPrimaryKeys();
    $values = $this->getValue('account_invoice_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('AccountInvoice', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('AccountInvoice', array_values($link));
    }
  }

}
