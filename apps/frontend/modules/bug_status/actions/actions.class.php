<?php

/**
 * bug_status actions.
 *
 * @package    supra
 * @subpackage bug_status
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bug_statusActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->bug_statuss = Doctrine_Core::getTable('BugStatus')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->bug_status = Doctrine_Core::getTable('BugStatus')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->bug_status);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BugStatusForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BugStatusForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($bug_status = Doctrine_Core::getTable('BugStatus')->find(array($request->getParameter('id'))), sprintf('Object bug_status does not exist (%s).', $request->getParameter('id')));
    $this->form = new BugStatusForm($bug_status);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($bug_status = Doctrine_Core::getTable('BugStatus')->find(array($request->getParameter('id'))), sprintf('Object bug_status does not exist (%s).', $request->getParameter('id')));
    $this->form = new BugStatusForm($bug_status);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($bug_status = Doctrine_Core::getTable('BugStatus')->find(array($request->getParameter('id'))), sprintf('Object bug_status does not exist (%s).', $request->getParameter('id')));
    $bug_status->delete();

    $this->redirect('bug_status/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $bug_status = $form->save();

      $this->redirect('bug_status/edit?id='.$bug_status->getId());
    }
  }
}
