<table>
  <tr>
    <?php foreach ($pager->getFields() as $field): ?>
      <th>
        <?php echo link_to($field['display'], $module . '/index?page='.$pager->getPage().'&sort_dir='.$pager->getSortDir($field['name']).'&sort_field='.$field['name'],'id="sortable_'.$pager->getSortDir($field['name']).' "') ?>
      </th>
    <?php endforeach ?>
  </tr>
