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
            return true;
        }
        return false;
    }

    public function isClient() {
        if($this->getUserType() == 'client') {
            return true;
        }
        return false;
    }

}
