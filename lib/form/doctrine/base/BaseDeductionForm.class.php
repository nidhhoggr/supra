<?php

/**
 * Deduction form base class.
 *
 * @method Deduction getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDeductionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'account_invoice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'), 'add_empty' => false)),
      'title'              => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'deduction'          => new sfWidgetFormInputText(),
      'approved'           => new sfWidgetFormInputCheckbox(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_invoice_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'))),
      'title'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'        => new sfValidatorString(array('required' => false)),
      'deduction'          => new sfValidatorNumber(array('required' => false)),
      'approved'           => new sfValidatorBoolean(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('deduction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Deduction';
  }

}
