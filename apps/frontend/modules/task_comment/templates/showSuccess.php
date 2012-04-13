<table>
  <tbody>
    <tr>
      <th>Task:</th>
      <td><?php echo $task_comment->getTask() ?></td>
    </tr>
    <tr>
      <th>Staff:</th>
      <td><?php echo $task_comment->getStaff() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $task_comment->getTitle() ?></td>
    </tr>
    <tr>
      <th>Comment:</th>
      <td><?php echo $task_comment->getComment() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $task_comment->getDateTimeObject('created_at')->format('M d, Y h:i a'); ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $task_comment->getDateTimeObject('updated_at')->format('M d, Y h:i a'); ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('task_comment/edit?id='.$task_comment->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('task_comment/index') ?>">List</a>
