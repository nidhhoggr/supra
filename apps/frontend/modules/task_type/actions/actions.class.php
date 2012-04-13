<?php

/**
 * task_type actions.
 *
 * @package    supra
 * @subpackage task_type
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class task_typeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->task_types = Doctrine_Core::getTable('TaskType')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->task_type = Doctrine_Core::getTable('TaskType')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->task_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TaskTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TaskTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($task_type = Doctrine_Core::getTable('TaskType')->find(array($request->getParameter('id'))), sprintf('Object task_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskTypeForm($task_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($task_type = Doctrine_Core::getTable('TaskType')->find(array($request->getParameter('id'))), sprintf('Object task_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new TaskTypeForm($task_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($task_type = Doctrine_Core::getTable('TaskType')->find(array($request->getParameter('id'))), sprintf('Object task_type does not exist (%s).', $request->getParameter('id')));
    $task_type->delete();

    $this->redirect('task_type/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $task_type = $form->save();

      $this->redirect('task_type/edit?id='.$task_type->getId());
    }
  }
}
