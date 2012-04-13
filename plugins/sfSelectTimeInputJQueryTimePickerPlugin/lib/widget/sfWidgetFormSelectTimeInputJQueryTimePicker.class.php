<?php
class sfWidgetFormSelectTimeInputJQueryTimePicker extends sfWidgetForm {
	protected function configure($options = array(), $attributes = array()) {
                $attributes['size']         = "5";
                $attributes['maxlength']    = "5";

		$this->addOption('time_widget', new sfWidgetFormInput(array(),$attributes));
                $this->addOption('start_stop', false);
                $this->addOption('interval', false);

		parent::configure($options, $attributes);
	}

	public function render($name, $value = null, $attributes = array(), $errors = array()) {
		$timeWidget = $this->getOption('time_widget');
                $start_stop = $this->getOption('start_stop');
                $interval   = $this->getOption('interval');

		if ($timeWidget instanceof sfWidgetFormInput) {
		        if (!isset($interval)) $interval = 30;
  
                        $id = $this->generateId($name);

                        if($start_stop) {
				if (!isset($start_stop['start'])) $start_stop['start'] = "00.00";
                                $last_interval = 60 - $interval;
				if (!isset($start_stop['stop'])) $start_stop['stop'] = "23.$last_interval" ;

                                $code = $timeWidget->render($name, $value, $attributes, $errors);
                                $code .= sprintf(<<<EOF
<script type="text/javascript">
$("#%s").timePicker({
  startTime: "%s", // Using string. Can take string or Date object.
  endTime:   "%s", // Using Date object here.
  show24Hours: false,
  separator: '.',
  step: %s});
</script>
EOF
                                ,
                                $id,
                                $start_stop['start'],
                                $start_stop['stop'],
                                $interval
                                );

                        } 
                        else {
                                $code = $timeWidget->render($name, $value, $attributes, $errors);
                                $code .= sprintf(<<<EOF
<script type="text/javascript">
$("#%s").timePicker({step: %d,show24Hours: false});
</script>
EOF
                                ,
                                $id,
                                $interval
                                );

                        }
		}

		return $code;
	}
}
