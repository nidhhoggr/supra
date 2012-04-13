<?php

/**
 * task_status actions.
 *
 * @package    supra
 * @subpackage task_status
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class task_statusActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->task_statuss = Doctrine_Core::getTable('TaskStatus')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task_status = Doctrine_Core::getTable('TaskStatus')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task_status);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TaskStatusForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskStatusForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task_status = Doctrine_Core::getTable('TaskStatus')->find(array($request->getParameter('id'))), sprintf('Object task_status does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskStatusForm($task_status);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task_status = Doctrine_Core::getTable('TaskStatus')->find(array($request->getParameter('id'))), sprintf('Object task_status does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskStatusForm($task_status);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task_status = Doctrine_Core::getTable('TaskStatus')->find(array($request->getParameter('id'))), sprintf('Object task_status does not exist (%s).', $request->getParameter('id')));
    $task_status->delete();

    $this->redirect('task_status/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task_status = $form->save();

      $this->redirect('task_status/edit?id='.$task_status->getId());
    }
  }
}
