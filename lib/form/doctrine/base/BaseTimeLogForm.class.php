<?php

/**
 * TimeLog form base class.
 *
 * @method TimeLog getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTimeLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'time_log_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TimeLogType'), 'add_empty' => false)),
      'staff_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'), 'add_empty' => false)),
      'time'             => new sfWidgetFormDateTime(),
      'notes'            => new sfWidgetFormTextarea(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'time_log_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TimeLogType'))),
      'staff_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Staff'))),
      'time'             => new sfValidatorDateTime(),
      'notes'            => new sfValidatorString(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('time_log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TimeLog';
  }

}
