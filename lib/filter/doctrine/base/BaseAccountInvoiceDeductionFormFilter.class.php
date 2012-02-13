<?php

/**
 * AccountInvoiceDeduction filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccountInvoiceDeductionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'account_invoice_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AccountInvoice'), 'add_empty' => true)),
      'deduction_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Deduction'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'account_invoice_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AccountInvoice'), 'column' => 'id')),
      'deduction_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Deduction'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('account_invoice_deduction_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccountInvoiceDeduction';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'account_invoice_id' => 'ForeignKey',
      'deduction_id'       => 'ForeignKey',
    );
  }
}
