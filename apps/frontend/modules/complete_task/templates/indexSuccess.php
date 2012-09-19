<?php include_partial('global/indexCrud',array('module'=>'complete_task'))?>
<h2>My Complete Tasks</h2>
<?php include_partial('task/links', array());?>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'complete_task'));?>
