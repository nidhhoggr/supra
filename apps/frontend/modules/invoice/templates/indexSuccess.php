<h1>Invoice List</h1>
<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'invoice'));?>
<a href="<?php echo url_for('invoice/new') ?>">New</a>
