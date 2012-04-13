<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $task_status->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $task_status->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('task_status/edit?id='.$task_status->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('task_status/index') ?>">List</a>
