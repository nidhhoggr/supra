<h1>Inconplete Tasks List</h1>
<a href="<?php echo url_for('task/index') ?>">Show All Tasks</a>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'task'));?>
<a href="<?php echo url_for('task/new') ?>">New</a>
