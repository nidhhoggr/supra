<?php
$page_info = array(
                   'Profile'       => 'main/index',
                   'Accounts'      => 'account/index',
                   'Clients'       => 'client/index',
                   'Employees'     => 'staff/index', 
                   'Clocked In'    => 'time_log/index',
                   'Time Entry'    => 'time_log/new',
                   'Tasks'         => 'task/index',
                   'Invoices'      => 'invoice/index',
                   'Logout'        => 'guard/logout'
                  );



foreach($page_info as $d=>$p) {
    $class = ($p == $page)?"current":"";
    $items[] = link_to($d,$p,array('class'=>$class));
}

echo '<li>' . implode($items,"<span>|</span></li><li>") . '</li>';

