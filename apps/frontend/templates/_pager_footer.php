<div id="pager">
<?php 
$sorting = '&sort_dir='.$pager->getSortDir($pager->getSortedField()).'&sort_field='.$pager->getSortedField();
?>


<?php echo link_to('&laquo; ', $module . '/index?page='.$pager->getFirstPage().$sorting,'class="first"') ?>
<?php echo link_to('&lsaquo; ', $module . '/index?page='.$pager->getPreviousPage().$sorting,'class="next"') ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $module .'/index?page='.$page.$sorting,'class="page"') ;?>
<?php if ($page != $pager->getCurrentMaxLink()): ?> <?php endif ?>
<?php endforeach ?>
<?php echo link_to(' &rsaquo;', $module . '/index?page='.$pager->getNextPage().$sorting,'id="next"') ?>
<?php echo link_to(' &raquo;', $module . '/index?page='.$pager->getLastPage().$sorting,'id="last"') ?>
</div>
