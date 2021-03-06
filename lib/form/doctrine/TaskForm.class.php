<?php

/**
 * Task form.
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TaskForm extends BaseTaskForm
{
  public function configure()
  {
      $this->unsetTimeStampable();

      $refno = Doctrine_Core::getTable('Task')->createRefNo();

      $this->setDefault('ref_no', $refno);

      $this->setWidget(
                       'account_invoice_id', new sfWidgetFormDoctrineChoice(array(
'model'=>'AccountInvoice',
'table_method'=>'getUnpaid','add_empty'=>true), array())
                      );

      $this->setWidget('created_by', new sfWidgetFormInputHidden());

      $this->setDefault('created_by', $this->getCurrentUser()->getId()); 
  }
}
