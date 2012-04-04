<?php

class myUser extends sfGuardSecurityUser{

    function isStaff() {

        return Doctrine_Query::create()
           ->from('Staff s')
           ->where('s.user_id = ?', $this->getId())
           ->execute();
    }

}
