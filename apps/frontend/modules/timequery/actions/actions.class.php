<?php

/**
 * timequery actions.
 *
 * @package    supra
 * @subpackage timequery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class timequeryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      
      $total = null;
      $params = array();

      if($request->isMethod(sfRequest::POST)) {
          $tl = new TimeLog();

          $params = array(
              'staff'   => $request->getParameter('staff'),
              'from_date'    => $request->getParameter('from_date'),
              'from_time'    => $request->getParameter('from_time'),
              'until_date'    => $request->getParameter('until_date'),
              'until_time'   => $request->getParameter('until_time'),
          );

          $from_date = $params['from_date'].' '.$params['from_time'];
          $until_date = $params['until_date'].' '.$params['until_time'];

          $from  = $this->convertParamToDatetime($from_date);

          $until = $this->convertParamToDatetime($until_date);

          $result = $tl->getByStaffIdBetween($params['staff'],$from,$until);
      }

      @$this->total = $result['total'];
      @$this->records  = $result['list'];
      $this->form = new TimeQueryForm(array(),array('params'=>$params));
  }

  private function convertParamToDatetime($time) {
      $time = DateTime::createFromFormat('Y-m-d h:i A',$time);
      return $time->format('Y-m-d H:i:s');
  }
}
