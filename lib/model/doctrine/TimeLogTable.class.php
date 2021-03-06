<?php

/**
 * TimeLogTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TimeLogTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object TimeLogTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TimeLog');
    }

    public function getCurrentUser() {
        return sfContext::getInstance()->getUser();
    }

    public function getLastTimeLogTypeByStaffId($staff_id) {

        return Doctrine_Query::Create()
               ->select('tl.time_log_type_id')
               ->from('TimeLog tl')
               ->where('tl.staff_id = ?', $staff_id)
               ->orderBy('tl.time DESC')
               ->limit(1)
               ->fetchOne()->time_log_type_id;
    }
   
    public function getValidTimeLogTypes() {
        $staff_id = Staff::loggedInId();
        $table = Doctrine_Core::getTable('TimeLogType');
        $tlt   = $this->getLastTimeLogTypeByStaffId($staff_id);
        $ci    = $table->getClockInById($tlt);
        return $table->getByClockIn($ci); 
    }
}
