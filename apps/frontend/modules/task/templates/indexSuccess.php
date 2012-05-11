<?php include_partial('global/indexCrud',array('module'=>'task'))?>
<h2>All Tasks</h2>
<?php include_partial('task/links', array());?>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'task'));?>
