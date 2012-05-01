<div id="pager_footer">
<?php
$sorting = '&sort_dir='.$pager->getSortDir($pager->getSortedField()).'&sort_field='.$pager->getSortedField();
echo link_to(' ', $module . '/index?page='.$pager->getFirstPage().$sorting,'class="first"');
echo link_to(' ', $module . '/index?page='.$pager->getPreviousPage().$sorting,'class="prev"');

$links = $pager->getLinks(); 
foreach ($links as $page) {
    $class = ($page == $pager->getPage()) ? 'current_page' : 'page' ; 
    echo link_to($page, $module .'/index?page='.$page.$sorting,'class="'.$class.'"');
    if ($page != $pager->getCurrentMaxLink()){};
}

echo link_to(' ', $module . '/index?page='.$pager->getNextPage().$sorting,'class="next"');
echo link_to(' ', $module . '/index?page='.$pager->getLastPage().$sorting,'class="last"');
?>
<div id="cleaner"></div>
</div>
