<?php
$page_info = array(
                   'Profile'       => 'main/index',
                   'My Accounts'   => 'account/index',
                   'My Tasks'      => 'task/index',
                   'Employees'     => 'staff/index',
                   'Logout'        => 'guard/logout'
                  );

foreach($page_info as $d=>$p) {
    $class = ($p == $page)?"current":"";
    $items[] = link_to($d,$p,array('class'=>$class));
}

echo '<li>' . implode($items,"<span>|</span></li><li>") . '</li>';

