<?php include_partial('global/indexCrud',array('module'=>'work'))?>
<h2>Work Types</h2>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Rate</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task_works as $task_work): ?>
    <tr>
      <td><a href="<?php echo url_for('work/show?id='.$task_work->getId()) ?>"><?php echo $task_work->getName() ?></td>
      <td><?php echo $task_work->getRate() ?></td>
      <td><?php echo $task_work->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
