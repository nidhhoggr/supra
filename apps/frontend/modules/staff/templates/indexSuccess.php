<?php include_partial('global/indexCrud', array('module'=>'staff'));?>
<h2><?php echo link_to('Employees','staff/index')?></h2>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'staff'));?>

