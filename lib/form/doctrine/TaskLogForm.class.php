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
              $this['is_viewable'],
              $this['percentage']
          );
      }

      $this->getOption('params');

      $inOptions = array(
                 'widget_name'=>'clock_in',
                 'params'=>$params,
                 'default_date'=>date('Y-m-d'),
                 'default_time'=>date('h:i A')
                );

      $outOptions = array(
                 'widget_name'=>'clock_out',
                 'params'=>$params,
                 'default_date'=>date('Y-m-d'),
                 'default_time'=>date('h:i A')
                );

      $this->setWidget('clock_in', new sfJQueryDateTimeWidget($inOptions));
      $this->setWidget('clock_out', new sfJQueryDateTimeWidget($outOptions));

      $this->setValidator('clock_in',new sfJQueryDateTimeValidator(array('widget_name'=>'clock_in')));
      $this->setValidator('clock_out', new sfJqueryDateTimeValidator(array('widget_name'=>'clock_out')));


  }

}
