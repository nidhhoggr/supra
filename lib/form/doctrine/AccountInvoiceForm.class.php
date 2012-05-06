<?php

/**
 * AccountInvoice form.
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AccountInvoiceForm extends BaseAccountInvoiceForm
{
  public function configure()
  {
      $this->unsetTimeStampable();

      $refno = Doctrine_Core::getTable('AccountInvoice')->createRefNo();

      $this->setDefault('ref_no', $refno);

  }
}
