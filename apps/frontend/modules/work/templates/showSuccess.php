<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $task_work->getName() ?></td>
    </tr>
    <tr>
      <th>Rate:</th>
      <td><?php echo $task_work->getRate() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $task_work->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('work/edit?id='.$task_work->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('work/index') ?>">List</a>
