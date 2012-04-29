<?php

/**
 * TaskLog form base class.
 *
 * @method TaskLog getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'task_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Task'), 'add_empty' => false)),
      'task_work_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => false)),
      'staff_id'      => new sfWidgetFormDoctrineChoice(array('label'=>'Employee','model' => $this->getRelatedModelName('Staff'), 'add_empty' => false)),
      'title'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'gen_desc_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GenDesc'), 'add_empty' => true)),
      'staff_comment' => new sfWidgetFormTextarea(),
      'clock_in'      => new sfWidgetFormDateTime(),
      'clock_out'     => new sfWidgetFormDateTime(),
      'hours_logged'  => new sfWidgetFormInputText(),
      'mileage'       => new sfWidgetFormInputText(),
      'percentage'    => new sfWidgetFormInputText(),
      'is_billable'   => new sfWidgetFormInputCheckbox(),
      'is_viewable'   => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'task_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Task'))),
      'task_work_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'))),
      'staff_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'))),
      'title'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'   => new sfValidatorString(array('required' => false)),
      'gen_desc_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GenDesc'), 'required' => false)),
      'staff_comment' => new sfValidatorString(array('required' => false)),
      'clock_in'      => new sfValidatorDateTime(array('required' => false)),
      'clock_out'     => new sfValidatorDateTime(array('required' => false)),
      'hours_logged'  => new sfValidatorNumber(array('required' => false)),
      'mileage'       => new sfValidatorNumber(array('required' => false)),
      'percentage'    => new sfValidatorInteger(array('required' => false)),
      'is_billable'   => new sfValidatorBoolean(array('required' => false)),
      'is_viewable'   => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('task_log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TaskLog';
  }

}
