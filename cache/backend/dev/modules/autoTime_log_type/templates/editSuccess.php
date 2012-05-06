<?php use_helper('I18N', 'Date') ?>
<?php include_partial('time_log_type/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Modifying Time Log Type \'%%name%%\'', array('%%name%%' => $time_log_type->getName()), 'messages') ?></h1>

  <?php include_partial('time_log_type/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('time_log_type/form_header', array('time_log_type' => $time_log_type, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('time_log_type/form', array('time_log_type' => $time_log_type, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('time_log_type/form_footer', array('time_log_type' => $time_log_type, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
