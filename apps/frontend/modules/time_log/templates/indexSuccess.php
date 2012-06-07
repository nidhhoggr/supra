<?php include_partial('global/indexCrud',array('module'=>'time_log'))?>
<?php echo link_to('Generate Report','timequery/index') ?>
<table class="time_entry">
  <thead>
    <tr>
      <th>Employee</th>
      <th>Status</th>
      <th>Time</th>
      <th>Notes</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($time_logs as $i => $time_log): ?>
    <tr class=<?php echo ($i%2==0)?'"even"':'"odd"';?>>
      <td><?php include_partial('staff/linkto',array('staff'=>$time_log->getStaff()))?></td>
      <td><?php echo '<span style="color:'.$time_log->getTimeLogType()->getColor().'">'.$time_log->getTimeLogType().'</span>';?></td>
      <td><?php echo $time_log->getDateTimeObject('time')->format('M d, Y h:i a') ?></td>
      <td class="notes"><?php echo $time_log->getNotes() ?></td>
      <td><?php echo link_to('show','time_log/show?id='.$time_log->getId()) ?></td>
      <td><?php echo link_to('edit','time_log/edit?id='.$time_log->getId()) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
