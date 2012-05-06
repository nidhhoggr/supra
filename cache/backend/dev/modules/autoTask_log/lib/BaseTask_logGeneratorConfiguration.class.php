<?php

/**
 * task_log module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage task_log
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTask_logGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%title%% - %%staff_name%% - %%task%% - %%task_work%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Log Management';
  }

  public function getEditTitle()
  {
    return 'Editing Log \'%%title%%\'';
  }

  public function getNewTitle()
  {
    return 'Log Creation';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'title',  1 => 'staff_name',  2 => 'task',  3 => 'task_work',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'task_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'task_work_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Work Type',),
      'staff_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'gen_desc_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'staff_comment' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'clock_in' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'clock_out' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'hours_logged' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'mileage' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'percentage' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_billable' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'is_viewable' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'task_work' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Work Type',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'task_id' => array(),
      'task_work_id' => array(),
      'staff_id' => array(),
      'title' => array(),
      'description' => array(),
      'gen_desc_id' => array(),
      'staff_comment' => array(),
      'clock_in' => array(),
      'clock_out' => array(),
      'hours_logged' => array(),
      'mileage' => array(),
      'percentage' => array(),
      'is_billable' => array(),
      'is_viewable' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'task_id' => array(),
      'task_work_id' => array(),
      'staff_id' => array(),
      'title' => array(),
      'description' => array(),
      'gen_desc_id' => array(),
      'staff_comment' => array(),
      'clock_in' => array(),
      'clock_out' => array(),
      'hours_logged' => array(),
      'mileage' => array(),
      'percentage' => array(),
      'is_billable' => array(),
      'is_viewable' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'task_id' => array(),
      'task_work_id' => array(),
      'staff_id' => array(),
      'title' => array(),
      'description' => array(),
      'gen_desc_id' => array(),
      'staff_comment' => array(),
      'clock_in' => array(),
      'clock_out' => array(),
      'hours_logged' => array(),
      'mileage' => array(),
      'percentage' => array(),
      'is_billable' => array(),
      'is_viewable' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'task_id' => array(),
      'task_work_id' => array(),
      'staff_id' => array(),
      'title' => array(),
      'description' => array(),
      'gen_desc_id' => array(),
      'staff_comment' => array(),
      'clock_in' => array(),
      'clock_out' => array(),
      'hours_logged' => array(),
      'mileage' => array(),
      'percentage' => array(),
      'is_billable' => array(),
      'is_viewable' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'task_id' => array(),
      'task_work_id' => array(),
      'staff_id' => array(),
      'title' => array(),
      'description' => array(),
      'gen_desc_id' => array(),
      'staff_comment' => array(),
      'clock_in' => array(),
      'clock_out' => array(),
      'hours_logged' => array(),
      'mileage' => array(),
      'percentage' => array(),
      'is_billable' => array(),
      'is_viewable' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'TaskLogForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'TaskLogFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
