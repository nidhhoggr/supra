<?php use_helper('I18N', 'Date') ?>
<?php include_partial('staff/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Employee Creation', array(), 'messages') ?></h1>

  <?php include_partial('staff/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('staff/form_header', array('staff' => $staff, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('staff/form', array('staff' => $staff, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('staff/form_footer', array('staff' => $staff, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
