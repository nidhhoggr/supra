<?php

/**
 * staff actions.
 *
 * @package    supra
 * @subpackage staff
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staffActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
            $dpu = new sfDoctrinePagerUtil('Staff', 10);
            $sort = $dpu->getSort($request);

            $staff = Doctrine_Query::create()
                             ->from('Staff s, s.User u')
                             ->orderBy('s.'.$sort);

            $fields = array(
                            'id' => array('Employee','staff'),
                            'title' => array('Title','staff','getTitle')
                           );

            $pagerOptions = array(
                                  'query'=>$staff,
                                  'request'=>$request,
                                  'fields'=>$fields
                                 );

            $this->pager = $dpu->getPager($pagerOptions);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->staff = Doctrine_Core::getTable('Staff')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->staff);

    $id = $request->getParameter('id');


    $this->logs = $this->staff->getTaskLogsByStaffId();
    //get the total hours
    foreach($this->logs as $log){
        $this->hours += $log->getHours();
    }

    $this->total_task_logs = $this->staff->countTaskLogsByStaffId();
    $this->tasks_complete = $this->staff->countCompleteTasksByStaffId();
    $this->tasks_incomplete = $this->staff->countIncompleteTasksByStaffId();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new StaffForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new StaffForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($staff = Doctrine_Core::getTable('Staff')->find(array($request->getParameter('id'))), sprintf('Object staff does not exist (%s).', $request->getParameter('id')));
    $this->form = new StaffForm($staff);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($staff = Doctrine_Core::getTable('Staff')->find(array($request->getParameter('id'))), sprintf('Object staff does not exist (%s).', $request->getParameter('id')));
    $this->form = new StaffForm($staff);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($staff = Doctrine_Core::getTable('Staff')->find(array($request->getParameter('id'))), sprintf('Object staff does not exist (%s).', $request->getParameter('id')));
    $staff->delete();

    $this->redirect('staff/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $staff = $form->save();

      $this->redirect('staff/edit?id='.$staff->getId());
    }
  }
}
