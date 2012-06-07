<?php

/**
 * task actions.
 *
 * @package    supra
 * @subpackage task
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class incomplete_taskActions extends TaskActionsUtil
{
  public function executeIndex(sfWebRequest $request)
  {
    $dpu = new sfDoctrinePagerUtil('Task', 10);
    $sort = $dpu->getSort($request);
    $tasks = Doctrine_Core::getTable('Task')->queryIncompleteByUserId($sort);
    $this->pager = $this->_getPager(array('query'=>$tasks,'request'=>$request,'pager'=>$dpu));
  }
}
