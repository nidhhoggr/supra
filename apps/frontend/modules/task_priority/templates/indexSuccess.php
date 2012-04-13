<h1>Task prioritys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_prioritys as $task_priority): ?>
    <tr>
      <td><a href="<?php echo url_for('task_priority/show?id='.$task_priority->getId()) ?>"><?php echo $task_priority->getId() ?></a></td>
      <td><?php echo $task_priority->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task_priority/new') ?>">New</a>
