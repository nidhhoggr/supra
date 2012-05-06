<td colspan="3">
  <?php echo __('%%name%% - %%clock_in%% - %%color%%', array('%%name%%' => link_to($time_log_type->getName(), 'time_log_type_edit', $time_log_type), '%%clock_in%%' => get_partial('time_log_type/list_field_boolean', array('value' => $time_log_type->getClockIn())), '%%color%%' => $time_log_type->getColor()), 'messages') ?>
</td>
