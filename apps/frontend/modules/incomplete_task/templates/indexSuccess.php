<h1>My Incomplete Tasks</h1>
<?php include_partial('task/links', array());?>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'task'));?>
<a href="<?php echo url_for('task/new') ?>">New</a>
