<h1>Task statuss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_statuss as $task_status): ?>
    <tr>
      <td><a href="<?php echo url_for('task_status/show?id='.$task_status->getId()) ?>"><?php echo $task_status->getId() ?></a></td>
      <td><?php echo $task_status->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task_status/new') ?>">New</a>
