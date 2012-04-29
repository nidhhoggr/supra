<table id="pager_header">
  <tr>
    <?php foreach ($pager->getFields() as $field): ?>
      <td>
        <?php echo link_to($field['display'], $module . '/index?page='.$pager->getLastPage().'&sort_dir='.$pager->getSortDir($field['name']).'&sort_field='.$field['name'],'id="sortable_'.$pager->getSortDir($field['name']).' "') ?>
      </td>
    <?php endforeach ?>
  </tr>
</table>
