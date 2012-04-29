<table>
  <tbody>
    <tr>
      <th>Time log type:</th>
      <td><?php echo $time_log->getTimeLogType() ?></td>
    </tr>
    <tr>
      <th>Employee:</th>
      <td><?php echo $time_log->getStaff() ?></td>
    </tr>
    <tr>
      <th>Time:</th>
      <td><?php echo $time_log->getDateTimeObject('time')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <th>Notes:</th>
      <td><?php echo $time_log->getNotes() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('time_log/edit?id='.$time_log->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('time_log/index') ?>">List</a>
