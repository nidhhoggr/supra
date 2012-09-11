<?php

class myUser extends sfGuardSecurityUser{

    public function getUserType() {

        if(!$this->isAuthenticated()) return false;

        $e = Doctrine_Query::create()
             ->from('Staff e')
             ->where('e.user_id = ?', $this->getId())
             ->fetchOne();

        if(!$e) {
            $c = Doctrine_Query::create()
                 ->from('Client c')
                 ->where('c.user_id = ?', $this->getId())
                 ->fetchOne();

            if($c) return 'client';
        }
        else {
            return 'staff';
        }

        return false;
    }

    public function isStaff() {

        if($this->getUserType() == 'staff') {
            return Doctrine_Core::getTable('Staff')->getByUserId($this->getId());
            //return $this->getStaff(); 
        }
        return false;
    }

    public function isClient() {
        if($this->getUserType() == 'client') {
            return Doctrine_Core::getTable('Client')->getByUserId($this->getId());

        }
        return false;
    }

    public static function getLoggedIn() {
        return sfContext::getInstance()->getUser();
    }

}
