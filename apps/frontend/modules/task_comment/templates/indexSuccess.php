<h1>Task Comments</h1>

<table>
  <thead>
    <tr>
      <th>Task</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_comments as $task_comment): ?>
    <tr>
      <td><?php echo $task_comment->getTask() ?></td>
      <td><?php echo $task_comment->getTitle() ?></td>
      <td>
          <?php echo link_to('edit','task_comment/edit?id='.$task_comment->getId()) ?> |
          <?php echo link_to('show','task_comment/show?id='.$task_comment->getId()) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('task_comment/new') ?>">New</a>
