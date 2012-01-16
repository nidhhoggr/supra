<?php

/**
 * account actions.
 *
 * @package    supra
 * @subpackage account
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class accountActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->accounts = Doctrine_Core::getTable('Account')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->account = Doctrine_Core::getTable('Account')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->account);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AccountForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AccountForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($account = Doctrine_Core::getTable('Account')->find(array($request->getParameter('id'))), sprintf('Object account does not exist (%s).', $request->getParameter('id')));
    $this->form = new AccountForm($account);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($account = Doctrine_Core::getTable('Account')->find(array($request->getParameter('id'))), sprintf('Object account does not exist (%s).', $request->getParameter('id')));
    $this->form = new AccountForm($account);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($account = Doctrine_Core::getTable('Account')->find(array($request->getParameter('id'))), sprintf('Object account does not exist (%s).', $request->getParameter('id')));
    $account->delete();

    $this->redirect('account/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $account = $form->save();

      $this->redirect('account/edit?id='.$account->getId());
    }
  }
}
