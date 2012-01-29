<?php

/**
 * work actions.
 *
 * @package    supra
 * @subpackage work
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class workActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->task_works = Doctrine_Core::getTable('TaskWork')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task_work = Doctrine_Core::getTable('TaskWork')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task_work);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TaskWorkForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskWorkForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task_work = Doctrine_Core::getTable('TaskWork')->find(array($request->getParameter('id'))), sprintf('Object task_work does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskWorkForm($task_work);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task_work = Doctrine_Core::getTable('TaskWork')->find(array($request->getParameter('id'))), sprintf('Object task_work does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskWorkForm($task_work);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task_work = Doctrine_Core::getTable('TaskWork')->find(array($request->getParameter('id'))), sprintf('Object task_work does not exist (%s).', $request->getParameter('id')));
    $task_work->delete();

    $this->redirect('work/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task_work = $form->save();

      $this->redirect('work/edit?id='.$task_work->getId());
    }
  }
}
