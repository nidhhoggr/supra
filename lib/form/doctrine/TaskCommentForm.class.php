<?php

/**
 * TaskComment form.
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TaskCommentForm extends BaseTaskCommentForm
{
  public function configure()
  {
      $params = $this->getOption('params');

      $this->unsetTimeStampable();
      $this->setWidget('staff_id', new sfWidgetFormInputHidden());

      $this->setDefault('staff_id',Staff::loggedInId());
      $this->setDefault('task_id',$params['task_id']);
      
  }
}
