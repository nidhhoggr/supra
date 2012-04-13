<h1>Task types List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_types as $task_type): ?>
    <tr>
      <td><a href="<?php echo url_for('task_type/show?id='.$task_type->getId()) ?>"><?php echo $task_type->getId() ?></a></td>
      <td><?php echo $task_type->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task_type/new') ?>">New</a>
