<form action="<?php echo url_for('timequery/index') ?>" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
 
  <?php 
     if($total) {
         echo "Total hours: " . $total['h'] . " hours " . $total['m'] . " minutes";
?>
<table>
  <thead>
    <tr>
      <th>Staff</th>
      <th>Status</th>
      <th>Time</th>
      <th>Notes</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($records as $time_log): ?>
    <tr>
      <td><?php echo $time_log->getStaff() ?></td>
      <td><?php echo $time_log->getTimeLogType() ?></td>
      <td><?php echo $time_log->getDateTimeObject('time')->format('M d, Y h:i a') ?></td>
      <td><?php echo $time_log->getNotes() ?></td>
      <td><?php echo link_to('show','time_log/show?id='.$time_log->getId()) ?></td>
      <td><?php echo link_to('edit','time_log/edit?id='.$time_log->getId()) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php 
     }
  ?>
</form>
