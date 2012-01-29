<h1>Task works List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Rate</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_works as $task_work): ?>
    <tr>
      <td><a href="<?php echo url_for('work/show?id='.$task_work->getId()) ?>"><?php echo $task_work->getId() ?></a></td>
      <td><?php echo $task_work->getName() ?></td>
      <td><?php echo $task_work->getRate() ?></td>
      <td><?php echo $task_work->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('work/new') ?>">New</a>
