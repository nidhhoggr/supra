<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $task_type->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $task_type->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('task_type/edit?id='.$task_type->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('task_type/index') ?>">List</a>
