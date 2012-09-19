<?php include_partial('global/indexCrud',array('module'=>'incomplete_task'))?>
<h2>My Incomplete Tasks</h2>
<?php include_partial('task/links', array());?>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'incomplete_task'));?>
