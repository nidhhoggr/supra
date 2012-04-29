<table>
  <thead>
    <tr>
      <?php foreach ($pager->getFields() as $field): ?>
      <th>
        <?php echo link_to($field['display'], $module . '/index?page='.$pager->getLastPage().'&sort_dir='.$pager->getSortDir($field['name']).'&sort_field='.$field['name'],'id="sortable_'.$pager->getSortDir($field['name']).' "') ?>
      </th>
      <?php endforeach ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pager->getResults() as $object): ?>
    <tr>
        <?php foreach($pager->getFields() as $field): ?>
            <td>
                <?php
                  $getter = $field['getter'];
                  $route  = $field['route'];

                  if(!empty($getter)) {
                      if(is_object($object->{$getter}())) {
                          $id = $object->{$getter}()->getId();
                      }
                      else {
                          $id = $object->getId();
                      }

                      echo link_to($object->{$getter}(),$route.'/show?id='.$id);
                  }
                  else {
                      echo $object;
                  }
                ?>
            </td>
        <?php endforeach ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div id="pager">
<?php echo link_to('&laquo; ', $module . '/index?page='.$pager->getFirstPage(),'class="first"') ?>
<?php echo link_to('&lsaquo; ', $module . '/index?page='.$pager->getPreviousPage(),'class="next"') ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $module .'/index?page='.$page,'class="page"') ;?>
<?php if ($page != $pager->getCurrentMaxLink()): ?> <?php endif ?>
<?php endforeach ?>
<?php echo link_to(' &rsaquo;', $module . '/index?page='.$pager->getNextPage(),'id="next"') ?>
<?php echo link_to(' &raquo;', $module . '/index?page='.$pager->getLastPage(),'id="last"') ?>
</div>
