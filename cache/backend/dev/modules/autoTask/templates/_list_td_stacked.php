<td colspan="5">
  <?php echo __('%%ref_no%% - %%name%% - %%account%% - %%task_work%% - %%task_priority%%', array('%%ref_no%%' => $task->getRefNo(), '%%name%%' => $task->getName(), '%%account%%' => $task->getAccount(), '%%task_work%%' => $task->getTaskWork(), '%%task_priority%%' => $task->getTaskPriority()), 'messages') ?>
</td>
