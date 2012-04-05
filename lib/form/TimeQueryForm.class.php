<?php
class TimeQueryForm extends BaseForm
{

  public function configure()
  {
      $params = $this->getOption('params');

      $this->setWidgets(array(
          'staff'      => new sfWidgetFormDoctrineChoice(array('model' => 'Staff', 'add_empty' => false)),
          'from'    => $this->sfWidgetFormHumanTime(),
          'until'   => $this->sfWidgetFormHumanTime(),
      ));

      if(count($params)) {
          $this->setDefault('staff', $params['staff']);
          $this->setDefault('from',  $params['from']);
          $this->setDefault('until', $params['until']);
      }
  }
}
