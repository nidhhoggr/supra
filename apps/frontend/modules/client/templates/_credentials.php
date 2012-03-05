<?php if($credentials->count() > 0): ?>
<div class="client_credentials">
  <h3>Credentials</h3>
  <?php foreach($credentials as $credential): ?>
  <div>
      <a href="<?php echo url_for('credential/show?id='.$credential->getId())?>">
        <?php echo $credential->getName() ?>
      </a>
  </div>
  <?php endforeach ?>
  <?php if($credentials->count() >= 5): ?>
  <div class="view_more">
      View More(<?php echo $credentials->count() ?>)
  </div>
  <?php endif ?>
</div>
<?php endif ?>
