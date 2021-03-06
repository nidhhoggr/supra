<?php

/**
 * TimeLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TimeLog extends BaseTimeLog
{
    public function getLastByStaffId($staff_id) {
        return $this->queryByStaffId($staff_id)->limit(1)->fetchOne();
    }

    public function queryByStaffId($staff_id) {
        return Doctrine_Query::create()
            ->from('TimeLog t')
            ->where('t.staff_id = ?', $staff_id)
            ->orderBy('t.time DESC');
    }

    private function queryTimeByStaffIdBetween($staff_id,$since,$until) {
        return  $this->queryByStaffId($staff_id)
                 ->andWhere('t.time > ?', $since)
                 ->andWhere('t.time < ?', $until);
    }

    public function getByStaffIdBetween($staff_id,$since,$until) {

        $times = $this->queryTimeByStaffIdBetween($staff_id,$since,$until);

        $list  = $times->execute();

        $total = $this->getTotal($times);

        return array('list'=>$list,'total'=>$this->secToTime($total));
    }

    private function getTotal($timeQuery) {
        $times = $timeQuery->fetchArray();

        $total = 0;

        if($times && count($times) > 1) {
            $times = $this->popUnclosedSession($times);
            
            $times = array_chunk($times,2);

            foreach($times as $time) {

                @$time1 = $time[1]['time'];
                @$time2 = $time[0]['time'];

                if($time1 && $time2) {

                    $d_start    = new DateTime($time1);
                    $d_end      = new DateTime($time2);
    
                    $diff = $d_start->diff($d_end);
                   
                    $day    = $diff->d;
                    $hour   = $diff->h + ( $day * 24 );
                    $minute = $diff->i + ( $hour * 60 );
                    $second = $diff->s + ( $minute * 60 );

                    $total += $second;
                }
            }
        }

        return $total;
    }

    private function popUnclosedSession($times) {
        
        //pop a clockin from the last entry
        if(TimeLogType::getClockInById($times[0]['time_log_type_id'])) {
            $times = array_reverse($times);
            array_pop($times);
            $times = array_reverse($times);
        }

        $times = array_reverse($times);    
        
        //pop a clockout from the first entry
        if(!TimeLogType::getClockInById($times[0]['time_log_type_id'])) {
            $times = array_reverse($times);
            array_pop($times);
            $times = array_reverse($times);
        }

        $times = array_reverse($times);    

        return $times;
    }

    public function secToTime($seconds) {

        // extract hours
        $hours = floor($seconds / (60 * 60));
 
        // extract minutes
        $divisor_for_minutes = $seconds % (60 * 60);
        $minutes = floor($divisor_for_minutes / 60);
   
        // extract the remaining seconds
        $divisor_for_seconds = $divisor_for_minutes % 60;
        $seconds = ceil($divisor_for_seconds);
 
        // return the final array
        $obj = array(
            "h" => (int) $hours,
            "m" => (int) $minutes,
            "s" => (int) $seconds,
        );

        return $obj;
    }
}
