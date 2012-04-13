<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $task_priority->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $task_priority->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('task_priority/edit?id='.$task_priority->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('task_priority/index') ?>">List</a>
