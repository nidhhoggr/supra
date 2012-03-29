<?php

/**
 * Base project form.
 * 
 * @package    supra
 * @subpackage form
 * @author     Joseph Persie
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class BaseForm extends sfFormSymfony
{
    function getCurrentUser() {
        return sfContext::getInstance()->getUser();
    }

    public function sfWidgetFormHumanTime() {
      $hours = range(0,23); 
      $months = range(1,12); 
      $years = range(2009,2019);  
      $timedesc = array('12am','1am','2am','3am','4am','5am','6am','7am','8am','9am','10am','11am','12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm','9pm','10pm','11pm',); 
      $monthdesc = array('Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'); 

      return  new sfWidgetFormDateTime(
         array('time' => array('hours' => array_combine($hours, $timedesc),
              'can_be_empty' => false),
              'date' => array('months' => array_combine($months, $monthdesc),'years' => array_combine($years, $years),
                    'can_be_empty' => false)
              )
      );    
    }

    protected function unsetTimeStampable() {
        unset(
            $this['created_at'],
            $this['updated_at']
        );
    } 

    protected function embedUser() {
        unset($this['user_id']);
        $formUser = new SfGuardUserAdminForm($this->getObject()->getUser());
        $this->embedForm('User',$formUser);
    }
}
