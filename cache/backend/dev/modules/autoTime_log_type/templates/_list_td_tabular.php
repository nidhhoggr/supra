<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo link_to($time_log_type->getName(), 'time_log_type_edit', $time_log_type) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_clock_in">
  <?php echo get_partial('time_log_type/list_field_boolean', array('value' => $time_log_type->getClockIn())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_color">
  <?php echo $time_log_type->getColor() ?>
</td>
