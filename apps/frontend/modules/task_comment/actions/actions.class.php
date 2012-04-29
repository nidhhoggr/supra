<?php

/**
 * task_comment actions.
 *
 * @package    supra
 * @subpackage task_comment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class task_commentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->task_comments = Doctrine_Core::getTable('TaskComment')->getByStaffId();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task_comment = Doctrine_Core::getTable('TaskComment')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task_comment);
  }

  public function executeNew(sfWebRequest $request)
  {
    $task_id = $request->getParameter('task_id');

    $this->form = new TaskCommentForm(array(),array('params'=>array('task_id'=>$task_id)));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskCommentForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task_comment = Doctrine_Core::getTable('TaskComment')->find(array($request->getParameter('id'))), sprintf('Object task_comment does not exist (%s).', $request->getParameter('id')));
    $this->isEntitled($task_comment);
    $this->form = new TaskCommentForm($task_comment);
 }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task_comment = Doctrine_Core::getTable('TaskComment')->find(array($request->getParameter('id'))), sprintf('Object task_comment does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskCommentForm($task_comment);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task_comment = Doctrine_Core::getTable('TaskComment')->find(array($request->getParameter('id'))), sprintf('Object task_comment does not exist (%s).', $request->getParameter('id')));
    $this->isEntitled($task_comment);
    $task_comment->delete();
    $this->redirect('task_comment/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task_comment = $form->save();

      $this->redirect('task_comment/edit?id='.$task_comment->getId());
    }
  }

  private function isEntitled($task_comment) {
    if($task_comment->getStaff()->getUser()->getId() != $this->getUser()->getId())
        $this->redirect($this->getRequest()->getReferer());
  }
}
