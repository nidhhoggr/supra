<?php
class TimeQueryForm extends BaseForm
{

  public function configure()
  {
      $params = $this->getOption('params');

      var_dump($params);

      $fromOptions = array(
                           'widget_name'=>'from',
                           'params'=>$params,
                           'default_date'=>'2008-01-01',
                           'default_time'=>'12:00 AM'
                          );

      $untilOptions = array(
                            'widget_name'=>'until',
                            'params'=>$params,
                            'default_date'=>date('Y-m-d'),
                            'default_time'=>date('h:i A')
                           );

      $this->setWidgets(array(
          'staff'      => new sfWidgetFormDoctrineChoice(array('model' => 'Staff', 'add_empty' => false)),
          'from'     => new sfJQueryDateTimeWidget($fromOptions),
          'until'    => new sfJQueryDateTimeWidget($untilOptions),
      ));

  }
}
