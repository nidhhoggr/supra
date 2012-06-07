<?php

/**
 * created_task actions.
 *
 * @package    supra
 * @subpackage created_task
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class created_taskActions extends TaskActionsUtil
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

    $dpu = new sfDoctrinePagerUtil('Task', 10);
    $sort = $dpu->getSort($request);
    $tasks = Doctrine_Core::getTable('Task')->queryCreatedByUserId($sort);
    $this->pager = $this->_getPager(array('query'=>$tasks,'request'=>$request,'pager'=>$dpu));
  }
}
