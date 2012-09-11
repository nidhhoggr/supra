<?php

/**
 * task actions.
 *
 * @package    supra
 * @subpackage task
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class TaskActionsUtil extends sfActions
{
  abstract function executeIndex(sfWebRequest $request);

  protected function _getPager($args) {
    $fields = array(
                    'name'             => array('Name','task','getName'),
                    'account_id'       => array('Account','account','getAccount'),
                    'user_id'          => array('Assigned To','sfGuardUser','getUser'),
                    'created_by'       => array('Created By','sfGuardUser','getCreator'),
                    'task_status_id'   => array('Task Status','task_status','getTaskStatus'),
                    'task_type_id'     => array('Task Type','task_type','getTaskType'),
                    'task_priority_id' => array('Task Priority','task_priority','getTaskPriority'),
                    'ref_no'           => array('Ref No','task','getRefNo'),
                   );

    $pagerOptions = array(
                          'query'=>$args['query'],
                          'fields'=>$fields,
                          'request'=>$args['request']
                         );

    $pager = $args['pager'];

    return $pager->getPager($pagerOptions);

  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task = Doctrine_Core::getTable('Task')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TaskForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task = Doctrine_Core::getTable('Task')->find(array($request->getParameter('id'))), sprintf('Object task does not exist (%s).', $request->getParameter('id')));
    $this->task = $task;
    $this->isEntitled($task);
    $this->form = new TaskForm($task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task = Doctrine_Core::getTable('Task')->find(array($request->getParameter('id'))), sprintf('Object task does not exist (%s).', $request->getParameter('id')));
    $this->isEntitled($task);
    $this->form = new TaskForm($task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task = Doctrine_Core::getTable('Task')->find(array($request->getParameter('id'))), sprintf('Object task does not exist (%s).', $request->getParameter('id')));
    $this->isEntitled($task);
    $task->delete();

    $this->redirect('task/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task = $form->save();

      $this->redirect('task/edit?id='.$task->getId());
    }
  }

  private function isEntitled($task) {
      if(!$task->isEntitled())
          $this->redirect($this->getRequest()->getReferer());
  }

}
