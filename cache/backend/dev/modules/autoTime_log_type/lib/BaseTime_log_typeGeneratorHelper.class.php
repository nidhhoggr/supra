<?php

/**
 * time_log_type module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage time_log_type
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTime_log_typeGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'time_log_type' : 'time_log_type_'.$action;
  }
}
