<?php

/**
 * Account
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Account extends BaseAccount{

  public function getViewableAccountInvoice() {

      return Doctrine_Query::create() 
             ->from('AccountInvoice ai')
             ->where('ai.account_id = ?', $this->id)
             ->andWhere('ai.is_viewable = 1')
             ->execute();
  }

  public function getIncompleteTasks($some = false) {
 
      return $this->getTable()->getTasks($this->id,$some,false); 

  }

  public function getCompleteTasks($some = false) {

      return $this->getTable()->getTasks($this->id,$some,true);

  }

  function __toString() {

    if($this->title)
        return $this->title;
    else
        return $this->domain_name;
    
  }

}
