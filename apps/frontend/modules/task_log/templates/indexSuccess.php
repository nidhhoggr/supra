<h1>Work Logs</h1>

<table>
  <thead>
    <tr>
      <th>Task</th>
      <th>Task work</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_logs as $task_log): ?>
    <tr>
      <td><?php echo $task_log->getTask() ?></td>
      <td><?php echo $task_log->getTaskWork() ?></td>
      <td><?php echo $task_log->getTitle() ?></td>
      <td>
          <?php echo link_to('edit','task_log/edit?id='.$task_log->getId()) ?>
          <?php echo link_to('show','task_log/show?id='.$task_log->getId()) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task_log/new') ?>">New</a>
