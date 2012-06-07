<?php 

if($user->getUserType() == "client")
$user_id = $user->isClient()->getId();
if($user->getUserType() == "staff")
$user_id = $user->isStaff()->getId();

echo link_to($user,$user->getUserType().'/show?id='.$user_id) ?>
