<?php include_partial('staff/staffnav') ?>
<h1>Tasks List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Account</th>
      <th>Staff</th>
      <th>Task status</th>
      <th>Task type</th>
      <th>Task priority</th>
      <th>Task work</th>
      <th>Ref no</th>
      <th>Name</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tasks as $task): ?>
    <tr>
      <td><a href="<?php echo url_for('task/show?id='.$task->getId()) ?>"><?php echo $task->getId() ?></a></td>
      <td><?php echo $task->getAccountId() ?></td>
      <td><?php echo $task->getStaffId() ?></td>
      <td><?php echo $task->getTaskStatusId() ?></td>
      <td><?php echo $task->getTaskTypeId() ?></td>
      <td><?php echo $task->getTaskPriorityId() ?></td>
      <td><?php echo $task->getTaskWorkId() ?></td>
      <td><?php echo $task->getRefNo() ?></td>
      <td><?php echo $task->getName() ?></td>
      <td><?php echo $task->getDescription() ?></td>
      <td><?php echo $task->getCreatedAt() ?></td>
      <td><?php echo $task->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task/new') ?>">New</a>
