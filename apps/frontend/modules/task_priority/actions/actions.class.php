<?php

/**
 * task_priority actions.
 *
 * @package    supra
 * @subpackage task_priority
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class task_priorityActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->task_prioritys = Doctrine_Core::getTable('TaskPriority')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task_priority = Doctrine_Core::getTable('TaskPriority')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task_priority);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TaskPriorityForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskPriorityForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task_priority = Doctrine_Core::getTable('TaskPriority')->find(array($request->getParameter('id'))), sprintf('Object task_priority does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskPriorityForm($task_priority);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task_priority = Doctrine_Core::getTable('TaskPriority')->find(array($request->getParameter('id'))), sprintf('Object task_priority does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskPriorityForm($task_priority);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task_priority = Doctrine_Core::getTable('TaskPriority')->find(array($request->getParameter('id'))), sprintf('Object task_priority does not exist (%s).', $request->getParameter('id')));
    $task_priority->delete();

    $this->redirect('task_priority/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task_priority = $form->save();

      $this->redirect('task_priority/edit?id='.$task_priority->getId());
    }
  }
}
