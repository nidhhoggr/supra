<div class="account_task">
  <h3>Tasks</h3>
  <?php foreach($tasks as $task): ?>
  <div>
      <a href="<?php echo url_for('task/show?id='.$task->getId())?>">
        <?php echo $task->getDescription() ?>
      </a>
  </div>
  <?php endforeach ?>
  <?php if($tasks->count() >= 5): ?>
  <div class="view_more">
      View More(<?php echo $tasks->count() ?>)
  </div>
  <?php endif ?>
</div>

