<?php
class TimeQueryForm extends BaseForm
{

  public function configure()
  {
      $params = $this->getOption('params');

      $options = array('interval'=>"1");

      $this->setWidgets(array(
          'staff'      => new sfWidgetFormDoctrineChoice(array('model' => 'Staff', 'add_empty' => false)),
          'from_date'    => new sfWidgetFormTextDateInputJQueryDatePicker(),
          'from_time'    => new sfWidgetFormSelectTimeInputJQueryTimePicker($options),
          'until_date'    => new sfWidgetFormTextDateInputJQueryDatePicker(),
          'until_time'    => new sfWidgetFormSelectTimeInputJQueryTimePicker($options),
      ));

      if(count($params)) {
          $this->setDefault('staff', $params['staff']);
          $this->setDefault('from_date',  $params['from_date']);
          $this->setDefault('from_time',  $params['from_time']);
          $this->setDefault('until_date', $params['until_date']);
          $this->setDefault('until_time ', $params['until_time']);
      }
      else {
          $this->setDefault('staff',Staff::loggedInId());
          $this->setDefault('from_date',"2008-01-01");
          $this->setDefault('from_time',"12:00 AM");
          $this->setDefault('until_date',date('Y-m-d'));
          $this->setDefault('until_time',date('h:i A'));
      }
  }
}
