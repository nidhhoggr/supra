<?php

/**
 * task actions.
 *
 * @package    supra
 * @subpackage task
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class taskActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tasks = Doctrine_Core::getTable('Task')->getByStaffId();
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
    $this->form = new TaskForm($task);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task = Doctrine_Core::getTable('Task')->find(array($request->getParameter('id'))), sprintf('Object task does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskForm($task);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task = Doctrine_Core::getTable('Task')->find(array($request->getParameter('id'))), sprintf('Object task does not exist (%s).', $request->getParameter('id')));
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
}
