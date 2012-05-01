<h1>Tasks List</h1>
  <a href="<?php echo url_for('incomplete_task/index') ?>">Show Incomplete</a>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'task'));?>
  <a href="<?php echo url_for('task/new') ?>">New</a>
