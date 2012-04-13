<?php

/**
 * TaskLog form.
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TaskLogForm extends BaseTaskLogForm
{
  public function configure()
  {
      $params = $this->getOption('params');

      $this->unsetTimeStampable();
     
      $this->setDefault('staff_id',Staff::loggedInId());

      $this->setDefault('task_id', $params['task_id']);

      if(!$this->getCurrentUser()->isSuperAdmin()) {
          unset(
              $this['is_billable'],
              $this['is_viewable'],
              $this['percentage']
          );
      }
  }

}
