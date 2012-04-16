<?php if ($pager->haveToPaginate())  { ?>

<div id="pager">

<?php echo link_to('&laquo; ', $module . '/index?page='.$pager->getFirstPage(),'class="first"') ?>
<?php echo link_to('&lsaquo; ', $module . '/index?page='.$pager->getPreviousPage(),'class="next"') ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $module .'/index?page='.$page,'class="page"') ;?>
<?php if ($page != $pager->getCurrentMaxLink()): ?> <?php endif ?>
<?php endforeach ?>
<?php echo link_to(' &rsaquo;', $module . '/index?page='.$pager->getNextPage(),'id="next"') ?>
<?php echo link_to(' &raquo;', $module . '/index?page='.$pager->getLastPage(),'id="last"') ?>
<?php echo link_to(' | change sort order ', $module . '/index?page='.$pager->getLastPage().'&sort='.$pager->getSortable(),'id="change_sort"') ?>
<?php } ?></div>
