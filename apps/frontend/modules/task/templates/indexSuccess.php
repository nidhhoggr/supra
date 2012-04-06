<h1>Tasks List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Account</th>
      <th>Staff</th>
      <th>Task status</th>
      <th>Task type</th>
      <th>Task priority</th>
      <th>Ref no</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tasks as $task): ?>
    <tr>
      <td><?php echo $task->getName() ?></td>
      <td><?php echo $task->getAccount() ?></td>
      <td><?php echo $task->getStaff() ?></td>
      <td><?php echo $task->getTaskStatus() ?></td>
      <td><?php echo $task->getTaskType() ?></td>
      <td><?php echo $task->getTaskPriority() ?></td>
      <td><?php echo $task->getRefNo() ?></td>
      <td>
          <?=link_to('show','task/show?id='.$task->getId())?> |
          <?=link_to('edit','task/edit?id='.$task->getId())?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task/new') ?>">New</a>
