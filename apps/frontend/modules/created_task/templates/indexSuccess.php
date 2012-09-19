<?php include_partial('global/indexCrud',array('module'=>'created_task'))?>
<h2>My Created Tasks</h2>
<?php include_partial('task/links', array());?>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'created_task'));?>
