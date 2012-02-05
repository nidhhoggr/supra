<?php

/**
 * invoice actions.
 *
 * @package    supra
 * @subpackage invoice
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class invoiceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->account_invoices = Doctrine_Core::getTable('AccountInvoice')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->account_invoice = Doctrine_Core::getTable('AccountInvoice')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->account_invoice);
/*
    //get the total of the invoice
    foreach($this->account_invoice->getAccountInvoiceTask() as $inv_task):
      $task = $inv_task->getTask();
      $work = $task->getTaskWork();
	foreach($task->getTaskLog() as $log):
		$this->total += $log->getHoursLogged() * $work->getRate();
      endforeach;
    endforeach;
*/

    $this->total = $this->account_invoice->getTotal();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AccountInvoiceForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AccountInvoiceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($account_invoice = Doctrine_Core::getTable('AccountInvoice')->find(array($request->getParameter('id'))), sprintf('Object account_invoice does not exist (%s).', $request->getParameter('id')));
    $this->form = new AccountInvoiceForm($account_invoice);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($account_invoice = Doctrine_Core::getTable('AccountInvoice')->find(array($request->getParameter('id'))), sprintf('Object account_invoice does not exist (%s).', $request->getParameter('id')));
    $this->form = new AccountInvoiceForm($account_invoice);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($account_invoice = Doctrine_Core::getTable('AccountInvoice')->find(array($request->getParameter('id'))), sprintf('Object account_invoice does not exist (%s).', $request->getParameter('id')));
    $account_invoice->delete();

    $this->redirect('invoice/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $account_invoice = $form->save();

      $this->redirect('invoice/edit?id='.$account_invoice->getId());
    }
  }
}
