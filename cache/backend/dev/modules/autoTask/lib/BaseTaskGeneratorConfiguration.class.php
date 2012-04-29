<?php

/**
 * task module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage task
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTaskGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%ref_no%% - %%name%% - %%account%% - %%task_work%% - %%task_priority%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Task Management';
  }

  public function getEditTitle()
  {
    return 'Editing Task \'%%name%%\'';
  }

  public function getNewTitle()
  {
    return 'Task Creation';
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
    return array(  0 => 'ref_no',  1 => 'name',  2 => 'account',  3 => 'task_work',  4 => 'task_priority',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'account_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'staff_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'task_status_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'task_type_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'task_priority_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'task_work_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'ref_no' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'account_invoice_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'account_id' => array(),
      'staff_id' => array(),
      'task_status_id' => array(),
      'task_type_id' => array(),
      'task_priority_id' => array(),
      'task_work_id' => array(),
      'ref_no' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'account_invoice_list' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'account_id' => array(),
      'staff_id' => array(),
      'task_status_id' => array(),
      'task_type_id' => array(),
      'task_priority_id' => array(),
      'task_work_id' => array(),
      'ref_no' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'account_invoice_list' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'account_id' => array(),
      'staff_id' => array(),
      'task_status_id' => array(),
      'task_type_id' => array(),
      'task_priority_id' => array(),
      'task_work_id' => array(),
      'ref_no' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'account_invoice_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'account_id' => array(),
      'staff_id' => array(),
      'task_status_id' => array(),
      'task_type_id' => array(),
      'task_priority_id' => array(),
      'task_work_id' => array(),
      'ref_no' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'account_invoice_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'account_id' => array(),
      'staff_id' => array(),
      'task_status_id' => array(),
      'task_type_id' => array(),
      'task_priority_id' => array(),
      'task_work_id' => array(),
      'ref_no' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'account_invoice_list' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'TaskForm';
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
    return 'TaskFormFilter';
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
