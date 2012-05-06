<table>
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
    <?php foreach ($time_logs as $time_log): ?>
    <tr>
      <td><?php include_partial('staff/linkto',array('staff'=>$time_log->getStaff()))?></td>
      <td><?php echo '<span style="color:'.$time_log->getTimeLogType()->getColor().'">'.$time_log->getTimeLogType().'</span>';?></td>
      <td><?php echo $time_log->getDateTimeObject('time')->format('M d, Y h:i a') ?></td>
      <td><?php echo $time_log->getNotes() ?></td>
      <td><?php echo link_to('show','time_log/show?id='.$time_log->getId()) ?></td>
      <td><?php echo link_to('edit','time_log/edit?id='.$time_log->getId()) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('time_log/new') ?>">New</a>
