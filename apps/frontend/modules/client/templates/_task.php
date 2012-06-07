<?

    $complete_tasks['some'] = $account->getCompleteTasks(true);
    $incomplete_tasks['some'] = $account->getIncompleteTasks(true);

    $complete_tasks['count'] = $account->getCompleteTasks()->count();
    $incomplete_tasks['count'] = $account->getIncompleteTasks()->count();
?>

<?php if($incomplete_tasks['some']->count() > 0): ?>
<h3>Incomplete Tasks</h3>
<div class="account_task">
  <ol>
  <?php foreach($incomplete_tasks['some'] as $task): ?>
      <li>
      <a href="<?php echo url_for('task/show?id='.$task->getId())?>">
        <?php echo $task->getDescription() ?>
      </a>
      </li>
  <?php endforeach ?>
  </ol>
  <?php if($incomplete_tasks['count'] >= 5): ?>
  <div class="view_more">
      <?php echo link_to('View More('.$incomplete_tasks['count'].')','incomplete_task/index') ?>
  </div>
  <?php endif ?>
</div>
<?php endif ?>

<?php if($complete_tasks['some']->count() > 0): ?>
<h3>Complete Tasks</h3>
<div class="account_task">
  <ol>
  <?php foreach($complete_tasks['some'] as $task): ?>
      <li>
      <a href="<?php echo url_for('task/show?id='.$task->getId())?>">
        <?php echo $task->getDescription() ?>
      </a>
      </li>
  <?php endforeach ?>
  </ol>
  <?php if($complete_tasks['count'] >= 5): ?>
  <div class="view_more">
      <?php echo link_to('View More('.$complete_tasks['count'].')','complete_task/index') ?>
  </div>
  <?php endif ?>
</div>
<?php endif ?>
