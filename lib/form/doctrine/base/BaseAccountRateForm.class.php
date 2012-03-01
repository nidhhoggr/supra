<?php

/**
 * AccountRate form base class.
 *
 * @method AccountRate getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAccountRateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'account_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => false)),
      'task_work_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => false)),
      'title'        => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'hour_qouta'   => new sfWidgetFormInputText(),
      'rate_before'  => new sfWidgetFormInputText(),
      'rate_after'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'))),
      'task_work_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'))),
      'title'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'  => new sfValidatorString(array('required' => false)),
      'hour_qouta'   => new sfValidatorNumber(array('required' => false)),
      'rate_before'  => new sfValidatorNumber(array('required' => false)),
      'rate_after'   => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('account_rate[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccountRate';
  }

}
