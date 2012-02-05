<?php 
if($account->getTitle()):
    echo link_to($account->getTitle(),'account/show?id='.$account->getId());
elseif($account->getDomainName()):
    echo link_to($account->getDomainName(),'account/show?id='.$account->getId());
endif;
?>
