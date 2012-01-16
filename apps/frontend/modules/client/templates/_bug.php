<div class="account_bug">
  <h3>Bugs</h3>
  <?php foreach($bugs as $bug): ?>
  <div>
      <a href="<?php echo url_for('bug/show?id='.$bug->getId())?>">
        <?php echo $bug->getDescription() ?>
      </a>
  </div>
  <?php endforeach ?>
  <?php if($bugs->count() >= 5): ?>
  <div class="view_more">
      View More(<?php echo $bugs->count() ?>)
  </div>
  <?php endif ?>
</div>

