<?php

/**
 * Staff
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Staff extends BaseStaff {

    public static function fetchAllIds() {
        return Doctrine_Query::create()
               ->select('s.id')
               ->from('Staff s')
               ->fetchArray();
    }


    public function getTotalTime() {
        $tl = new TimeLog();
        return $tl->getTotalByStaffId($this->id);
    }

    public function getFullName() {
        return $this->getUser()->first_name . ' ' . $this->getUser()->last_name;
    }

    private function getTaskLogs() {
      return  Doctrine_Core::getTable('TaskLog')
        ->createQuery('a')
        ->where('a.staff_id = ?', $this->id);
    }

    public function getTaskLogsByStaffId() {

      return  $this->getTaskLogs()->execute();
    }

    public function getSomeCompleteTasks() {
      return $this->getTasksByUserId()
        ->andWhere('t.task_status_id = ?', 3)
        ->orderBy('t.created_at DESC')
        ->limit(5)
        ->execute();
    }

    public function getIncompleteTasks($some = false) {
      $q =  $this->getTasksByUserId()
        ->andWhere('t.task_status_id <> ?', 3)
        ->orderBy('t.created_at DESC');

      if($some)
          return $q->limit(5)->execute();
      else
          return $q->execute();
    }

    public function countTaskLogsByStaffId() {
      return  $this->getTaskLogs()->count();
    }

    public function getTasksByUserId() {
      return Doctrine_Query::create()
        ->from('Task t')
        ->where('t.user_id = ?', $this->getUser()->getId());
    }

    public function countCompleteTasksByStaffId() {
      return $this->getTasksByUserId()
        ->andWhere('t.task_status_id = ?', 3)->count();
    }

    public function countIncompleteTasksByStaffId() {
       return $this->getTasksByUserId()
         ->andWhere('t.task_status_id <> ?', 3)->count();
    }

    public static function getLoggedIn() {

      $q = Doctrine_Query::create()
      ->from('Staff s')
      ->where('s.user_id = ?',myUser::getLoggedIn()->getId());

      return $q;
    }

    public static function loggedIn() {
      return Staff::getLoggedIn()->fetchOne();
    } 

    public static function loggedInId() {
      return Staff::getLoggedIn()->fetchOne()->id;
    }


    function __toString() {
      return $this->getFullName();
    }
}
