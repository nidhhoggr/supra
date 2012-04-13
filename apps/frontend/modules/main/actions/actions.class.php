<?php

/**
 * main actions.
 *
 * @package    supra
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
        
        if($this->getUser()->isStaff()) {
            $this->staff = Staff::loggedIn();
        }
        else {
            $this->client = Client::loggedIn(); 
        }

  }
}
