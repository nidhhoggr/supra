<?php

/**
 * AccountInvoiceDeduction form base class.
 *
 * @method AccountInvoiceDeduction getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAccountInvoiceDeductionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'account_invoice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'), 'add_empty' => false)),
      'deduction_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Deduction'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'account_invoice_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'))),
      'deduction_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Deduction'))),
    ));

    $this->widgetSchema->setNameFormat('account_invoice_deduction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccountInvoiceDeduction';
  }

}
