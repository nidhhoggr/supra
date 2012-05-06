<?php

/**
 * task_log module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage task_log
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTask_logGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'task_log' : 'task_log_'.$action;
  }
}
