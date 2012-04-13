<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $task_log->getId() ?></td>
    </tr>
    <tr>
      <th>Task:</th>
      <td><?php echo $task_log->getTaskId() ?></td>
    </tr>
    <tr>
      <th>Task work:</th>
      <td><?php echo $task_log->getTaskWorkId() ?></td>
    </tr>
    <tr>
      <th>Staff:</th>
      <td><?php echo $task_log->getStaffId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $task_log->getTitle() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $task_log->getDescription() ?></td>
    </tr>
    <tr>
      <th>Gen desc:</th>
      <td><?php echo $task_log->getGenDescId() ?></td>
    </tr>
    <tr>
      <th>Staff comment:</th>
      <td><?php echo $task_log->getStaffComment() ?></td>
    </tr>
    <tr>
      <th>Clock in:</th>
      <td><?php echo $task_log->getClockIn() ?></td>
    </tr>
    <tr>
      <th>Clock out:</th>
      <td><?php echo $task_log->getClockOut() ?></td>
    </tr>
    <tr>
      <th>Hours logged:</th>
      <td><?php echo $task_log->getHoursLogged() ?></td>
    </tr>
    <tr>
      <th>Mileage:</th>
      <td><?php echo $task_log->getMileage() ?></td>
    </tr>
    <tr>
      <th>Percentage:</th>
      <td><?php echo $task_log->getPercentage() ?></td>
    </tr>
    <tr>
      <th>Is billable:</th>
      <td><?php echo $task_log->getIsBillable() ?></td>
    </tr>
    <tr>
      <th>Is viewable:</th>
      <td><?php echo $task_log->getIsViewable() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $task_log->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $task_log->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('task_log/edit?id='.$task_log->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('task_log/index') ?>">List</a>
