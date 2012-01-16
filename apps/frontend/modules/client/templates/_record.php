<div class="client_record">
  <h3>Records</h3>
  <?php foreach($records as $record): ?>
  <div>
      <a href="<?php echo url_for('account_record/show?id='.$record->getId())?>">
        <?php echo $record->getName() ?>
      </a>
  </div>
  <?php endforeach ?>
  <?php if($records->count() >= 5): ?>
  <div class="view_more">
      View More(<?php echo $records->count() ?>)
  </div>
  <?php endif ?>
</div>

