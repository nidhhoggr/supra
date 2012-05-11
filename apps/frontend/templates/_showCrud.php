<div id="actions">
<?php echo link_to(' ',$module.'/index',array('class'=>'list')) ?>
<?php echo link_to(' ',$module.'/new',array('class'=>'new')) ?>
<?php echo link_to(' ',$module.'/edit?id='.$object->getId(),array('class'=>'edit')) ?>
<?php echo link_to(' ',$module.'/delete?id='.$object->getId(),array('class'=>'delete','method'=>'delete','confirm'=>'Are you sure?')) ?>
</div>
<div id="cleaner"></div>
