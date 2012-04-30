<?php use_helper('I18N', 'Date') ?>
<?php include_partial('task_log/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editing Log \'%%title%%\'', array('%%title%%' => $task_log->getTitle()), 'messages') ?></h1>

  <?php include_partial('task_log/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('task_log/form_header', array('task_log' => $task_log, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('task_log/form', array('task_log' => $task_log, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('task_log/form_footer', array('task_log' => $task_log, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
