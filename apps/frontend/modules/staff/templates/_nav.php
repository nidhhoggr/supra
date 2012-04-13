<?php
$page_info = array(
                   'Profile'       => 'main/index',
                   'Current Staff' => 'time_log/index',
                   'Time Entry'    => 'time_log/new',
                   'Time Report'   => 'timequery/index',
                   'My Tasks'      => 'task/index',
                   'Logout'        => 'guard/logout'
                  );

foreach($page_info as $d=>$p) {
    $class = ($p == $page)?"current":"";
    $items[] = link_to($d,$p,array('class'=>$class));
}

echo '<li>' . implode($items,"<span>|</span></li><li>") . '</li>';

