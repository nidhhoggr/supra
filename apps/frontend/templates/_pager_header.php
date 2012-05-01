<table id="sf_pager">
  <tr>
    <?php foreach ($pager->getFields() as $field): ?>
      <th>
        <?php $class = ($pager->getSortedField() == $field['name']) ? 'sorted' : 'sortable'; ?>
        <span id="sortable_<?php echo $pager->getSortDir($field['name']) ?>"></span>
        <?php echo link_to($field['display'], $module . '/index?page='.$pager->getPage().'&sort_dir='.$pager->getSortableDir($field['name']).'&sort_field='.$field['name'],'class="'.$class.'"') ?>
      </th>
    <?php endforeach ?>
  </tr>
