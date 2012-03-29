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
 
      $this->setDefault('staff_id',Staff::loggedIn());

      $this->setDefault('time',time());
  }
}
