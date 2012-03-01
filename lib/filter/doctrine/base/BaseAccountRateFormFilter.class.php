<?php

/**
 * AccountRate filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccountRateFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'account_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => true)),
      'task_work_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TaskWork'), 'add_empty' => true)),
      'title'        => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(),
      'hour_qouta'   => new sfWidgetFormFilterInput(),
      'rate_before'  => new sfWidgetFormFilterInput(),
      'rate_after'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'account_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Account'), 'column' => 'id')),
      'task_work_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TaskWork'), 'column' => 'id')),
      'title'        => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
      'hour_qouta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rate_before'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rate_after'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('account_rate_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccountRate';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'account_id'   => 'ForeignKey',
      'task_work_id' => 'ForeignKey',
      'title'        => 'Text',
      'description'  => 'Text',
      'hour_qouta'   => 'Number',
      'rate_before'  => 'Number',
      'rate_after'   => 'Number',
    );
  }
}
