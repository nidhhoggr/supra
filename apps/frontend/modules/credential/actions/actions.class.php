<?php

/**
 * credential actions.
 *
 * @package    supra
 * @subpackage credential
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class credentialActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->credentials = Doctrine_Core::getTable('Credential')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->credential = Doctrine_Core::getTable('Credential')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->credential);
  }

  public function executeNew(sfWebRequest $request)
  {
    $account_id = $request->getParameter('account_id');

    $this->form = new CredentialForm(array(),array('params'=>array('account_id'=>$account_id)));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CredentialForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($credential = Doctrine_Core::getTable('Credential')->find(array($request->getParameter('id'))), sprintf('Object credential does not exist (%s).', $request->getParameter('id')));
    $this->form = new CredentialForm($credential);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($credential = Doctrine_Core::getTable('Credential')->find(array($request->getParameter('id'))), sprintf('Object credential does not exist (%s).', $request->getParameter('id')));
    $this->form = new CredentialForm($credential);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($credential = Doctrine_Core::getTable('Credential')->find(array($request->getParameter('id'))), sprintf('Object credential does not exist (%s).', $request->getParameter('id')));
    $credential->delete();

    $this->redirect('credential/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $credential = $form->save();

      $this->redirect('credential/edit?id='.$credential->getId());
    }
  }
}
