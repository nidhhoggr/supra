<?php

/**
 * task_log actions.
 *
 * @package    supra
 * @subpackage task_log
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class task_logActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->task_logs = Doctrine_Core::getTable('TaskLog')->getByStaffId(); 
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task_log = Doctrine_Core::getTable('TaskLog')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task_log);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->task_id = $request->getParameter('task_id');
    $this->form = new TaskLogForm(array(),array('params'=>array('task_id'=>$this->task_id)));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskLogForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task_log = Doctrine_Core::getTable('TaskLog')->find(array($request->getParameter('id'))), sprintf('Object task_log does not exist (%s).', $request->getParameter('id')));
    $this->task_id = $request->getParameter('task_id');
    $this->form = new TaskLogForm($task_log);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task_log = Doctrine_Core::getTable('TaskLog')->find(array($request->getParameter('id'))), sprintf('Object task_log does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskLogForm($task_log);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task_log = Doctrine_Core::getTable('TaskLog')->find(array($request->getParameter('id'))), sprintf('Object task_log does not exist (%s).', $request->getParameter('id')));
    $task_log->delete();

    $this->redirect('task_log/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task_log = $form->save();

      $this->redirect('task_log/edit?id='.$task_log->getId());
    }
  }
}
