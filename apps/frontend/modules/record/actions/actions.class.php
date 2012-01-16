<?php

/**
 * record actions.
 *
 * @package    supra
 * @subpackage record
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class recordActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->account_records = Doctrine_Core::getTable('AccountRecord')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->account_record = Doctrine_Core::getTable('AccountRecord')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->account_record);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AccountRecordForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AccountRecordForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($account_record = Doctrine_Core::getTable('AccountRecord')->find(array($request->getParameter('id'))), sprintf('Object account_record does not exist (%s).', $request->getParameter('id')));
    $this->form = new AccountRecordForm($account_record);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($account_record = Doctrine_Core::getTable('AccountRecord')->find(array($request->getParameter('id'))), sprintf('Object account_record does not exist (%s).', $request->getParameter('id')));
    $this->form = new AccountRecordForm($account_record);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($account_record = Doctrine_Core::getTable('AccountRecord')->find(array($request->getParameter('id'))), sprintf('Object account_record does not exist (%s).', $request->getParameter('id')));
    $account_record->delete();

    $this->redirect('record/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $account_record = $form->save();

      $this->redirect('record/edit?id='.$account_record->getId());
    }
  }
}
