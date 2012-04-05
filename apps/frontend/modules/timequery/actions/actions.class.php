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
              'from'    => $request->getParameter('from'),
              'until'   => $request->getParameter('until'),
          );

          $from  = $this->convertParamToDatetime($params['from']);

          $until = $this->convertParamToDatetime($params['until']);

          $result = $tl->getByStaffIdBetween($params['staff'],$from,$until);
      }

      $this->total = $result['total'];
      $this->records  = $result['list'];
      $this->form = new TimeQueryForm(array(),array('params'=>$params));
  }

  private function convertParamToDatetime($time) {
      $time = implode('-',$time);
      $time = DateTime::createFromFormat('m-d-Y-H-i',$time);
      return $time->format('Y-m-d H:i:s');
  }
}
