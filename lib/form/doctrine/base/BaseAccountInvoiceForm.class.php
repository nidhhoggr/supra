<?php

/**
 * AccountInvoice form base class.
 *
 * @method AccountInvoice getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAccountInvoiceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'account_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'add_empty' => true)),
      'ref_no'      => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'paid_off'    => new sfWidgetFormInputCheckbox(),
      'is_viewable' => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'tasks_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Task')),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Account'), 'required' => false)),
      'ref_no'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'paid_off'    => new sfValidatorBoolean(array('required' => false)),
      'is_viewable' => new sfValidatorBoolean(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'tasks_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Task', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'AccountInvoice', 'column' => array('ref_no')))
    );

    $this->widgetSchema->setNameFormat('account_invoice[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccountInvoice';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['tasks_list']))
    {
      $this->setDefault('tasks_list', $this->object->Tasks->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveTasksList($con);

    parent::doSave($con);
  }

  public function saveTasksList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['tasks_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Tasks->getPrimaryKeys();
    $values = $this->getValue('tasks_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Tasks', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Tasks', array_values($link));
    }
  }

}
