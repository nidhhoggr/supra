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
      'id'                 => new sfWidgetFormInputHidden(),
      'account_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => false)),
      'account_invoice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'), 'add_empty' => true)),
      'staff_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'add_empty' => true)),
      'task_status_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskStatus'), 'add_empty' => true)),
      'task_type_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'), 'add_empty' => true)),
      'task_priority_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskPriority'), 'add_empty' => true)),
      'task_work_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => true)),
      'ref_no'             => new sfWidgetFormInputText(),
      'name'               => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'))),
      'account_invoice_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'), 'required' => false)),
      'staff_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'required' => false)),
      'task_status_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskStatus'), 'required' => false)),
      'task_type_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskType'), 'required' => false)),
      'task_priority_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskPriority'), 'required' => false)),
      'task_work_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'required' => false)),
      'ref_no'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'        => new sfValidatorString(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
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

}
