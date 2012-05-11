<?php

/**
 * TimeLog form.
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TimeLogForm extends BaseTimeLogForm
{
  public function configure()
  {
      $this->unsetTimeStampable(); 
      $this->setDefault('staff_id',Staff::loggedInId());

      if(!$this->getCurrentUser()->isSuperAdmin()) {
          $staff_input = new sfWidgetFormInputHidden;
          $this->setWidget('staff_id', $staff_input);
      }

      $params = $this->getOption('params');

      $options = array(
                       'widget_name'=>'time',
                       'params'=>$params,
                       'default_date'=>date('Y-m-d'),
                       'default_time'=>date('h:i A')
                      );

      $this->setWidget(
                       'time_log_type_id', 
                        new sfWidgetFormDoctrineChoice(array('model'=>'TimeLog','table_method'=>'getValidTimeLogTypes'), array())
                      );

      $this->setWidget('time',new sfJQueryDateTimeWidget($options));
      $this->setValidator('time', new sfJQueryDateTimeValidator(array('widget_name'=>'time')));

  }
}
