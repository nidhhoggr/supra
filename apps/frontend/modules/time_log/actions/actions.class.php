<?php

/**
 * time_log actions.
 *
 * @package    supra
 * @subpackage time_log
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class time_logActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    
    $staffs = Staff::fetchAllIds(); 

    $tl = new TimeLog();

    foreach($staffs as $staff) {

        $time_log = $tl->getLastByStaffId($staff['id']);

        if($time_log)
            $time_logs[] = $time_log;
    } 

    $this->time_logs = $time_logs;  
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->time_log = Doctrine_Core::getTable('TimeLog')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->time_log);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TimeLogForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TimeLogForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($time_log = Doctrine_Core::getTable('TimeLog')->find(array($request->getParameter('id'))), sprintf('Object time_log does not exist (%s).', $request->getParameter('id')));
 
    $this->isEntitled($time_log);

    $this->form = new TimeLogForm($time_log);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($time_log = Doctrine_Core::getTable('TimeLog')->find(array($request->getParameter('id'))), sprintf('Object time_log does not exist (%s).', $request->getParameter('id')));

    $this->isEntitled($time_log);

    $this->form = new TimeLogForm($time_log);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($time_log = Doctrine_Core::getTable('TimeLog')->find(array($request->getParameter('id'))), sprintf('Object time_log does not exist (%s).', $request->getParameter('id')));

    $this->isEntitled($time_log);

    $time_log->delete();

    $this->redirect('time_log/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $time_log = $form->save();

      $this->redirect('time_log/edit?id='.$time_log->getId());
    }
  }

  private function isEntitled($object) {
    if($object->getStaff()->getUser()->getId() != $this->getUser()->getId())
        $this->redirect($this->getRequest()->getReferer());
  }
}
